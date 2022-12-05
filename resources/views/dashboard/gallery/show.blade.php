@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Gallery')
@section('gallery', 'active')
@section('content')

    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Detail Gallery <br> {{ $gallery->tittle }}</h2>
                    <hr>
                    <a href="{{ route('gallery.index') }}" class="btn">Kembali</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>Tittle</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $gallery->tittle }}</td>
                                <td>{{ $gallery->deskripsi }}</td>
                                <td>{{ $gallery->tanggal }}</td>
                                <td>
                                    <img src="{{ Storage::url($gallery->image) }}" alt="gambar" width="150px"
                                        class="tumbnail img-fluid">
                                </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
