<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\tokoh;
use App\Models\berita;
use App\Models\gallery;
use App\Models\jabatan;
use Illuminate\Http\Request;

class contentController extends Controller
{
    public function home()
    {
        $beritas = berita::simplePaginate(2);
        $tokohs = tokoh::all();
        $gallerys = gallery::simplePaginate(4);
        return view('content.home', compact('beritas', 'tokohs', 'gallerys'));
    }

    public function about()
    {
        $about = about::with('jabatan')->simplePaginate();
        return view('content.about', compact('about'));
    }

    public function gallery()
    {
        $gallerys = gallery::all();
        return view('content.gallery', compact('gallerys'));
    }

    public function berita()
    {
        $beritas = berita::all();
        return view('content.berita', compact('beritas'));
    }

    public function tokoh()
    {
        $tokohs = tokoh::all();
        return view('content.tokoh', compact('tokohs'));
    }



    public function detailBerita(berita $beritum)
    {
        return view('content.detail-berita', compact('beritum'));
    }


    public function detailGallery(gallery $gallery)
    {
        return view('content.detail-gallery', compact('gallery'));
    }

    public function detailTokoh(tokoh $thokohs)
    {
        return view('content.detail-tokoh', compact('thokohs'));
    }
}
