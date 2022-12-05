<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = gallery::simplePaginate(3);
        return view('dashboard.gallery.index', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gallery.create');
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

            'tittle' => 'string|required',
            'image' => 'required|image',
            'deskripsi' => 'string|required',
            'tanggal' => 'string|required'
        ]);
        $foto = $request->all();
        $foto['image'] = $request->file('image')->store('asset/gallery', 'public');
        gallery::create($foto);
        Alert::success("{$foto['tittle']} <br>", 'Berhasil Di Tambah!');
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        return view('dashboard.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        return view('dashboard.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        $dataId = $gallery->find($gallery->id);
        $data = $request->all();
        if ($request->image) {
            Storage::delete('public/' . $dataId->image);
            $data['image'] = $request->file('image')->store('asset/gallery', 'public');
        }

        $dataId->update($data);
        Alert::success("{$request['tittle']} <br>", 'Berhasil Di Update!');
        return redirect()->route('gallery.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(gallery $gallery)
    {
        Storage::delete('public/' . $gallery->image);
        gallery::destroy($gallery->id);
        Alert::success("{$gallery['tittle']} <br>", 'Berhasil Di Hapus!');
        return redirect()->route('gallery.index');
    }
}
