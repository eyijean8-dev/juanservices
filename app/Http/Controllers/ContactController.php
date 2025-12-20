<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 🔒 Validation simple (Laravel affichera les erreurs)
        $validated = $request->validate([
            'name'    => 'required|string|min:2|max:100',
            'email'   => 'required|email|max:100',
            'subject' => 'required|string',
            'message' => 'required|string|min:10|max:1000',
        ]);

        // ✉️ Envoi du mail (SI ça échoue → exception visible)
        Mail::raw(
            "NOUVEAU MESSAGE JUANSERVICE\n\n" .
            "Nom : {$validated['name']}\n" .
            "Email : {$validated['email']}\n" .
            "Sujet : {$validated['subject']}\n\n" .
            "Message :\n{$validated['message']}",
            function ($mail) use ($validated) {
                $mail->to('eyijean1@gmail.com')
                     ->subject('📩 Contact JuanServices')
                     ->replyTo($validated['email'], $validated['name']);
            }
        );

        // ✅ Redirection simple avec message
        return back()->with('success', 'Message envoyé avec succès.');
    }
}
