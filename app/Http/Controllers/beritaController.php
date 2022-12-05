<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = berita::with('kategori')->simplePaginate(3);
        return view('dashboard.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = kategori::all();
        return view('dashboard.berita.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'tittle' => 'string|required',
            'rangkum' => 'string|required',
            'deskripsi' => 'string|required',
            'tanggal' => 'string|required',
            'image' => 'image|required',
            'id_kategori' => ''
        ]);

        $foto = $request->all();
        $foto['image'] = $request->file('image')->store('asset/berita', 'public');
        berita::create($foto);
        Alert::success("{$foto['tittle']} <br>", 'Berhasil Di Tambah!');
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(berita $beritum)
    {
        return view('dashboard.berita.show', compact('beritum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($beritum)
    {
        $berita = berita::with('kategori')->findOrFail($beritum);
        $kategoris = kategori::all();
        return view('dashboard.berita.edit', compact('berita', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berita $beritum)
    {
        $dataId = $beritum->find($beritum->id);
        $data = $request->all();
        if ($request->image) {
            Storage::delete('public/' . $dataId->image);
            $data['image'] = $request->file('image')->store('asset/berita', 'public');
        }

        $dataId->update($data);
        Alert::success("{$request['tittle']} <br>", 'Berhasil Di Update!');
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(berita $beritum)
    {

        Storage::delete('public/' . $beritum->image);
        berita::destroy($beritum->id);
        Alert::success("{$beritum['tittle']} <br>", 'Berhasil Di Hapus!');
        return redirect()->route('berita.index');
    }
}
