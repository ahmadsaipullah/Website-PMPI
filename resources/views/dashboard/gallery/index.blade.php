@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | Gallery')
@section('gallery', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Table Gallery</h2>
                    <hr>
                    <a href="{{ route('gallery.create') }}" class="btn">Create Gallery</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tittle</th>
                                <th>Deskripsi</th>
                                <th>tanggal</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($gallerys as $key => $gallery)
                                <tr>
                                    <td>{{ $gallerys->firstItem() + $key }}</td>
                                    <td><a class="btn text-white"
                                            href="{{ route('gallery.show', $gallery->id) }}">{{ $gallery->tittle }}</a>
                                    </td>
                                    <td>{{ $gallery->deskripsi }}</td>
                                    <td>{{ $gallery->tanggal }}</td>
                                    <td>
                                        <img src="{{ Storage::url($gallery->image) }}" alt="gambar" width="150px"
                                            class="tumbnail img-fluid">
                                    </td>
                                    <td>
                                        <a href="{{ route('gallery.edit', $gallery->id) }}"
                                            class="btn btn-success btn-sm">
                                            <i class='fas fa-pen'></i></a>
                                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST"
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
                        {{ $gallerys->firstItem() }}
                        of
                        {{ $gallerys->lastItem() }}
                    </div>
                    <div class="py-4">
                        {{ $gallerys->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
