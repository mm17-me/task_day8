<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{

    public function sendMail(Request $request)
    {
        $data = $request->validate([
            'fullname'=>'required|string|max:50',
            'email'=> 'required|string',
            'phone' => 'required|string',
            'subject' => 'required',
            'mess' => 'required',
           ]);

        Mail::to('m@example.com')->send(new SendMail($data));
        return back()->with('sentSuccessfully', 'Thank you for reaching out. Your message has been sent successfully.');
    }
}
