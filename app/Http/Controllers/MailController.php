<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMailForm(Request $request){
        Mail::to($request->email)->send(new TestMail($request));
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'password' => 'required|string|min:6',
                'birthdate' => 'required|date',
                // 'subject' => 'required|string|max:255',
                // 'body' => 'required|string',
            ]
        );

        \App\Models\Mail::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'birthdate' => $request['birthdate'],
            // 'subject' => $request['subject'],
            // 'body' => $request['body'],
        ]);

        return back()->with('success', 'Email sent successfully!');
    }

    public function sendMail(Request $request)
    {
        // Validate the request data
        
        return back()->with('success', 'Email sent successfully!');
    }
}
