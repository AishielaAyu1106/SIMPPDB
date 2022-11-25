@extends('Dashboard.Admin.Layout2.index')
{{-- @extends('layouts.main') --}}
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card card-body mt-5 p-4 shadow-sm mb-4">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
                </div>

                <div class="d-sm-flex align-items-center justify-content-between mt-2">
                    <h6 class="d-sm-mb-0 text-gray-500">Selamat Datang {{ auth()->user()->role }} di Halaman, Dashboard</h6>
                </div>
            </div>

        </div>
        {{-- {{ Breadcrumbs::render('dashboard') }} --}}
        <!-- Page Heading -->


        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data pendaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dashboardData->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Afirmasi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $dashboardData->where('Jalur_pendaftaran', 'Afirmasi')->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-file fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Prestasi
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            {{ $dashboardData->where('Jalur_pendaftaran', 'Prestasi')->count() }}</div>
                                    </div>
                                    {{-- <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-award fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Zonasi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $dashboardData->where('Jalur_pendaftaran', 'Zonasi')->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-city fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                {{-- <div class=""> --}}
                <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran</h6>
                <a href="/cetak-data-pendaftaran" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Cetak Data Pendaftaran</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th >No</th>
                                <th >Nama</th>
                                <th >Nomor Pendaftaran</th>
                                <th >Jalur Pendaftaran</th>
                                <th >Status</th>
                                <th >Aksi</th>
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
                                        <a href="/data-pendaftar/show/{{ $item->id }}" class="btn btn-outline-success btn-icon-split btn-sm">
                                            <span class="text"><i class="fas fa-info-circle"></i> Detail</span>
                                        </a>
                                        {{-- <a href="/data-pendaftar/show/{{ $item->id }}">
                                            <i class="col btn btn-outline-success btn-sm"><i class="fa fa-info-circle"></i> Detail</i>
                                        </a> --}}
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    {{-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer> --}}
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    </body>

    </html>
    </div>
@endsection

{{-- @section('container')

        <div class="container-fluid">
            <div class="card card-body mt-5 p-4 shadow-sm">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between ">
                        <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
                    </div>

                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                        <h6 class="d-sm-mb-0 text-gray-500">Selamat Datang {{ auth()->user()->role }} di Halaman, Dashboard</h6>
                    </div>
                </div>

            </div>

            <div class="row mb-4 p-4 mt-4">
                <div class="col-xl-3 col-md-6 mb-4 mr-3">
                    <div class="card border-outline-primary shadow-sm h-100 py-2 border border-dark">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1 badge"
                                        style="background-color:rgb(255, 147, 163)">
                                        Data Pendaftar
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$dashboardData->count()}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-thin fa-landmark fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6 mb-4 mr-3">
                    <div class="card  shadow-sm h-100 py-2 border border-dark">
                        <div class="card-body">

                            <div class="row no-gutters align-items-center">
                                <div class="col mr-5">

                                    <div class="text-xs font-weight-bold text-uppercase mb-1 badge"
                                        style="background-color:rgb(255, 147, 163)">
                                        Afirmasi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dashboardData->where('Jalur_pendaftaran','Afirmasi')->count()}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-thin fa-school fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4 mr-3">
                    <div class="card border-bottom-success shadow-sm h-100 py-2 border border-dark">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-5">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1 badge"
                                        style="background-color:rgb(255, 147, 163)">
                                        Prestasi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dashboardData->where('Jalur_pendaftaran','Prestasi')->count()}}</div>
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
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dashboardData->where('Jalur_pendaftaran','Zonasi')->count()}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-thin fa-landmark fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4 shadow-sm">
                    <h5 class=" mb-2 mt-2">Data Pendaftar

                    </h5>
                    <div class="btn-list  pt-2 pb-2 text-end">
                        <a href="/cetak-data-pendaftaran" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Cetak Data Pendaftaran</a>
                    </div>
                    <hr>

                    <div class="table-responsive ">

                        <table class="table table-sm ">

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
                                                <i class="col btn btn-outline-success btn-sm"><i class="fa fa-info-circle"></i> Detail</i>
                                            </a>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

@endsection --}}
