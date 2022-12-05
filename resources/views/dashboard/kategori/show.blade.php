@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Detail Kategori')
@section('kategori', 'active')
@section('berita', 'active')
@section('content')

    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Detail Kategori <br> {{ $kategori->nama_kategroi }}</h2>
                    <hr>
                    <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $kategori->nama_kategori }}</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
