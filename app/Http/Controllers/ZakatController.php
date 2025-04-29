<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZakatController extends Controller
{
    public function mal()
    {
        return view('zakat.mal');
    }

    public function fitrah()
    {
        return view('zakat.fitrah');
    }

    public function storeMal(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'amount' => 'required|numeric|min:10000',
            'payment_method' => 'required|string',
            'asset_type' => 'required|string',
            'message' => 'nullable|string'
        ]);

        // Process zakat mal logic here
        // For example: save to database, process payment, etc.

        // Redirect with success message
        return redirect()->back()->with('success', 'Zakat Mal berhasil diproses. Terima kasih telah menunaikan kewajiban zakat Anda!');
    }

    public function storeFitrah(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'person_count' => 'required|integer|min:1',
            'payment_type' => 'required|string|in:uang,beras',
            'amount' => 'required|numeric|min:1000',
            'payment_method' => 'required|string',
            'message' => 'nullable|string'
        ]);

        // Process zakat fitrah logic here
        // For example: save to database, process payment, etc.

        // Redirect with success message
        return redirect()->back()->with('success', 'Zakat Fitrah berhasil diproses. Terima kasih telah menunaikan kewajiban zakat Anda!');
    }
}
