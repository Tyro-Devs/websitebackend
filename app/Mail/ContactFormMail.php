<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $message;

    public function __construct($name, $email, $subject, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function build()
    {
        $name = $this->name;
        $emails = $this->email;
        $subject = $this->subject;
        $messages =  $this->message;

        return $this->subject($this->subject)
                    ->from(env('MAIL_USERNAME'), $this->name , $this->message)
                    ->view('emails.contact_form_mail',compact('name','emails','subject','messages'));
    }
}
