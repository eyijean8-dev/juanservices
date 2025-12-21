<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validation anti-spam
        $honeypot = $request->input('contact_me_by_fax_only');
        if ($honeypot) {
            // C'est un bot, retourne un succès fictif
            Log::info('Bot détecté via honeypot');
            return response()->json(['success' => true]);
        }

        // Validation anti-temps (si < 3 secondes, c'est un bot)
        $timestamp = $request->input('timestamp');
        if (time() - $timestamp < 3) {
            Log::warning('Soumission trop rapide (temps: ' . (time() - $timestamp) . 's)');
            return response()->json([
                'success' => false,
                'message' => 'Veuillez prendre votre temps pour remplir le formulaire'
            ], 422);
        }

        // Validation des données
        try {
            $validated = $request->validate([
                'name' => 'required|string|min:2|max:100',
                'email' => 'required|email|max:100',
                'subject' => 'required|string|in:general,quote,support,partnership,other',
                'message' => 'required|string|min:10|max:1000',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),
                'message' => 'Veuillez corriger les erreurs dans le formulaire'
            ], 422);
        }

        // Préparation des données
        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'received_at' => now()->format('d/m/Y H:i:s'),
        ];

        Log::info('Nouveau message de contact', $data);

        try {
            // Envoi de l'email
            Mail::raw(
                "NOUVEAU MESSAGE JUANSERVICE\n" .
                "=======================\n" .
                "👤 Nom : {$data['name']}\n" .
                "📧 Email : {$data['email']}\n" .
                "🎯 Sujet : {$data['subject']}\n" .
                "🕐 Date : {$data['received_at']}\n" .
                "🌐 IP : {$data['ip_address']}\n" .
                "=======================\n\n" .
                "📝 Message :\n" .
                "{$data['message']}\n\n" .
                "=======================\n" .
                "User Agent : {$data['user_agent']}",
                
                function ($mail) use ($data) {
                    $mail->to('eyijean1@gmail.com')
                         ->subject('📩 JuanService - Nouveau message: ' . $data['subject'])
                         ->replyTo($data['email'], $data['name']);
                }
            );

            Log::info('Email envoyé avec succès à eyijean1@gmail.com');

            return response()->json([
                'success' => true,
                'message' => 'Message envoyé avec succès ! Nous vous répondrons dans les 24h.'
            ]);

        } catch (\Exception $e) {
            Log::error('Erreur envoi email', [
                'error' => $e->getMessage(),
                'data' => $data
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de l\'envoi du message. Veuillez réessayer ou nous contacter directement par téléphone.'
            ], 500);
        }
    }
}