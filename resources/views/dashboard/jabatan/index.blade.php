@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | Jabatan')
@section('about', 'active')
@section('jabatan', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Table Jabatan</h2>
                    <hr>
                    <a href="{{ route('jabatan.create') }}" class="btn">Create Jabatan</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($jabatans as $key => $jabatan)
                                <tr>
                                    <td>{{ $jabatans->firstItem() + $key }}</td>
                                    <td><a class="btn text-white"
                                            href="{{ route('jabatan.show', $jabatan->id) }}">{{ $jabatan->nama_jabatan }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('jabatan.edit', $jabatan->id) }}"
                                            class="btn btn-success btn-sm">
                                            <i class='fas fa-pen'></i></a>
                                        <form action="{{ route('jabatan.destroy', $jabatan->id) }}" method="POST"
                                            class="pt-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete_confirm">
                                                <i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        showing
                        {{ $jabatans->firstItem() }}
                        of
                        {{ $jabatans->lastItem() }}
                    </div>
                    <div class="py-4">
                        {{ $jabatans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
