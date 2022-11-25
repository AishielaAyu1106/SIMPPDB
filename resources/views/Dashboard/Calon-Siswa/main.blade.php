@extends('Dashboard.Calon-Siswa.Layout2.index')

@section('container')
    {{-- <div class="card-body p-2">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
        </div>
    </div> --}}

    <div class="container-fluid">
        <div class="card card-body mt-5 p-4 shadow-sm mb-4">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
                </div>

                <div class="d-sm-flex align-items-center justify-content-between mt-2">
                    <h6 class="d-sm-mb-0 text-gray-500">Selamat Datang {{ auth()->user()->name }} di Halaman, Dashboard</h6>
                </div>
            </div>

        </div>


    {{-- <div class="card"> --}}
    {{-- <hr> --}}


    {{-- <hr> --}}
    <h6 align='center' class="m-0 font-weight-bold text-dark mb-2">Jadwal Penerimaan Peserta Didik Baru</h6>
    <div class="row d-flex p-4 justify-content-center align-items-center ">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Afirmasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dashboardsiswaAfirmasi->tanggal_awal}} /</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dashboardsiswaAfirmasi->tanggal_akhir}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Prestasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dashboardsiswaPrestasi->tanggal_awal}} /</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dashboardsiswaPrestasi->tanggal_akhir}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Zonasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dashboardsiswaZonasi->tanggal_awal}} / </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dashboardsiswaZonasi->tanggal_akhir}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Illustrations -->
    <div class="p-4 ">
        <div class="card shadow-sm mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">INFORMASI PENDAFTARAN</h6>
            </div>
            <div class="card-body ">
                @foreach ($item as $lihatinfo)
                    <div class="card-body shadow-sm">
                        <div class="col">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                        src="{{ asset('css/informasi pendaftaran.svg') }}" alt="...">
                                </div>

                                <div class="col-sm-6 mt-5">
                                    <li class="text-muted mb-2">{{ $lihatinfo->syarat_usia }}</li>
                                    <li class="text-muted mb-2">{{ $lihatinfo->ijazah }}</li>
                                    <li class="text-muted mb-2">{{ $lihatinfo->surat }}</li>
                                    <li class="text-muted mb-2">{{ $lihatinfo->surat_lainnya }}</li>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
    </div>


    </section>
@endsection
