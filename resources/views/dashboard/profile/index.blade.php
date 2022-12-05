@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | About')
@section('about', 'active')
@section('content')
    @include('sweetalert::alert')

    <div class="container-sm mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center py-4">Profile</h2>
                    <hr>
                </div>
                <div class="table-responsive pb-4">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ auth()->user()->name }}</td>
                                <td>{{ auth()->user()->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="justify-content-end my-4"></div>
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary"> Edit</a>
                </div>
            </div>
        </div>
    </div>

@endsection
