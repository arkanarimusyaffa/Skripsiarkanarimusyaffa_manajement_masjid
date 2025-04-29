<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QurbanController extends Controller
{
    public function individu()
    {
        return view('qurban.individu');
    }

    public function patungan()
    {
        return view('qurban.patungan');
    }

    public function storeIndividu(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'animal_type' => 'required|string|in:kambing,domba,sapi',
            'atas_nama' => 'required|string|max:255',
            'payment_method' => 'required|string',
            'message' => 'nullable|string'
        ]);

        // Process qurban individu logic here
        // For example: save to database, process payment, etc.

        // Redirect with success message
        return redirect()->back()->with('success', 'Pendaftaran qurban individu berhasil diproses. Kami akan menghubungi Anda untuk informasi lebih lanjut.');
    }

    public function storePatungan(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'atas_nama' => 'required|string|max:255',
            'shares' => 'required|integer|min:1|max:7',
            'payment_method' => 'required|string',
            'message' => 'nullable|string'
        ]);

        // Process patungan sapi qurban logic here
        // For example: save to database, process payment, etc.

        // Redirect with success message
        return redirect()->back()->with('success', 'Pendaftaran patungan sapi qurban berhasil diproses. Kami akan menghubungi Anda untuk informasi lebih lanjut.');
    }
}
