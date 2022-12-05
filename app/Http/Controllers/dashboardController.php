<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\tokoh;
use App\Models\berita;
use App\Models\anggota;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        $anggota = anggota::count();
        $tokoh = tokoh::count();
        $about = about::count();
        $berita = berita::count();
        return view('dashboard.dashboard', compact('anggota', 'tokoh', 'about', 'berita'));
    }
}
