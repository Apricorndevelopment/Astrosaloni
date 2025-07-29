<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'         => 'required',
            'email'        => 'required|email',
            'subject'      => 'nullable|string',
            'user_message' => 'required|string',  // renamed here
        ]);

        Mail::to('developerapricorn1234@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Message sent successfully!');
    }
}
