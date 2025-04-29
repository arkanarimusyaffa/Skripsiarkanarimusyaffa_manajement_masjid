<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin()
    {
        if (Auth::user()->position !== 'admin') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.admin');
    }

    public function ketuaDKM()
    {
        if (Auth::user()->position !== 'Ketua DKM') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.ketua_dkm');
    }

    public function sekretaris()
    {
        if (Auth::user()->position !== 'SEKRETARIS') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.sekretaris');
    }

    public function bendahara()
    {
        if (Auth::user()->position !== 'BENDAHARA') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.bendahara');
    }

    public function imamMasjid()
    {
        if (Auth::user()->position !== 'Imam Masjid') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.imam_masjid');
    }

    public function jamaah()
    {
        if (Auth::user()->position !== 'Jamaah') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.jamaah');
    }

    public function bidangRKBC()
    {
        if (Auth::user()->position !== 'Bidang-BidangRKBC') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.bidang_rkbc');
    }

    public function bidangSosial()
    {
        if (Auth::user()->position !== 'Bidang Sosial') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.bidang_sosial');
    }

    public function bidangDakwah()
    {
        if (Auth::user()->position !== 'Bidang Dakwah') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.bidang_dakwah');
    }

    public function bidangRemaja()
    {
        if (Auth::user()->position !== 'Bidang Pembinaan Remaja') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.bidang_remaja');
    }

    public function bidangSarana()
    {
        if (Auth::user()->position !== 'Bidang Sarana prasana') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.bidang_sarana');
    }

    public function bidangPendidikan()
    {
        if (Auth::user()->position !== 'Bidang Pendidikan') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.bidang_pendidikan');
    }

    public function bidangPHBI()
    {
        if (Auth::user()->position !== 'Bidang PHBI') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.bidang_phbi');
    }

    public function bidangPerlengkapan()
    {
        if (Auth::user()->position !== 'Bidang Perlengkapan') {
            return redirect()->route('dashboard.' . strtolower(Auth::user()->position));
        }
        return view('dashboard.bidang_perlengkapan');
    }
}
