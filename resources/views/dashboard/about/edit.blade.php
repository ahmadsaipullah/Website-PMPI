@extends('dashboard.kerangka')
@section('tittle', 'PMPI | About | Update')
@section('about', 'active')
@section('content')

    <div class="container bg-dark">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-4">Edit About <br> {{ $about->nama }}</h1>
                <hr>
                <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is invalid @enderror"
                            value=" {{ old('nama') ?? $about->nama }} ">
                        @error('tittle')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_jabatan">Jabatan</label>
                        <select class="form-control" name="id_jabatan" id="id_jabatan">
                            <option value="{{ $about->id_jabatan }}">{{ $about->jabatan->nama_jabatan }}</option>
                            <option value disabled>---Pilih Kategori---</option>
                            @foreach ($jabatans as $jabatan)
                                <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <img src="{{ Storage::url($about->image) }}" alt="gambar" width="50px"
                            class="tumbnail img-fluid">
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary my-4">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection
