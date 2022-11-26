@extends('Dashboard.Calon-Siswa.Layout2.index')

@section('container')
    <div class="container-fluid">
        <div class="card card-body mt-5 p-4 shadow-sm mb-4 border border-bottom-info">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 ">Pengumuman Peserta Didik Baru</h1>
                </div>

                <div class="d-sm-flex align-items-center justify-content-between mt-2">
                    <h6 class="d-sm-mb-0 text-gray-500">Pengumuman Ini Ditujukan Kepada <span
                            class="d-sm-mb-0 text-success">{{ auth()->user()->name }}</span> yang Telah Mendaftar di SMAN 1
                        Bengalon</h6>

                </div>
            </div>

        </div>





        {{-- <section class="p-4 mt-4">
        <div class="card card-body mt-5 p-4 shadow-sm">
            <div class="card-body">
                <h4 align='center'>Pengumuman Hasil Seleksi Penerimaan Peserta Didik Baru</h4>
                <h4 align='center'>SMAN 1 Bengalon</h4>
                <hr class="mb-0 mt-0">
                <div class="container py-5 mt-4"> --}}
        {{-- <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-5 ">
                            <div class="card shadow-sm">
                                <div class="card-body text-center mb-2">
                                    <img src="{{ asset('css/profile (1).svg') }}"
                                        alt="avatar" class="rounded-circle img-fluid mb-2" style="width: 135px;">
                                    <p class="text-muted mb-2">Nama : {{ $pengumumansiswa->nama_lengkap??0 }}</p>

                                    <p class="text-muted ">N I S N : {{ $pengumumansiswa->NISN??0 }}</p>
                                </div>
                            </div>
                        </div> --}}


        <div class="p-4 ">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">PENGUMUMAN </h6>
                </div>
                <div class="card-body ">
                    <div class="card-body ">
                        <div class="col">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                        src="{{ asset('css/pengumuman.svg') }}" alt="...">
                                </div>
                                <div class=" col-sm-6 mt-2">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-2">Nomor Pendaftaran </p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">: {{ $pengumumansiswa->Nomor_Pendaftaran ?? 0 }}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-2">Nama Lengkap </p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">: {{ $pengumumansiswa->nama_lengkap ?? 0 }}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-4">Jalur Pendaftaran </p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">: {{ $pengumumansiswa->Jalur_pendaftaran ?? 0 }}</p>
                                        </div>
                                    </div>

                                    @if ($pengumumansiswa->status??0 == 'Berkas Diterima')
                                        <span class="badge text-light badge-primary mb-4"
                                            style="background-color:green">Selamat
                                            Anda Dinyatakan Telah Diterima Di SMAN 1 Bengalon </span>
                                    @elseif ($pengumumansiswa->status??0 == 'Berkas Ditolak')
                                        <span class="badge text-black badge-primary mb-4" style="background-color:red">Mohon
                                            Maaf
                                            Anda Belum Diterima Di SMAN 1 Bengalon</span>
                                    @else
                                        <span class="badge text-light badge-danger mb-4"
                                            style="background-color:blue">Pendaftaran
                                            Anda Sedang Diproses</span>
                                    @endif
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-4">Kelas </p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">:
                                                {{ $pengumumansiswa->kelass->kuota_kelass->Nama_Kelas ?? 0 }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    
    </div>

    </div>
    </div>
    </div>
    </div>



    </section>
@endsection
