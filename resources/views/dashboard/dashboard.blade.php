@extends('dashboard.kerangka')
@section('tittle', 'PMPI | Dashboard')
@section('dashboard', 'active')
@section('content')
    @include('sweetalert::alert')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn shadow-sm text-white"><i
                class="fas fa-download fa-sm text-white"></i> Generate Report</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Anggota (PMPI)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $anggota }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-address-card fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                About (PMPI)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $about }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Berita (PMPI)
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $berita }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Tokoh (PMPI)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tokoh }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- banner --}}
    <div class="text-center py-3">
        <img src="{{ asset('assets/images/pmpi4.png') }}" rel="icon" alt="gambar" width="250px"
            class="thumbnail img-fluid">
    </div>
    {{-- end banner --}}

@endsection
