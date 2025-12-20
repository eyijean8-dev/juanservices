<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 🛑 Honeypot anti-bot
        if ($request->filled('contact_me_by_fax_only')) {
            Log::info('Bot détecté via honeypot');
            return redirect()->back()->with('success', 'Message envoyé avec succès.');
        }

        // ⏱️ Anti-spam par temps
        if ($request->filled('timestamp') && time() - $request->timestamp < 3) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Veuillez prendre votre temps pour remplir le formulaire.');
        }

        // ✅ Validation
        $validated = $request->validate([
            'name'    => 'required|string|min:2|max:100',
            'email'   => 'required|email|max:100',
            'subject' => 'required|in:general,quote,support,partnership,other',
            'message' => 'required|string|min:10|max:1000',
        ]);

        try {
            Mail::raw(
                "NOUVEAU MESSAGE JUANSERVICE\n\n".
                "Nom : {$validated['name']}\n".
                "Email : {$validated['email']}\n".
                "Sujet : {$validated['subject']}\n".
                "Message :\n{$validated['message']}",
                function ($mail) use ($validated) {
                    $mail->to('eyijean1@gmail.com')
                         ->subject('📩 JuanService - Nouveau message')
                         ->replyTo($validated['email'], $validated['name']);
                }
            );

            Log::info('Message contact envoyé', $validated);

            return redirect()->back()
                ->with('success', 'Message envoyé avec succès ! Nous vous répondrons sous 24h.');

        } catch (\Exception $e) {

            Log::error('Erreur envoi mail contact', [
                'error' => $e->getMessage()
            ]);

            return redirect()->back()
                ->withInput()
                ->with('error', 'Erreur lors de l’envoi du message. Veuillez réessayer.');
        }
    }
}
