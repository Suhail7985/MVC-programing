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
        ]);

        // (Optional) Do something with the data, like saving to DB

        return back()->with('success', 'Form submitted successfully!');
    }
}

