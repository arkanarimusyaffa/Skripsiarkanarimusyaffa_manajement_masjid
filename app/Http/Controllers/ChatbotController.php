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
    public function processMessage(Request $request)
    {
        $message = $request->input('message');

        // Initialize the response
        $response = [
            'text' => 'Terima kasih atas pesan Anda. Saya akan segera menanggapi.',
            'options' => []
        ];

        // Process the user message and respond accordingly
        // Process the user message and respond accordingly
        if (str_contains(strtolower($message), 'donasi pembangunan')) {
            $response['text'] = 'Untuk informasi mengenai Donasi Pembangunan, silakan kunjungi: ' . url('/donasi/pembangunan');
        } elseif (str_contains(strtolower($message), 'donasi harian')) {
            $response['text'] = 'Donasi Harian dapat dilakukan di: ' . url('/donasi/harian') . ' atau transfer ke rekening berikut: 123456789.';
        } elseif (str_contains(strtolower($message), 'donasi operasional')) {
            $response['text'] = 'Untuk Donasi Operasional, silakan kunjungi: ' . url('/donasi/operasional') . ' atau hubungi admin.';
        } elseif (str_contains(strtolower($message), 'zakat mal')) {
            $response['text'] = 'Zakat Mal dapat dibayar di masjid pada hari Jumat. Info lengkap di: ' . url('/zakat/mal');
        } elseif (str_contains(strtolower($message), 'zakat fitrah')) {
            $response['text'] = 'Zakat Fitrah diterima hingga akhir Ramadan. Info selengkapnya: ' . url('/zakat/fitrah');
        } elseif (str_contains(strtolower($message), 'antrian qurban')) {
            $response['text'] = 'Antrian Qurban sudah dibuka. Daftar di: ' . url('/qurban/antrian');
        } elseif (str_contains(strtolower($message), 'kegiatan masjid')) {
            $response['text'] = 'Kami memiliki berbagai kegiatan di masjid. Jadwal kegiatan tersedia di: ' . url('/kegiatan/masjid');
        } else {
            $response['text'] = 'Maaf, saya tidak mengerti. Bisa jelaskan lebih lanjut?';
        }


        return response()->json($response);
    }
}
