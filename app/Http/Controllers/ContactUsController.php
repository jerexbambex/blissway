<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function show()
    {
        return view('front.pages.contact');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'department' => ['required']
        ]);

        Contact::create($attributes);

        return back()->with('success', 'Your message was sent successfully!');
    }
}
