<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = anggota::simplePaginate(3);
        return view('dashboard.anggota.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.anggota.create');
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

            'nama' => 'string|required|',
            'nik' => 'required|string|unique:anggotas',
            'no_hp' => 'required|string|max:13',
            'email' => 'required|email:dns|string|unique:anggotas'

        ]);

        anggota::create($validasi);
        Alert::success("{$validasi['nama']} <br>", 'Berhasil Di Tambah!');
        return redirect()->route('anggota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(anggota $anggotum)
    {
        return view('dashboard.anggota.show', compact('anggotum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(anggota $anggotum)
    {
        return view('dashboard.anggota.edit', compact('anggotum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anggota $anggotum)
    {
        $validasi = $request->validate([

            'nama' => 'string|required|',
            'nik' => 'required|string|unique:anggotas,nik,' . $anggotum->id,
            'no_hp' => 'required|string|max:13',
            'email' => 'required|email:dns|string|unique:anggotas,email,' . $anggotum->id,

        ]);

        $anggotum->update($validasi);
        Alert::success("{$validasi['nama']} <br>", 'Berhasil Di Update!');
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(anggota $anggotum)
    {
        $anggotum->delete();
        Alert::success("{$anggotum['nama']} <br>", 'Berhasil Di Hapus!');
        return redirect()->route('anggota.index');
    }
}
