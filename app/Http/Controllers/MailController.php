<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {

        $data = array('name' => $request->name, 'email' => $request->email, 'subject' => $request->subject, 'msg' => $request->msg);

        try {

            Mail::send('email.messageContact', $data, function ($message) use ($request) {
                $message->to('antoniora48@gmail.com', 'Antonio Ruiz Aznar')->subject($request->subject);
            });
            return "0";

        } catch (\Exception $e) {
            return '1: ' . $e->getMessage() . "\n";
        }

    }
}
