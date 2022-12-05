@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Detail About')
@section('about', 'active')
@section('content')

    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Detail About <br> {{ $about->nama }}</h2>
                    <hr>
                    <a href="{{ route('about.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $about->nama }}</td>
                                <td>{{ $about->jabatan->nama_jabatan }}</td>
                                <td>
                                    <img src="{{ Storage::url($about->image) }}" alt="gambar" width="150px"
                                        class="tumbnail img-fluid">
                                </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
