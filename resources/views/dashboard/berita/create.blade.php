@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | Berita | Create')
@section('berita', 'active')
@section('content')


    <div class="container bg-dark mb-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-4">Create Berita</h1>
                <hr>
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="tittle">Tittle</label>
                        <input type="text" name="tittle" id="tittle"
                            class="form-control @error('tittle') is invalid @enderror" value=" {{ old('tittle') }} "
                            required>
                        @error('tittle')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="rangkum">Rangkum</label>
                        <textarea name="rangkum" id="rangkum" rows="3" class="form-control @error('rangkum') is invalid @enderror"
                            {{ old('rangkum') }} required></textarea>
                        @error('rangkum')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control @error('deskripsi') is invalid @enderror"
                            {{ old('deskripsi') }} required></textarea>
                        @error('deskripsi')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" name="tanggal" id="tanggal"
                            class="form-control @error('tanggal') is invalid @enderror" value=" {{ old('tanggal') }} "
                            required>
                        @error('tanggal')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_kategori">Kategori</label>
                        <select class="form-control" name="id_kategori" id="id_kategori">
                            <option>---Pilih Kategori---</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
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
