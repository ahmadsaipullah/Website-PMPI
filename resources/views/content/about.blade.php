@extends('kerangka.master')
@section('tittle', 'PMPI | About')
@section('about', 'active')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section id="about" class="about">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                            <img src="{{ asset('assets/images/habib.png') }}" class="img-fluid" alt="gambar"
                                data-aos="zoom-in">
                        </div>

                        <div class="col-lg-6 pt-5 pt-lg-0">
                            <h3 data-aos="fade-up">PERSATUAN MAHASISWA PENCINTA TANAH AIR INDONESIA</h3>
                            <p data-aos="fade-up" data-aos-delay="100">
                                Radikalisme sudah masuk kampus & hal ini harus segera ditangani. untuk itu, di gagaslah
                                perkumpulan PETANESIA untuk mahasiswa pada Rakor DPP PETANESIA yang diselenggarakan di joglo
                                wijaya Tangerang Sabtu Minggu, 20-21 November 2021. kemudia di bahas lanjut pada tanggal 20
                                Februari 2022 di kediaman bapak eko kalungguh [ketum PETANESIA] bersama dengan saudari
                                Khusniyati [Mahasiswa UNY] untuk segera membentuk PMPI terdiri dari perwakilan agama dan
                                etis yang berbeda-beda. Tugas karakter ini adalah untuk menyusun PM PMPI agar deklarasi
                                komisariat di perguruan tinggi cepat terlaksana.
                            </p>
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Tanggal Berdiri PMPI</h4>
                                    <p></p>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Pendiri PMPI</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="team" class="team">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>PMPI</h2>
                        <p>Struktural Periode 2022 - 2025</p>
                    </div>
                    <div class="row justify-content-center">
                        @foreach ($about as $index => $about1)
                            @if ($index <= 1)
                                {{-- <div class="col-xl-2 col-lg-1 col-md-0" data-aos="zoom-in" data-aos-delay="200"></div> --}}
                                <div class="col-md-5" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="member">
                                        <img src="{{ Storage::url($about1->image) }}" class="img-fluid" alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4>{{ $about1->nama }}</h4>
                                                <span>{{ $about1->jabatan->nama_jabatan }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-xl-3 col-lg-3 col-md-3" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="member">
                                        <img src="{{ Storage::url($about1->image) }}" class="img-fluid" alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4>{{ $about1->nama }}</h4>
                                                <span>{{ $about1->jabatan->nama_jabatan }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <section id="bg" class="faq section-bg">
                    <div class="container">
                        <div class="section-title" data-aos="fade-up">
                            <h2>PMPI</h2>
                            <p>Visi & Misi</p>
                        </div>
                        <ul class="faq-list">
                            <li data-aos="fade-up" data-aos-delay="100">
                                <a data-toggle="collapse" href="#faq1">Visi
                                    <i class="icofont-simple-up"></i></a>
                                <div id="faq1" class="collapse show">
                                    <p>
                                        Terwujudnya insan yang berjiwa patriot, cinta tanah air, berkarakter dan toleran
                                        dalam kebhinnekaan untuk mempertahankan keutuhan Negara Kesatuan Republik Indonesia
                                        berdasarkan Pancasila dan Undang-Undang Dasar 1945
                                    </p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="200">
                                <a data-toggle="collapse" href="#faq2">Misi
                                    <i class="icofont-simple-up"></i></a>
                                <div id="faq2" class="collapse hide">
                                    <p> 1. Meningkatkan semangat Cinta Tanah Air, nasionalisme dan bela negara bekerja sama
                                        dengan TNI dan POLRI.</p>
                                    <p> 2. Memberikan keteladanan dalam bermasyarakat untuk menumbuhkan toleransi dalam
                                        kebhinnekaan</p>
                                    <p> 3. Membekali warga negara dengan pendidikan dan pelatihan dengan ilmu pengetahuan
                                        dan teknologi untuk meningkatkan kesejahteraan masyarakat </p>
                                    <p> 4. Berperan dalam pembangunan nasional melalui kegiatan sosial, ekonomi, budaya dan
                                        keagamaan untuk mewujudkan cita-cita pendiri bangsa.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            @endsection
