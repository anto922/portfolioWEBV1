<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        try {

            Mail::raw('Nombre: ' . $request->name . '
                   Email: ' . $request->email . ''

                . $request->msg, function ($message) use ($request) {

                    $message->to('antoniora48@gmail.com', 'Antonio Ruiz Aznar')->subject($request->subject);

                });
            return "0";

        } catch (\Exception $e) {
            return '1: ' . $e->getMessage() . "\n";
        }

    }
}
