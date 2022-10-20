@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    {{-- <div class="card-body p-2">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
        </div>
    </div> --}}

    <div class="container-fluid">
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



@endsection
