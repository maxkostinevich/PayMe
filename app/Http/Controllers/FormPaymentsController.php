<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormPaymentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($uid)
    {
        $form = Form::where('id', $uid)
            ->orWhere('uid', $uid)
            ->firstOrFail();

        if (auth()->user()->id != $form->user_id) {
            return abort(401);
        }

        $payments = $form->payments()->orderBy('id', 'desc')->paginate(25);
        return view('payments.index', compact('payments', 'form'));
    }

}
