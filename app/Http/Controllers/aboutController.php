<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = about::with('jabatan')->simplePaginate(3);
        return view('dashboard.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatans = jabatan::all();
        return view('dashboard.about.create', compact('jabatans'));
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
            'nama' => 'string|required',
            'image' => 'required|image',
            'id_jabatan' => ''
        ]);

        $foto = $request->all();
        $foto['image'] = $request->file('image')->store('asset/about', 'public');
        about::create($foto);
        Alert::success("{$foto['nama']} <br>", 'Berhasil Di Tambah!');
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(about $about)
    {
        return view('dashboard.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($about)
    {
        $about = about::with('jabatan')->findOrFail($about);
        $jabatans = jabatan::all();
        return view('dashboard.about.edit', compact('about', 'jabatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, about $about)
    {
        $dataId = $about->find($about->id);
        $data = $request->all();
        if ($request->image) {
            Storage::delete('public/' . $dataId->image);
            $data['image'] = $request->file('image')->store('asset/about', 'public');
        }

        $dataId->update($data);
        Alert::success("{$request['nama']} <br>", 'Berhasil Di Update!');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(about $about)
    {
        Storage::delete('public/' . $about->image);
        about::destroy($about->id);
        Alert::success("{$about['nama']} <br>", 'Berhasil Di Hapus!');
        return redirect()->route('about.index');
    }
}
