<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class jabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatans = jabatan::simplePaginate(3);
        return view('dashboard.jabatan.index', compact('jabatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jabatan.create');
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

            'nama_jabatan' => 'string|required'
        ]);

        jabatan::create($validasi);
        Alert::success("{$validasi['nama_jabatan']} <br>", 'Berhasil Di Tambah!');
        return redirect()->route('jabatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(jabatan $jabatan)
    {
        return view('dashboard.jabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(jabatan $jabatan)
    {
        return view('dashboard.jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jabatan $jabatan)
    {
        $validasi = $request->validate([

            'nama_jabatan' => 'string|required'
        ]);

        $jabatan->update($validasi);
        Alert::success("{$validasi['nama_jabatan']} <br>", 'Berhasil Di Update!');
        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(jabatan $jabatan)
    {
        $jabatan->delete();
        Alert::success("{$jabatan['nama_jabatan']} <br>", 'Berhasil Di Hapus!');
        return redirect()->route('jabatan.index');
    }
}
