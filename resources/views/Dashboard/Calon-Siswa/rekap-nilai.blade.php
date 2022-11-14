@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
<form action="/rekap-nilai-siswa" method="post" enctype="multipart/form-data">
    @csrf
    <section class="p-4 mt-4">
        <div class="card card-body mt-5 p-4 shadow-sm">
            <div class="card-body">
                {{-- @if (date('Y-m-d H:i:s') > $validasi->tanggal_awal && date('Y-m-d H:i:s') < $validasi->tanggal_akhir) --}}
                <h3 class="mt-4">Rekap Nilai</h3> <hr>

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



                                    <div class=" text-end">
                                        <input name="status" type="hidden" value="uploadberkas">
                                        <button type="submit" class="btn btn-outline-light"
                                            style="background-color: rgb(255, 147, 163)">Submit</button>
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
</form>
@endsection
