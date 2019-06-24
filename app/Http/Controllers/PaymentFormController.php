<?php

namespace App\Http\Controllers;

use App\Events\PaymentCreated;
use App\Payment;
use Exception;
use App\Form;
use Illuminate\Http\Request;
use Stripe\Stripe;

class PaymentFormController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Stripe $stripe)
    {
        //
    }

    // Show the payment form
    public function show($uid)
    {
        $form = Form::where('id', $uid)
            ->orWhere('uid', $uid)
            ->where('is_active', 1)
            ->firstOrFail();

        return view('payment-form.show', compact('form'));
    }

    // Process the payment via AJAX
    public function store(Request $request)
    {
        // Get the form
        $uid = $request->route('uid');
        $form = Form::where('uid', $uid)
            ->where('is_active', 1)
            ->with('user')
            ->firstOrFail();

        try {
            $token = $request->input('stripeToken');
            // create charge
            $charge = \Stripe\Charge::create(
                array(
                    'amount' => $form->amount,
                    'currency' => $form->currency,
                    'source' => $token,
                    'application_fee_amount' => get_payment_fee($form->amount),
                    'transfer_data' => [
                        'destination' => $form->user->stripe_account_id,
                    ],
                )
            );

            // Create new payment
            $payment = new Payment;
            $payment->user_id = $form->user->id;
            $payment->form_id = $form->id;
            $payment->customer_name = $request->input('customer_name');
            $payment->customer_email = $request->input('customer_email');
            $payment->charge_id = $charge->id;
            $payment->amount = $charge->amount;
            $payment->currency = $charge->currency;
            $payment->application_fee_amount = $charge->application_fee_amount;
            $payment->receipt_url = $charge->receipt_url;
            $payment->save();

            event(new PaymentCreated($payment));

            // return success
            return response()->json(['success' => true], 200);
        } catch (Exception $e) {
            logger()->error($e->getMessage());
        }

        // otherwise return error
        return response()->json([
            'success' => 'false',
            'errors' => 'Oops! Something went wrong.',
        ], 400);

    }
}
