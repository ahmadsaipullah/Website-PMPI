@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Anggota')
@section('anggota', 'active')
@section('content')

    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Detail Anggota <br> {{ $anggotum->nama }}</h2>
                    <hr>
                    <a href="{{ route('anggota.index') }}" class="btn">Kembali</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nik</th>
                                <th>No_Hp</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $anggotum->nama }}</td>
                                <td>{{ $anggotum->nik }}</td>
                                <td>{{ $anggotum->no_hp }}</td>
                                <td>{{ $anggotum->email }}</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
