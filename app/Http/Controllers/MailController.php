<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function send(Request $request){

        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'mail' => 'email',
            'message' => 'required',
        ]);

        Mail::to('fundacionarca2012@gmail.com')->send(new ContactMail($request));

        return redirect()->route('home');

    }

}
