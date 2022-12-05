@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Change Password | Update')
@section('content')
    @include('sweetalert::alert')

    <div class="container bg-dark mb-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center py-2">Change Password</h1>
                <hr>
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="old_password">Old_password</label>
                        <input type="password" name="old_password" id="old_password"
                            class="form-control @error('old_password') is invalid @enderror">
                        @error('old_password')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is invalid @enderror">
                        @error('password')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control @error('password') is invalid @enderror">
                        @error('password_confirmation')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary my-4">Change Password</button>
                </form>
            </div>
        </div>
    </div>
@endsection
