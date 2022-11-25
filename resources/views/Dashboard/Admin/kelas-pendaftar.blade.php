@extends('Dashboard.Admin.Layout2.index')

@section('container')
    <form action="/pengumuman-admin-diterima" method="POST" class="submit-button-swift-allert-example">
        @csrf
        <section class="" style="background-color: #ffffff;">
            <div class="container p-5 h-100 mt-5">
                <div class="row d-flex  justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                {{-- <div class="card" style="width: 20rem;"> --}}
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
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
