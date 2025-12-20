<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);

        Mail::raw(
            "Nom : {$request->name}\nEmail : {$request->email}\nSujet : {$request->subject}\n\nMessage :\n{$request->message}",
            function ($mail) use ($request) {
                $mail->to('eyijean1@gmail.com')
                     ->subject('📩 Nouveau message – JuanServices');
            }
        );

        return back()->with('success', 'Message envoyé avec succès !');
    }
}
