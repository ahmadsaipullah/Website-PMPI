<?php

namespace App\Http\Controllers;

use App\Models\tokoh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class tokohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tokohs = tokoh::simplePaginate(3);
        return view('dashboard.tokoh.index', compact('tokohs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tokoh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'nama' => 'string|required',
            'tittle' => 'string|required',
            'deskripsi' => 'string|required',
            'image' => 'required|image'

        ]);

        $foto = $request->all();
        $foto['image'] = $request->file('image')->store('asset/tokoh', 'public');
        tokoh::create($foto);
        Alert::success("{$foto['nama']} <br>", 'Berhasil Di Tambah!');
        return redirect()->route('tokoh.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(tokoh $tokoh)
    {
        return view('dashboard.tokoh.show', compact('tokoh'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tokoh $tokoh)
    {
        return view('dashboard.tokoh.edit', compact('tokoh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tokoh $tokoh)
    {
        $dataId = $tokoh->find($tokoh->id);
        $data = $request->all();
        if ($request->image) {
            Storage::delete('public/' . $dataId->image);
            $data['image'] = $request->file('image')->store('asset/tokoh', 'public');
        }

        $dataId->update($data);
        Alert::success("{$request['nama']} <br>", 'Berhasil Di Update!');
        return redirect()->route('tokoh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tokoh $tokoh)
    {

        Storage::delete('public/' . $tokoh->image);
        tokoh::destroy($tokoh->id);
        Alert::success("{$tokoh['nama']} <br>", 'Berhasil Di Hapus!');
        return redirect()->route('tokoh.index');
    }
}
