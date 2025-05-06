<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\PertanyaanJawaban;

class ChatbotController extends Controller
{
    public function send(Request $request)
    {
        $message = $request->input('message');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'Kamu adalah chatbot pelayan masjid yang ramah dan Islami.'],
                ['role' => 'user', 'content' => $message],
            ],
        ]);

        $reply = $response->json()['choices'][0]['message']['content'];

        return response()->json(['reply' => $reply]);
    }
}
