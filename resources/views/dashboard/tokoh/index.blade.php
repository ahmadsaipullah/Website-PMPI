@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | Tokoh')
@section('tokoh', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Table Tokoh</h2>
                    <hr>
                    <a href="{{ route('tokoh.create') }}" class="btn">Create Tokoh</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tittle</th>
                                <th>Deskripsi</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tokohs as $key => $tokoh)
                                <tr>
                                    <td>{{ $tokohs->firstItem() + $key }}</td>
                                    <td><a class="btn text-white"
                                            href="{{ route('tokoh.show', $tokoh->id) }}">{{ $tokoh->nama }}</a>
                                    </td>
                                    <td>{{ $tokoh->tittle }}</td>
                                    <td>{{ $tokoh->deskripsi }}</td>
                                    <td>
                                        <img src="{{ Storage::url($tokoh->image) }}" alt="gambar" width="150px"
                                            class="tumbnail img-fluid">
                                    </td>
                                    <td>
                                        <a href="{{ route('tokoh.edit', $tokoh->id) }}" class="btn btn-success btn-sm">
                                            <i class='fas fa-pen'></i></a>
                                        <form action="{{ route('tokoh.destroy', $tokoh->id) }}" method="POST"
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
                        {{ $tokohs->firstItem() }}
                        of
                        {{ $tokohs->lastItem() }}
                    </div>
                    <div class="py-4">
                        {{ $tokohs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
