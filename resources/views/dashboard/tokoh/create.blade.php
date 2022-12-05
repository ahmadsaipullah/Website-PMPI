@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | Tokoh | Create')
@section('tokoh', 'active')
@section('content')

    <div class="container bg-dark mb-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-4">Create Tokoh</h1>
                <hr>
                <form action="{{ route('tokoh.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is invalid @enderror" value=" {{ old('nama') }}" required>
                        @error('nama')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Tittle</label>
                        <input type="text" name="tittle" id="tittle"
                            class="form-control @error('tittle') is invalid @enderror" value=" {{ old('tittle') }}"
                            required>
                        @error('tittle')
                            <div class="alert alert-danger"> {{ $message }}</div>
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
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
