<?php

namespace App\Http\Controllers;

use App\Payment;
use Exception;
use Illuminate\Http\Request;
use Stripe\Stripe;

class PaymentController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Stripe $stripe)
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = auth()->user()->payments()->orderBy('id', 'desc')->paginate(25);
        return view('payments.index', compact('payments'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        if (auth()->user()->id != $payment->user_id) {
            return abort(401);
        }

        try {
            $refund = \Stripe\Refund::create([
                'charge' => $payment->charge_id,
                'refund_application_fee' => true,
                'reverse_transfer' => true
            ]);

            $payment->is_refunded = 1;
            $payment->save();

            return redirect()
                ->back()->with('status', 'Refund has been processed successfully');
        } catch (Exception $e) {
            logger()->error($e->getMessage());
        }

        return redirect()
            ->back()->withErrors('There was an error encountered.');
    }

}
