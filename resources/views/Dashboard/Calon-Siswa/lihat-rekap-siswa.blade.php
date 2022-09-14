@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    <section style="background-color: rgb(255, 255, 255);">
        <p class="mb-4">
            <h2 align='center' class="text-primary font-italic me-1">Rekap Nilai & Prestasi</h2>
            </p>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4 sm-lg-4">
                        <div class="card-body">
                            <p class="mb-4">
                            <h6 class="text-primary font-italic me-1">Nilai Rata-Rata Semester 1 - 5</h6>
                            </p>

                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="mb-0">Matematika</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">{{ $showrekap->mtk }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="mb-0">Ilmu Pengetahuan Alam</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">{{ $showrekap->ipa }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="mb-0">Ilmu Pengetahuan Sosial</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">{{ $showrekap->ips }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="mb-0">Bahasa Inggris</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">{{ $showrekap->basing }}</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    {{-- <div class="col-lg-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="mb-4">
                                <h6 class="text-primary font-italic me-1">Catatan Prestasi</h6>
                                </p>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Jenis Prestasi</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $showrekap->jenis_prestasi }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Tingkat</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $showrekap->tingkat }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nama Prestasi</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $showrekap->nama_prestasi }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Tahun</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $showrekap->tahun }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Penyelenggara</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $showrekap->penyelenggara }}</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col lg-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="mb-4"><h6 class="text-primary font-italic me-1">Catatan Prestasi</h6></p>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="mb-0">Jenis Prestasi</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="text-muted mb-0">{{ $showrekap->jenis_prestasi }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="mb-0">Tingkat</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="text-muted mb-0">{{ $showrekap->tingkat }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="mb-0">Nama Prestasi</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="text-muted mb-0">{{ $showrekap->nama_prestasi }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="mb-0">Tahun</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="text-muted mb-0">{{ $showrekap->tahun }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <p class="mb-0">Penyelenggara</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="text-muted mb-0">{{ $showrekap->penyelenggara }}</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4 sm-lg-4">
                        <div class="card-body">
                            <p class="mb-4"><h6 class="text-primary font-italic me-1">Piagam Prestasi</h6>
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Scan Piagam :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{asset('storage/app/public'. $showrekap->piagam)}}" class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
    </section>
@endsection
