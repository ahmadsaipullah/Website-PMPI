@extends('kerangka.master')
@section('tittle', 'PMPI | Tokoh')
@section('tokoh', 'active')
@section('content')
    <div class="container">
        <section id="speakers">
            <div class="section-title" data-aos="fade-up">
                <h2>PMPI</h2>
                <p>Tokoh</p>
            </div>
            <div class="col-12 text-center pb-2">
                <p>Beberapa Tokoh PMPI</p>
            </div>
            <div class="row">
                @foreach ($tokohs as $tokoh)
                    <div class="col-lg-4 col-md-4">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ route('detail.tokoh', $tokoh->id) }}">
                                <img src="{{ Storage::url($tokoh->image) }}" alt="gambar" class="img-fluid"></a>
                            <h3 class="text-center my-4">
                                <a href="{{ route('detail.tokoh', $tokoh->id) }}"
                                    class="text-dark">{{ $tokoh->nama }}</a>
                            </h3>

                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <br><br><br>

    @endsection
