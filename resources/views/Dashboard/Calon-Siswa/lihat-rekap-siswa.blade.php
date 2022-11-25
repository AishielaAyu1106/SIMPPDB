@extends('Dashboard.Calon-Siswa.Layout2.index')

@section('container')
    <p class="mb-4">
    <h2 align='center' class="text-dark font-italic me-1">Rekap Nilai & Prestasi</h2>
    </p>
    <div class="row mb-9">
        <div class="col-md-6">
            <div class="card-body">
                <p class="mb-4">
                <h6 class="text-dark font-italic me-1">Nilai Rata-Rata Semester 1 - 5</h6>
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


    </div>
@endsection
