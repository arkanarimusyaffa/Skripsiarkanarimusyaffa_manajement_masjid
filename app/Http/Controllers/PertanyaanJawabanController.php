<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanJawaban;

class PertanyaanJawabanController extends Controller
{
    public function create()
    {
        return view('admin.input-pertanyaan');
    }

    public function store(Request $request)
    {
        PertanyaanJawaban::create($request->only('pertanyaan', 'jawaban'));
        return redirect()->back()->with('success', 'Pertanyaan dan jawaban disimpan.');
    }
}
