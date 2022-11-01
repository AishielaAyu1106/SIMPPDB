@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    {{-- @if (date('Y-m-d H:i:s') > $validasi->tanggal_awal && date('Y-m-d H:i:s') < $validasi->tanggal_akhir) --}}
        <h3 align='center' class="p-4">Rekap Nilai</h3>
        <div class="card card-body">
            <form action="/rekap-nilai-siswa" method="post" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    {{-- <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"> --}}


                    <div class="card-body">
                        <div class="row g-3">
                            <h6 align="center">
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

                                <div class="col-sm-3">
                                    <label class="form-label">Bahasa Inggris</label>
                                    <input type="text" name="basing" class="form-control" id="basing"
                                        placeholder="0.00" value="{{ $rekap->basing ?? 0 }}">
                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                </div>
                            </div>



                            <div class="col-sm-4-mb-4">
                                <input name="status" type="hidden" value="uploadberkas">
                                <button type="submit" class="btn btn-outline-light"
                                    style="background-color: rgb(255, 147, 163)">Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
        </div>
        </form>
        </div>
    {{-- @else
        <section style="background-color: #ffffff;">
            <div class="container p-5 h-100">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .20rem;">
                            <div class="row g-0">

                                <h5 align='center'>Mohon Maaf {{ auth()->user()->name }}</h5>
                                <h5 align='center'>Pendaftaran Belum Dibuka</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
    @endif --}}
@endsection
