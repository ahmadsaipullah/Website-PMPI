@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | Anggota | Create')
@section('anggota', 'active')
@section('content')


    <div class="container bg-dark">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-4">Create Anggota</h1>
                <hr>
                <form action="{{ route('anggota.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is invalid @enderror" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="nik"
                            id="nik"
                            class="form-control
                            @error('nik')
is invalid
@enderror"
                            value=" {{ old('nik') }}" required>
                        @error('nik')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No_hp</label>
                        <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="no_hp"
                            id="no_hp" class="form-control @error('no_hp')
is invalid
@enderror"
                            value=" {{ old('no_hp') }} "required minlength="11" maxlength="13">
                        @error('no_hp')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is invalid @enderror" value=" {{ old('email') }} "
                            required>
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary my-4">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
