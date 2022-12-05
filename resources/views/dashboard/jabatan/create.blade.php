@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | Jabatan | Create')
@section('about', 'active')
@section('jabatan', 'active')
@section('content')


    <div class="container bg-dark">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-4">Create Jabatan</h1>
                <hr>
                <form action="{{ route('jabatan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_jabatan">Jabatan</label>
                        <input type="text" name="nama_jabatan" id="nama_jabatan"
                            class="form-control @error('nama_jabatan') is invalid @enderror"
                            value=" {{ old('nama_jabatan') }}" required>
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
