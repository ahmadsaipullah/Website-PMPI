@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | About | Create')
@section('about', 'active')
@section('content')


    <div class="container bg-dark">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-4">Create About</h1>
                <hr>
                <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is invalid @enderror" value=" {{ old('nama') }} " required>
                        @error('nama')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_jabatan">Id Kategori</label>
                        <select class="form-control" name="id_jabatan" id="id_jabatan">
                            <option>---Pilih Kategori---</option>
                            @foreach ($jabatans as $jabatan)
                                <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary my-4">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
