@extends('kerangka.master')
@section('tittle', 'PMPI | Detail | Gallery')
@section('gallery', 'active')
@section('content')
    <section id="speakers-details">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>PMPI</h2>
                <p>Detail Gallery</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ Storage::url($gallery->image) }}" alt="gambar" class="img-fluid mx-auto d-block">
                </div>
                <div class="col-md-12 justify-content-center">
                    <div class="align-items-lg-center"><br><br><br>
                        <h1 class="text-dark text-center"><b>{{ $gallery->tittle }}</b></h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="speakers-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 justify-content-center">
                    <div class="align-items-lg-center"><br><br><br>
                        <h2 class="text-dark"><b>Detail Deskripsi</b> </h2>
                        <h6><b>{{ $gallery->tanggal }}</b></h6>
                        <p>{{ $gallery->deskripsi }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <p class="text-muted text-right mdi mdi-account-circle"> Author Admin</p>
    </div>
@endsection
