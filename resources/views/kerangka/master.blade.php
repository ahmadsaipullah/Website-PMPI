<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('tittle')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.style')
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <img src="{{ asset('assets/images/pmpi4.png') }}" alt="gambar" height="h75" width="75">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-menu navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                        <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                            <div class="navbar-collapse-logo">
                                <img src="{{ asset('images/Group2.svg') }}" alt="">
                            </div>
                            <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('home')" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('about')" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('gallery')" href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('berita')" href="{{ route('berita') }}">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('tokoh')" href="{{ route('tokoh') }}">Tokoh</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <section class="contact-details" id="contact-details-section">
        <div class="col-12 col-md-12 col-lg-12 grid-margin text-center">
            <img src="{{ asset('assets/images/pmpi4.png') }}" height="95" width="75" alt=""
                class="pb-2">
            <a href="mailto:pmpinasional@gmail.com">
                <p class="text-muted">pmpinasional@gmail.com</p>
            </a>
            {{-- <p class="text-muted">Yazid Daulay +62888-1488-721</p> --}}
            <a href="#"><span class="mdi mdi-facebook"></span></a>
            <a href="#"><span class="mdi mdi-twitter"></span></a>
            <a href="https://www.instagram.com/dpp.pmpi/?utm_medium=copy_link"><span
                    class="mdi mdi-instagram"></span></a>
            <a href="#"><span class="mdi mdi-youtube-play"></span></a>
        </div>
    </section>
    </div>
    </div>
    <footer class="border-top">
        <p class="text-center text-muted pt-4 pb-4 mb-0">Copyright © 2022 <span class="px-1 text-danger">PMPI</span>.
        </p>
    </footer>
    @include('layout.script')
</body>

</html>
