<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Mail;

class MailController extends Controller
{
    public function mailform()
    {
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        Mail::to('m@example.com')->send(new SendMail($request));
        return back()->with('sentSuccessfully', 'Thank you for reaching out. Your message has been sent successfully.');
    }
}
