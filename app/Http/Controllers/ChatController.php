<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Http;
use OpenAI\Laravel\Facades\OpenAI;
use App\Models\Complaint; // Model untuk menyimpan keluhan
class ChatController extends Controller
{

    public function index()
    {
        $messages = Message::all();
        return view('chat.index', compact('messages'));
    }

    public function send(Request $request)
    {
        $userMessage = $request->input('message');

        // Simpan pesan user
        Message::create([
            'message' => $userMessage,
            'sender' => 'user'
        ]);

        // Cek apakah ini keluhan
        if (stripos($userMessage, 'keluhan') !== false) {
            Complaint::create([
                'content' => $userMessage,
            ]);

            $response = 'Terima kasih atas keluhan Anda, kami akan menindaklanjutinya.';
        } else {
            // Cek keyword lokal
            $keywords = [
                'Selamat Pagi' => 'Selamat pagi, Bapak/Ibu. Terima kasih telah menghubungi kami. Kami mohon maaf atas ketidaknyamanan yang Anda alami. Boleh kami tanyakan lebih lanjut 
                                   mengenai keluhan Anda agar kami bisa membantu menyelesaikannya dengan segera?
                                    Contoh pertanyan yang bisa diajukan menggunakan kata kunci keluhan :
                                    - "saya ingin keluhan toilet kotor',
                'Selamat siang ' => 'Selamat siang, Bapak/Ibu. Terima kasih telah menghubungi kami. Kami mohon maaf atas ketidaknyamanan yang Anda alami. Boleh kami tanyakan lebih lanjut 
                                   mengenai keluhan Anda agar kami bisa membantu menyelesaikannya dengan segera?
                                    Contoh pertanyan yang bisa diajukan menggunakan kata kunci keluhan :
                                    - "saya ingin keluhan toilet kotor',
                'Selamat sore' => 'Selamat sore, Bapak/Ibu. Terima kasih telah menghubungi kami. Kami mohon maaf atas ketidaknyamanan yang Anda alami. Boleh kami tanyakan lebih lanjut 
                                   mengenai keluhan Anda agar kami bisa membantu menyelesaikannya dengan segera?
                                    Contoh pertanyan yang bisa diajukan menggunakan kata kunci keluhan :
                                    - "saya ingin keluhan toilet kotor',
                'Selamat malam' => 'Selamat malam, Bapak/Ibu. Terima kasih telah menghubungi kami. Kami mohon maaf atas ketidaknyamanan yang Anda alami. Boleh kami tanyakan lebih lanjut 
                                   mengenai keluhan Anda agar kami bisa membantu menyelesaikannya dengan segera?
                                    Contoh pertanyan yang bisa diajukan menggunakan kata kunci keluhan :
                                    - "saya ingin keluhan toilet kotor',
            ];

            $response = null;
            foreach ($keywords as $keyword => $answer) {
                if (stripos($userMessage, $keyword) !== false) {
                    $response = $answer;
                    break;
                }
            }

            // Jika tidak ada keyword cocok, gunakan OpenAI
            if (!$response) {
                $openaiResponse = Http::withHeaders([
                    'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                ])->post('https://api.openai.com/v1/chat/completions', [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        ['role' => 'system', 'content' => 'Kamu adalah asisten virtual untuk pelayanan masjid.'],
                        ['role' => 'user', 'content' => $userMessage],
                    ],
                ]);

                $response = $openaiResponse['choices'][0]['message']['content'] ?? 'Maaf, saya tidak mengerti.';
            }
        }

        // Simpan jawaban bot
        Message::create([
            'message' => $response,
            'sender' => 'bot'
        ]);

        return redirect()->route('chat.index');
    }
}
