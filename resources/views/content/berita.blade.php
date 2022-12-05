@extends('kerangka.master')
@section('tittle', 'PMPI | Berita')
@section('berita', 'active')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="digital-marketing-service" id="digital-marketing-section">
                <div class="section-title" data-aos="fade-up">
                    <h2>PMPI</h2>
                    <p>Berita</p>
                </div>
                @foreach ($beritas as $index => $berita)
                    @if ($index % 2 == 0)
                        <div class="row grid-margin">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-12 col-lg-5 text-center flex-item grid-margin" data-aos="fade-right">
                                    <img src="{{ Storage::url($berita->image) }}" alt="gambar" height="400"
                                        width="400" class="img-fluid">
                                </div>
                                <div class="col-5 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                                    <h2 class="m-0 text-dark"><b>{{ $berita->tittle }}</b></h2>
                                    <div class="col-lg-9 col-xl-8 p-0">
                                        <p class="py-4 m-0 text-muted">{{ $berita->rangkum }} </p>
                                        <p class="pb-2 font-weight-medium text-muted"><b>{{ $berita->tanggal }}</b></p>
                                    </div>

                                    <a href="{{ route('detail.berita', $berita->id) }} "
                                        class="btn btn-primary">Readmore</a>
                                </div>
                            </div>
                            <br><br>
                        @else
                            <div class="row align-items-center justify-content-center">
                                <div class="col-5 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                                    <h2 class="m-0 text-dark"><b>{{ $berita->tittle }}</b></h2>
                                    <div class="col-lg-12 col-xl-8 p-0">
                                        <p class="py-4 m-0 text-muted">{{ $berita->rangkum }}</p>
                                        <p class="font-weight-medium text-muted"> <b>{{ $berita->tanggal }}</p>
                                        </b>
                                    </div>

                                    <a href="{{ route('detail.berita', $berita->id) }}" class="btn btn-primary">Readmore</a>
                                </div>
                                <div class="col-12 col-lg-5 text-center flex-item grid-margin" data-aos="fade-right">
                                    <img src="{{ Storage::url($berita->image) }}" alt="gambar" height="400"
                                        width="400" class="img-fluid">
                                </div>
                            </div>
                    @endif
                @endforeach
            </section>
        @endsection
