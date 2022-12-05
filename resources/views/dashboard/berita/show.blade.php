@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Detail Berita')
@section('berita', 'active')
@section('content')

    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Detail Berita <br> {{ $berita->tittle }}</h2>
                    <hr>
                    <a href="{{ route('berita.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>Tittle</th>
                                <th>Rangkum</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $berita->tittle }}</td>
                                <td>{{ $berita->rangkum }}</td>
                                <td>{{ $berita->deskripsi }}</td>
                                <td>{{ $berita->tanggal }}</td>
                                <td>{{ $berita->kategori->nama_kategori }}</td>
                                <td>
                                    <img src="{{ Storage::url($berita->image) }}" alt="gambar" width="150px"
                                        class="tumbnail img-fluid">
                                </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
