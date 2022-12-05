@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Berita | Update')
@section('berita', 'active')
@section('content')

    <div class="container bg-dark mb-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-4">Edit Berita <br> {{ $berita->tittle }}</h1>
                <hr>
                <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="tittle">Tittle</label>
                        <input type="text" name="tittle" id="tittle"
                            class="form-control @error('tittle') is invalid @enderror"
                            value=" {{ old('tittle') ?? $berita->tittle }} ">
                        @error('tittle')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="rangkum">Rangkum</label>
                        <textarea name="rangkum" id="rangkum" rows="3" class="form-control @error('rangkum') is invalid @enderror">{{ old('rangkum') ?? $berita->rangkum }} </textarea>
                        @error('rangkum')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control @error('deskripsi') is invalid @enderror">{{ old('deskripsi') ?? $berita->deskripsi }} </textarea>
                        @error('deskripsi')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" name="tanggal" id="tanggal"
                            class="form-control @error('tanggal') is invalid @enderror"
                            value=" {{ old('tanggal') ?? $berita->tanggal }} ">
                        @error('tanggal')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_kategori">Kategori</label>
                        <select class="form-control" name="id_kategori" id="id_kategori">
                            <option value="{{ $berita->id_kategori }}">{{ $berita->kategori->nama_kategori }}</option>
                            <option value disabled>---Pilih Kategori---</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <img src="{{ Storage::url($berita->image) }}" alt="gambar" width="50px"
                            class="tumbnail img-fluid">
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary my-4">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection
