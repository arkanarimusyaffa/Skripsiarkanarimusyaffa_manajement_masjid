<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeminiService
{
    protected $apiKey;
    protected $baseUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent';

    public function __construct()
    {
        $this->apiKey = config('services.gemini.api_key');
    }

    public function getResponse($prompt)
    {
        $response = Http::post($this->baseUrl . '?key=' . $this->apiKey, [
            'contents' => [[
                'parts' => [['text' => $prompt]]
            ]]
        ]);

        return $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'Maaf, terjadi kesalahan.';
    }
}
