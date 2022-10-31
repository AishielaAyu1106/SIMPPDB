@extends('Dashboard.Admin.Layout.index')


@section('container')
    {{-- <section style="background-color: #eee;" class="p-4 mt-4"> --}}
        <div class="container-fluid">
            {{-- {{ Breadcrumbs::render('dashboard') }} --}}
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
                {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
            </div>

            <div class="d-sm-flex align-items-center justify-content-between mb-5">
                <h6 class="d-sm-mb-0 text-gray-500">Selamat Datang {{ auth()->user()->role }} di Halaman, Dashboard</h6>
            </div>

            <div class="row mb-4 p-4">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 mr-3">
                    <div class="card border-outline-primary shadow-sm h-100 py-2 border border-dark">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1 badge"
                                        style="background-color:rgb(255, 147, 163)">
                                        Data Pendaftar
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

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 mr-3">
                    <div class="card  shadow-sm h-100 py-2 border border-dark">
                        <div class="card-body">

                            <div class="row no-gutters align-items-center">
                                <div class="col mr-5">

                                    <div class="text-xs font-weight-bold text-uppercase mb-1 badge"
                                        style="background-color:rgb(255, 147, 163)">
                                        Afirmasi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-thin fa-school fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4 mr-3">
                    <div class="card border-left-success shadow-sm h-100 py-2 border border-dark">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-5">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1 badge"
                                        style="background-color:rgb(255, 147, 163)">
                                        Prestasi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-thin fa-city fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4 mr-3">
                    <div class="card border-left-success shadow-sm h-100 py-2 border border-dark">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-5">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1 badge"
                                        style="background-color:rgb(255, 147, 163)">
                                        Zonasi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-thin fa-landmark fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-5">
                    <h5 class=" mb-2 mt-2">Data Pendaftar</h5>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr class="text-dark" style="background-color:rgb(255, 243, 245)">
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NOMOR PENDAFTARAN</th>
                                    <th scope="col">JALUR PENDAFTARAN</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dashboardData as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td style="width: 300px">{{ $item->nama_lengkap }}</td>
                                        <td style="width: 500px">{{ $item->Nomor_Pendaftaran }}</td>
                                        <td style="width: 500px">{{ $item->Jalur_pendaftaran }}</td>
                                        <td style="width: 500px ">{{ $item->status }}</td>

                                        <td style="width: 200px">
                                            <a href="/data-pendaftar/show/{{ $item->id }}">
                                                <i class="col btn btn-outline-success">Detail</i>
                                            </a>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
    {{-- </section> --}}
@endsection
