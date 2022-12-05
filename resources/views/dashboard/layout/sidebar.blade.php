    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion pt-4" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center active mb-4"
            href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/images/pmpi4.png') }}" rel="icon" alt="gambar" class="thumbnail img-fluid"
                width="80px">
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @yield('dashboard')">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Kategori -->
        <li class="nav-item @yield('berita')">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-list-ul"></i>
                <span>Berita</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @yield('kategori')" href="{{ route('kategori.index') }}">Kategori</a>
                    <a class="collapse-item @yield('berita')" href="{{ route('berita.index') }}">Berita</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Anggota -->
        <li class="nav-item @yield('about')">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-list-ul"></i>
                <span>About</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @yield('jabatan')" href="{{ route('jabatan.index') }}">Jabatan</a>
                    <a class="collapse-item @yield('about')" href="{{ route('about.index') }}">About</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Anggota -->
        <li class="nav-item @yield('anggota')">
            <a class="nav-link" href="{{ route('anggota.index') }}">
                <i class="fas fa-fw fa-address-card"></i>
                <span>Anggota</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Jadwal Sharing -->
        <li class="nav-item @yield('gallery')">
            <a class="nav-link" href="{{ route('gallery.index') }}">
                <i class="fas fa-fw fa-clipboard"></i>
                <span>Gallery</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item @yield('tokoh')">
            <a class="nav-link" href="{{ route('tokoh.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Tokoh</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
