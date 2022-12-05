@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Jabatan | Update')
@section('about', 'active')
@section('jabatan', 'active')
@section('content')


    <div class="container bg-dark">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-4">Create Jabatan</h1>
                <hr>
                <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="nama_jabatan">Jabatan</label>
                        <input type="text" name="nama_jabatan" id="nama_jabatan"
                            class="form-control @error('nama_kategori') is invalid @enderror"
                            value=" {{ old('nama_jabatan') ?? $jabatan->nama_jabatan }}" required>
                        @error('nama_jabatan')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary my-4">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
