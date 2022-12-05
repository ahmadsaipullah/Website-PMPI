@extends('kerangka.master')
@section('tittle', 'PMPI | Detail | Berita')
@section('berita', 'active')
@section('content')

    <section id="speakers-details">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>PMPI</h2>
                <p>Detail Berita</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src="{{ Storage::url($beritum->image) }}" alt="gambar" class="img-fluid">
                </div>

                <div class="col-md-6 justify-content-center">
                    <div class="align-items-lg-center"><br><br><br>
                        <h2 class="text-dark"><b>{{ $beritum->tittle }}</b></h2>
                        <p>{{ $beritum->rangkum }}</p>
                        <h6><b>{{ $beritum->tanggal }}</b></h6>
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
                        <h2 class="text-dark"><b> Detail Deskripsi </b></h2>
                        <p>{{ $beritum->deskripsi }}
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
