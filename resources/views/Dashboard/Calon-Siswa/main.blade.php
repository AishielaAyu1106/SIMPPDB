@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    {{-- <div class="card-body p-2">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
        </div>
    </div> --}}

    <div class="container-fluid mt-4">
        {{-- {{ Breadcrumbs::render('dashboard') }} --}}
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pendaftaran Peserta Didik Baru SMAN 1 Bengalon</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-5">
            <h6 class="d-sm-mb-0 text-gray-500">Selamat Datang {{auth()->user()->name}} di Halaman, Dashboard</h6>
        </div>

    </div>


    {{-- <div class="card"> --}}
        <hr>
        <h5 class=" mb-2 mt-2" align='center'>INFORMASI PENDAFTARAN</h5>
        <h6 class=" mb-2 mt-4" align='center'>Jadwal Penerimaan Peserta Didik Baru</h6>
        {{-- <hr> --}}
        <div class="row mb-4 p-4 mt-5">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4 me-5">
                <div class="card border-outline-primary shadow-sm h-100 py-2 border border-dark">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1 badge"
                                    style="background-color:rgb(255, 147, 163)">
                                    Afirmasi
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-thin fa-landmark fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4 me-5" >
                <div class="card border-outline-primary shadow-sm h-100 py-2 border border-dark">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1 badge"
                                    style="background-color:rgb(255, 147, 163)">
                                    Prestasi
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-thin fa-landmark fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-5 mb-4 me-5">
                <div class="card border-outline-primary shadow-sm h-100 py-2 border border-dark">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1 badge"
                                    style="background-color:rgb(255, 147, 163)">
                                    Zonasi
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-thin fa-landmark fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}




@endsection
