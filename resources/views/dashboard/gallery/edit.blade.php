@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Gallery | Update')
@section('gallery', 'active')
@section('content')

    <div class="container bg-dark mb-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-2">Edit Gallery <br> {{ $gallery->tittle }}</h1>
                <hr>
                <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="tittle">Tittle</label>
                        <input type="text" name="tittle" id="tittle"
                            class="form-control @error('tittle') is invalid @enderror"
                            value=" {{ old('tittle') ?? $gallery->tittle }} ">
                        @error('tittle')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control @error('deskripsi') is invalid @enderror">{{ old('deskripsi') ?? $gallery->deskripsi }} </textarea>
                        @error('deskripsi')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" name="tanggal" id="tanggal"
                            class="form-control @error('tanggal') is invalid @enderror"
                            value=" {{ old('tanggal') ?? $gallery->tanggal }} ">
                        @error('tanggal')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <img src="{{ Storage::url($gallery->image) }}" alt="gambar" width="50px"
                            class="tumbnail img-fluid">
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary my-4">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
