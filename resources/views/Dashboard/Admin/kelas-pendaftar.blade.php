@extends('Dashboard.Admin.Layout2.index')

@section('container')
    <form action="/pengumuman-admin-diterima" method="POST" class="submit-button-swift-allert-example">
        @csrf
        <section class="" >
            <div class="container p-5 h-100 mt-5">

        <div class="container-fluid">
            <div class="card card-body mt-5 p-4 shadow-sm mb-4 border border-bottom-info">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Hallo {{ auth()->user()->name }} !!</h1>
                    </div>

                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                        <h6 class="d-sm-mb-0 text-gray-500">Anda Berada Di Halaman Pilih Kuota kelas, Silahkan Pilih Kelas Untuk Calon Siswa</h6>
                    </div>

                    <div class="card-body ">
                        <h5 class="card-title">Pilih Kelas Calon Siswa</h5>
                        <hr>
                        @foreach ($siswaKelas as $key => $item)
                            <div class="form-check">
                                <input type="hidden" value="{{ request()->route()->parameters['id'] }}"
                                    name="id">
                                <input class="form-check-input" type="radio" name="kuota_kelas_id"
                                    @if ($item['siswa_kuota'] < 1) disabled @endif id="exampleRadios1"
                                    value="{{ $item['id'] }}">
                                <label class="form-check-label" for="exampleRadios1">
                                    {{ $item['nama_kelas'] }}
                                    ({{ $item['siswa_kuota'] }}/{{ $item['kuota'] }})
                                </label>
                            </div>
                        @endforeach

                        <div class="form-group text-center">
                            <button class="btn btn-outline-success btn-sm" class="form-control"
                                type="submit">Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </form>
@endsection
