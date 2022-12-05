@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard | About')
@section('about', 'active')
@section('content')
    @include('sweetalert::alert')

    <div class="container mt-3 bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center py-4">Table About</h2>
                    <hr>
                    <a href="{{ route('about.create') }}" class="btn btn-primary">Create About</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center text-white">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($abouts as $key => $about)
                                <tr>
                                    <td>{{ $abouts->firstItem() + $key }}</td>
                                    <td><a class="btn text-white"
                                            href="{{ route('about.show', $about->id) }}">{{ $about->nama }}</a>
                                    </td>
                                    <td>{{ $about->jabatan->nama_jabatan }}</td>
                                    <td>
                                        <img src="{{ Storage::url($about->image) }}" alt="gambar" width="150px"
                                            class="tumbnail img-fluid">
                                    </td>
                                    <td>
                                        <a href="{{ route('about.edit', $about->id) }}" class="btn btn-success btn-sm">
                                            <i class='fas fa-pen'></i></a>
                                        <form action="{{ route('about.destroy', $about->id) }}" method="POST"
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
                        {{ $abouts->firstItem() }}
                        of
                        {{ $abouts->lastItem() }}
                    </div>
                    <div class="py-4">
                        {{ $abouts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
