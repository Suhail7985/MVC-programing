<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('simple-form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            
        ]);


        return back()->with('success', 'Form submitted successfully!');
    }
}

