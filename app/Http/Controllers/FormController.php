<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
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
    public function index()
    {
        $forms = auth()->user()->forms()->orderBy('id', 'desc')->paginate(25);
        return view('forms.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = new Form();
        $form->user_id = auth()->user()->id;
        return view('forms.edit', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form();
        $form->user_id = auth()->user()->id;
        return $this->update($request, $form);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uid)
    {
        $form = Form::where('id', $uid)
            ->orWhere('uid', $uid)
            ->firstOrFail();

        if (auth()->user()->id != $form->user_id) {
            return abort(401);
        }

        return view('forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Form $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        if (auth()->user()->id != $form->user_id) {
            return abort(401);
        }

        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric|min:1',
            'currency' => 'required',
        ]);

        $form->description = $request->input('description');
        $form->amount = (float)str_replace(',', '', $request->input('amount')) * 100;
        $form->currency = $request->input('currency');
        $form->is_active = $request->input('is_active');

        $form->uid = $form->uid ?? uniqid();

        $message = $form->id ? 'Payment form has been updated successfully' : 'Payment form has been created successfully';
        $form->save();

        return redirect()
            ->route('forms.edit', $form)
            ->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($uid)
    {
        $form = Form::where('id', $uid)
            ->orWhere('uid', $uid)
            ->firstOrFail();

        if (auth()->user()->id != $form->user_id) {
            return abort(401);
        }

        $form->delete();

        return redirect()
            ->route('forms.index')->with('status', 'Payment form has been deleted successfully');
    }
}
