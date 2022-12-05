@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | Berita')
@section('berita', 'active')
@section('content')
    @include('sweetalert::alert')

    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center py-4">Table Berita</h2>
                    <hr>
                    <a href="{{ route('berita.create') }}" class="btn btn-primary">Create Berita</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tittle</th>
                                <th>Rangkum</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($beritas as $key => $berita)
                                <tr>
                                    <td>{{ $beritas->firstItem() + $key }}</td>
                                    <td><a class="btn text-white"
                                            href="{{ route('berita.show', $berita->id) }}">{{ $berita->tittle }}</a>
                                    </td>
                                    <td>{{ $berita->rangkum }}</td>
                                    <td>{{ $berita->deskripsi }}</td>
                                    <td>{{ $berita->tanggal }}</td>
                                    <td>{{ $berita->kategori->nama_kategori }}</td>
                                    <td>
                                        <img src="{{ Storage::url($berita->image) }}" alt="gambar" width="150px"
                                            class="tumbnail img-fluid">
                                    </td>
                                    <td>
                                        <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-success btn-sm">
                                            <i class='fas fa-pen'></i></a>
                                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST"
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
                                    <td colspan="8" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        showing
                        {{ $beritas->firstItem() }}
                        of
                        {{ $beritas->lastItem() }}
                    </div>
                    <div class="py-4">
                        {{ $beritas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
