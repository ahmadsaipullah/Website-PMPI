@extends('kerangka.master')
@section('tittle', 'PMPI | Home')
@section('home', 'active')
@section('content')
    <div class="banner img-fluid">
        <div class="container pt-4">
            <img src="assets/images/pmpi4.png" alt="" class="img-fluid pb-4" height="365" width="365">
        </div>
    </div>
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
                                        <p class="font-weight-medium text-muted"> <b>{{ $berita->tanggal }} </b></p>

                                    </div>
                                    <a href="{{ route('detail.berita', $berita->id) }} "
                                        class="btn btn-primary">Readmore</a>
                                </div>
                                <div class="col-12 col-lg-5 text-center flex-item grid-margin" data-aos="fade-right">
                                    <img src="{{ Storage::url($berita->image) }}" alt="gambar" height="400"
                                        width="400" class="img-fluid">
                                </div>
                            </div>
                    @endif
                @endforeach
            </section>

            <section class="case-studies" id="case-studies-section">
                <div class="section-title" data-aos="fade-up">
                    <h2>PMPI</h2>
                    <p>Gallery</p>
                </div>
                <div class="row grid-margin">
                    @foreach ($gallerys as $gallery)
                        <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
                            <div class="card color-cards">
                                <div class="card-body p-0">
                                    <div class="bg-primary text-center card-contents">
                                        <div class="card-image">
                                            <img src="{{ Storage::url($gallery->image) }}" class="case-studies-card-img"
                                                alt="gambar">
                                        </div>
                                        <div class="card-desc-box d-flex align-items-center justify-content-around">
                                            <div>
                                                <h6 class="text-white pb-2 px-3">{{ $gallery->tittle }}</h6>
                                                <a href="{{ route('detail.gallery', $gallery->id) }}"><button
                                                        class="btn btn-white">Read
                                                        More</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <section class="customer-feedback" id="feedback-section">
                <div class="section-title" data-aos="fade-up">
                    <h2>PMPI</h2>
                    <p>Tokoh</p>
                </div>
                <div class="row">

                    <div class="owl-carousel owl-theme grid-margin">
                        @foreach ($tokohs as $tokoh)
                            <div class="card customer-cards">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ Storage::url($tokoh->image) }}" width="89" height="89"
                                            alt="gambar" class="img-customer">
                                        {{-- <p class="m-0 py-3 text-muted">{{ $tokoh->deskripsi }}</p> --}}
                                        <div class="content-divider m-auto"></div>
                                        <h6 class="card-title pt-3">{{ $tokoh->nama }}</h6>
                                        <h6 class="customer-designation text-muted m-0">{{ $tokoh->tittle }}</h6>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </section>

        @endsection
