@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Change Profile | Update')
@section('content')

    <div class="container bg-dark mb-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-2">Change Profile</h1>
                <hr>
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is invalid @enderror"
                            value="{{ old('name') ?? auth()->user()->name }}">
                        @error('name')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary my-4">Change Profile</button>
                </form>
            </div>
        </div>
    </div>
@endsection
