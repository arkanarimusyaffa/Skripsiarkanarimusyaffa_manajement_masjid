<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function process(Request $request)
    {
        $userMessage = $request->input('message');

        // Kirim ke OpenAI GPT
        $response = Http::withToken(env('OPENAI_API_KEY'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'Anda adalah asisten virtual masjid yang sopan dan informatif. Jawab pertanyaan tentang donasi, zakat, qurban, dan kegiatan masjid.'
                    ],
                    [
                        'role' => 'user',
                        'content' => $userMessage
                    ]
                ],
                'temperature' => 0.7,
            ]);

        $botReply = $response->json()['choices'][0]['message']['content'];

        // Format respons ke frontend
        return response()->json([
            'response' => [
                'text' => nl2br($botReply),
                'options' => [] // Tambahkan jika ingin opsi tombol tambahan
            ]
        ]);
    }
}
