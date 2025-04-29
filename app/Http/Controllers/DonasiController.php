<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function pembangunan()
    {
        return view('donasi.pembangunan');
    }

    public function harian()
    {
        return view('donasi.harian');
    }

    public function operasional()
    {
        return view('donasi.operasional');
    }

    public function storePembangunan(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'amount' => 'required|numeric|min:1000',
            'payment_method' => 'required|string',
            'message' => 'nullable|string'
        ]);

        // Process donation logic here
        // For example: save to database, process payment, etc.

        // Redirect with success message
        return redirect()->back()->with('success', 'Donasi pembangunan berhasil diproses. Terima kasih atas kontribusi Anda!');
    }

    public function storeHarian(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'amount' => 'required|numeric|min:1000',
            'payment_method' => 'required|string',
            'message' => 'nullable|string'
        ]);

        // Process donation logic here
        // For example: save to database, process payment, etc.

        // Redirect with success message
        return redirect()->back()->with('success', 'Donasi harian berhasil diproses. Terima kasih atas kontribusi Anda!');
    }

    public function storeOperasional(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'amount' => 'required|numeric|min:1000',
            'payment_method' => 'required|string',
            'message' => 'nullable|string'
        ]);

        // Process donation logic here
        // For example: save to database, process payment, etc.

        // Redirect with success message
        return redirect()->back()->with('success', 'Donasi operasional berhasil diproses. Terima kasih atas kontribusi Anda!');
    }
}
