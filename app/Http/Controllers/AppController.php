<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function MailContact(Request $request){
       // Validate the form data
       $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Send email
    Mail::to('sanmitpawar@gmail.com')->send(new ContactMail($validatedData));

    // Optionally, you can return a response or redirect the user
    return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
