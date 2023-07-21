<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Config;
use App\Mail\ContactFormMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{


    public function sendMail(Request $request)
    {
        // Validate the form data (optional, but recommended)
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Get the form data
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');


        // Set the email configuration using the credentials from config/mail.php
        Config::set('mail.username', env('MAIL_USERNAME'));
        Config::set('mail.password', env('MAIL_PASSWORD'));

        // Send the email using the Mailable
        try {
            Message::create($request->all());
            Mail::to('tyro.devs@tyrodevs.com')->send(new ContactFormMail($name, $email, $subject, $message));

            // Email sent successfully
            return response()->json(['code' =>1]);
        } catch (\Exception $e) {
            // Something went wrong while sending the email
            return response()->json(['error', 'message' => $e->getMessage()]);
        }
    }
    }








