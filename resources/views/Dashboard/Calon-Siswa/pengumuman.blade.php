@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    <section class="p-4 mt-4">
        <div class="card card-body mt-5 p-4 shadow-sm">
            <div class="card-body">
                <h4 align='center'>Pengumuman Hasil Seleksi Penerimaan Peserta Didik Baru</h4>
                <h4 align='center'>SMAN 1 Bengalon</h4>
                <hr class="mb-0 mt-0">
                <div class="container py-5 mt-4">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-5 ">
                            <div class="card shadow-sm">
                                <div class="card-body text-center mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                        alt="avatar" class="rounded-circle img-fluid mb-2" style="width: 150px;">
                                    {{-- <h5 class="my-3">Nama :</h5> --}}
                                    <p class="text-muted mb-2">Nama : {{ $pengumumansiswa->nama_lengkap }}</p>
                                    {{-- <p class="text-muted mb-2">Email : {{Auth::user()->email}}</p> --}}
                                    <p class="text-muted ">N I S N : {{ $pengumumansiswa->NISN }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <p class="mb-4">
                                        {{-- <h6 class="text-primary font-italic me-1">Biodata Siswa</h6> --}}
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-2">Nomor Pendaftaran </p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">: {{ $pengumumansiswa->Nomor_Pendaftaran }}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-2">Nama Lengkap </p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">: {{ $pengumumansiswa->nama_lengkap }}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="mb-4">Jalur Pendaftaran </p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="text-muted mb-0">: {{ $pengumumansiswa->Jalur_pendaftaran }}</p>
                                        </div>
                                    </div>

                                    @if ($pengumumansiswa->status == 'Terima berkas')
                                        <span class="badge text-light badge-primary mb-4" style="background-color:green">Selamat
                                            Anda Dinyatakan Telah Diterima Di SMAN 1 Bengalon </span>
                                    @elseif ($pengumumansiswa->status == 'Tolak Berkas')
                                        <span class="badge text-black badge-primary mb-4"  style="background-color:red">Mohon
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
                                            <p class="text-muted mb-0">: {{ $pengumumansiswa->kelas }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <hr> --}}
                    </div>



                </div>
            </div>

        </div>



    </section>
@endsection
