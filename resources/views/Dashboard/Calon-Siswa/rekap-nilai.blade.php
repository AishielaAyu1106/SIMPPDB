@extends('Dashboard.Calon-Siswa.Layout2.index')

@section('container')
    {{-- @dd(date('Y-m-d H:i:s'), $jadwal->tanggal_awal , $jadwal->tanggal_akhir); --}}
    @if ($jadwal)
        @if (date('Y-m-d H:i:s') > $jadwal->tanggal_awal && date('Y-m-d H:i:s') < $jadwal->tanggal_akhir)
            <form action="/rekap-nilai-siswa" method="post" enctype="multipart/form-data"
                class="submit-button-swift-allert-example">
                @csrf
                <section class="p-4 mt-4">
                    <div class="card card-body mt-5 p-4 shadow-sm">
                        <div class="card-body">
                            {{-- @if (date('Y-m-d H:i:s') > $validasi->tanggal_awal && date('Y-m-d H:i:s') < $validasi->tanggal_akhir) --}}
                            <h3 class="m-0 font-weight-bold text-dark">Rekap Nilai</h3>
                            <hr>

                            <div class="card-body">
                                <div class="row g-3">
                                    <h6 align="center" class="mb-4">
                                        Nilai Rata-Rata Mapel Kelompok A semester 1 - 5
                                    </h6>


                                    <div class="row g-3">
                                        <div class="col-sm-3">
                                            <label class="form-label">Matematika</label>
                                            <input type="text" name="mtk" class="form-control" id="mtk"
                                                placeholder="0.00" value="{{ $rekap->mtk ?? 0 }}">
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="form-label">Ilmu Pengetahuan Alam</label>
                                            <input type="text" name="ipa" class="form-control" id="ipa"
                                                placeholder="0.00" value="{{ $rekap->ipa ?? 0 }}">
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>

                                        <div class="col-sm-3">
                                            <label class="form-label">Ilmu Pengetahuan Sosial</label>
                                            <input type="text" name="ips" class="form-control" id="ips"
                                                placeholder="0.00" value="{{ $rekap->ips ?? 0 }}">
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>

                                        <div class="col-sm-3 mb-3">
                                            <label class="form-label">Bahasa Inggris</label>
                                            <input type="text" name="basing" class="form-control" id="basing"
                                                placeholder="0.00" value="{{ $rekap->basing ?? 0 }}">
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <div class="col-sm-3 mb-4 ">
                                <input name="status" type="hidden" value="uploadberkas">
                                <button type="submit" class="btn btn-outline-success btn-sm ">Submit</button>
                            </div>
                        </div>
                    </div>
                    </div>

                    </div>
                    </div>
                    </div>
                </section>
            </form>
        @else
            <section style="background-color: #ffffff;">
                <div class="container p-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col col-lg-6 mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .20rem;">
                                <div class="row g-0">
                                    {{-- <div class="card m-auto" style="width: 18rem; ">
                                    <div class="card-body"> --}}
                                    <h5 align='center'>Mohon Maaf {{ auth()->user()->name }}</h5>
                                    @if (date('Y-m-d H:i:s') < $jadwal->tanggal_awal)
                                        <h5 align='center'>Pendaftaran Belum Dibuka</h5>
                                    @else
                                        <h5 align='center'>Pendaftaran Sudah Ditutup</h5>
                                    @endif
                                    {{-- <h5 align='center'>Pendaftaran akan dibuka pada {{$jadwal->zonasi}</h5> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </section>
        @endif
    @else


            <div class="p-4 mt-5">
                <div class="card shadow-sm mb-4 mt-5">

                    <div class="card-body ">
                        {{-- @foreach ($item as $lihatinfo) --}}
                        <div class="card-body ">
                            <div class="col">
                                <div class="row d-flex p-5 justify-content-center align-items-center h-100" style="border-radius: .20rem; background-color:khaki">
                                    <div class="col-sm-4">

                                        <h5 align='center'>Mohon Maaf {{ auth()->user()->name }}</h5>
                                        <h5 align='center'>Rekap Nilai Belum Dapat Diakses</h5>
                                        <h5 align='center'>Silahkan isi Formulir Pendaftaran Terlebih Dahulu</h5>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    @endif
@endsection
