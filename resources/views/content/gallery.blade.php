@extends('kerangka.master')
@section('tittle', 'PMPI | Gallery')
@section('gallery', 'active')
@section('content')
    <div class="container">
        <section id="speakers">
            <div class="section-title" data-aos="fade-up">
                <h2>PMPI</h2>
                <p>Gallery</p>
            </div>
            <div class="col-12 text-center pb-2">
                <p>Beberapa Agenda kami dalam acara PMPI</p>
            </div>
            <div class="row">
                @foreach ($gallerys as $gallery)
                    <div class="col-lg-4 col-md-4">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ route('detail.gallery', $gallery->id) }}"><img
                                    src="{{ Storage::url($gallery->image) }}" alt="Speaker 1" class="img-fluid"></a>
                            <div class="details my-4 text-center">
                                <h3><a href="{{ route('detail.gallery', $gallery->id) }}"
                                        class="text-dark">{{ $gallery->tittle }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <br><br><br>


    @endsection
