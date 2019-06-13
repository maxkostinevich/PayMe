<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class PaymentFormController extends Controller
{
    // Show the payment form
    public function show($uid)
    {
        $form = Form::where('id', $uid)
            ->orWhere('uid', $uid)
            ->where('is_active', 1)
            ->firstOrFail();

        return view('payment-form.show', compact('form'));
    }
}
