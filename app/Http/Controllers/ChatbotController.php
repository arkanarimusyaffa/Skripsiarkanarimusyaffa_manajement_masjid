<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chatbot.index'); // Or whatever response/view you intend
    }
    public function process(Request $request)
    {
        $message = strtolower($request->input('message'));
        $response = $this->generateResponse($message);

        return response()->json([
            'response' => $response
        ]);
    }

    private function generateResponse($message)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json'
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'Kamu adalah asisten masjid. Jawablah secara singkat dan ramah.'],
                    ['role' => 'user', 'content' => $message]
                ],
                'temperature' => 0.7
            ]
        ]);

        $body = json_decode($response->getBody(), true);
        return [
            'text' => $body['choices'][0]['message']['content'],
            'options' => []
        ];
    }
}
