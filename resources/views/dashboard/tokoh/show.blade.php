@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Tokoh')
@section('tokoh', 'active')
@section('content')

    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Detail Tokoh <br> {{ $tokoh->nama }}</h2>
                    <hr>
                    <a href="{{ route('tokoh.index') }}" class="btn">Kembali</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tittle</th>
                                <th>Deskripsi</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $tokoh->nama }}</td>
                                <td>{{ $tokoh->tittle }}</td>
                                <td>{{ $tokoh->deskripsi }}</td>
                                <td>
                                    <img src="{{ Storage::url($tokoh->image) }}" alt="gambar" width="150px"
                                        class="tumbnail img-fluid">
                                </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
