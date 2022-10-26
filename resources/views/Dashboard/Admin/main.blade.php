@extends('Dashboard.Admin.Layout.index')


@section('container')
    {{-- <div class="card-body p-2">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Welcome Back, </h1>
        </div>
    </div> --}}


    <div class="container-fluid">
        {{-- {{ Breadcrumbs::render('dashboard') }} --}}
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800" >Dashboard</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-5">
            <h6 class="d-sm-mb-0 text-gray-500">Selamat Datang {{ auth()->user()->role}} di Halaman, Dashboard</h6>
        </div>

    <div class="row mb-4">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4 mr-3">
            <div class="card border-outline-primary shadow-sm h-100 py-2 border border-dark">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1 badge" style="background-color:rgb(255, 147, 163)">
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

                            <div class="text-xs font-weight-bold text-uppercase mb-1 badge" style="background-color:rgb(255, 147, 163)">
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
                            <div class="text-xs font-weight-bold text-uppercase mb-1 badge" style="background-color:rgb(255, 147, 163)">
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
                            <div class="text-xs font-weight-bold text-uppercase mb-1 badge" style="background-color:rgb(255, 147, 163)">
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

<h5 class="p-4 mb-0">Jumlah Pendaftar Saat Ini Adalah</h5>
<hr>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr style="background-color:rgb(255, 147, 163)" class="text-light">
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NOMOR PENDAFTARAN</th>
                        <th scope="col">JALUR PENDAFTARAN</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <a href="{{ route('kuota-kelas.edit', $item->id) }}"
                        class="col btn btn-outile-primary">Detail</a> --}}
                    {{-- @foreach ($ as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="width: 300px">{{ $item->nama_lengkap }}</td>
                            <td style="width: 500px">{{ $item->Nomor_Pendaftaran }}</td>
                            <td style="width: 500px">{{ $item->Jalur_pendaftaran }}</td>
                            <td style="width: 500px">{{ $item->Jalur_pendaftaran }}</td>

                            <td style="width: 200px">
                                <div class="row">
                                    <form class="delete-data-swift-allert-example"
                                        action="{{ route('kuota-kelas.destroy', $item->id) }}" method="post">
                                        <a href="{{ route('kuota-kelas.edit', $item->id) }}"
                                            class="col btn btn-warning"><i class="fa fa-pen"></i></a>
                                        @method('DELETE')
                                        @csrf
                                        <button class="col btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>

                                </div>
                            </td>


                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>


@endsection
