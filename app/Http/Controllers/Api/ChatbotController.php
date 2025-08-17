<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        $message = $request->input('message');
        $apiKey = env('GEMMA_API_KEY');

        // Request ke Gemma AI sesuai format baru
        $response = Http::post('https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . $apiKey, [
            'contents' => [
                [
                    'parts' => [
                        ['text' => 'kamu adalah asisten sekolah smk atau sma prestasi prima, jadi jawab pesan ini dengan sangat singkat dan sopan tapi gausah bertele2 biar ga terlalu ai. ' . $message]
                    ]
                ]
            ]
        ]);

        $result = $response->json();

        // Ambil text dari response
        $reply = $result['candidates'][0]['content']['parts'][0]['text'] ?? 
                 'Maaf, saya tidak bisa menjawab saat ini.';

        return response()->json([
            'reply' => $reply
        ]);
    }
}
