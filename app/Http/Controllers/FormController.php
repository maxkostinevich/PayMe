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
        return view('forms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = new Form();
        return $this->edit($form);
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
     *
     * @param \App\Form $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
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
        $request->validate([
            'description' => 'required',
            'amount' => 'required',
            'currency' => 'required',
        ]);

        $form->description = $request->input('description');
        $form->amount = $request->input('amount') * 100;
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
     *
     * @param \App\Form $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        if (auth()->user()->id != $form->user_id) {
            return abort(401);
        }

        $form->delete();

        return redirect()
            ->route('forms.index')->with('status', 'Payment form has been deleted successfully');
    }
}
