@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Detail Jabatan')
@section('about', 'active')
@section('jabatan', 'active')
@section('content')

    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Detail Jabatan <br> {{ $jabatan->nama_jabatan }}</h2>
                    <hr>
                    <a href="{{ route('jabatan.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $jabatan->nama_jabatan }}</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
