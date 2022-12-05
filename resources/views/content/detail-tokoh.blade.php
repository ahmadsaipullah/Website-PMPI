@extends('kerangka.master')
@section('tittle', 'PMPI | Detail | Tokoh')
@section('tokoh', 'active')
@section('content')
    <section id="speakers-details">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>PMPI</h2>
                <p>Detail Tokoh</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ Storage::url($thokohs->image) }}" alt="gambar" class="img-fluid">
                </div>
                <div class="col-md-6 justify-content-center">
                    <div class="align-items-lg-center text-center text-dark"><br><br><br>
                        <h2><b>{{ $thokohs->nama }}</b></h2>
                        <h5 class="text-muted">{{ $thokohs->tittle }}</h5>
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
                        <h2>Detail Deskripsi </h2>
                        <p>{{ $thokohs->deskripsi }}
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
