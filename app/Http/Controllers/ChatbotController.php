<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chatbot.index');
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');

        // Simulasi Machine Learning atau AI Response
        $response = $this->getAiResponse($message);

        return response()->json(['reply' => $response]);
    }

    private function getAiResponse($input)
    {
        // Ini bisa kamu ganti dengan integrasi Python ML model atau API seperti GPT/Dialogflow
        $faq = [
            'donasi' => 'Anda bisa berdonasi melalui halaman Donasi di dashboard.',
            'zakat' => 'Zakat dapat disalurkan melalui program Zakat Masjid setiap Jumat.',
            'qurban' => 'Pendaftaran Qurban dibuka setiap bulan Dzulhijjah.',
            'kegiatan' => 'Silakan lihat jadwal kegiatan masjid di halaman Jadwal Kegiatan.',
        ];

        foreach ($faq as $key => $value) {
            if (stripos($input, $key) !== false) {
                return $value;
            }
        }

        return 'Maaf, pertanyaan Anda belum bisa kami jawab. Silakan hubungi pengurus masjid.';
    }
}
