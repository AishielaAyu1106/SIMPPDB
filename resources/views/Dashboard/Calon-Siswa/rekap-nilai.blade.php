@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    <h3 align='center'>Rekap Nilai</h3>
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
                                                    placeholder="0.00" value="{{$rekap->mtk??0}}">
                                                <div class="invalid-feedback">Isi Dengan benar</div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="form-label">Ilmu Pengetahuan Alam</label>
                                                <input type="text" name="ipa" class="form-control" id="ipa"
                                                    placeholder="0.00" value="{{$rekap->ipa??0}}">
                                                <div class="invalid-feedback">Isi Dengan benar</div>
                                            </div>

                                            <div class="col-sm-3">
                                                <label class="form-label">Ilmu Pengetahuan Sosial</label>
                                                <input type="text" name="ips" class="form-control" id="ips"
                                                    placeholder="0.00" value="{{$rekap->ips??0}}">
                                                <div class="invalid-feedback">Isi Dengan benar</div>
                                            </div>

                                            <div class="col-sm-3">
                                                <label class="form-label">Bahasa Inggris</label>
                                                <input type="text" name="basing" class="form-control" id="basing"
                                                    placeholder="0.00" value="{{$rekap->basing??0}}">
                                                <div class="invalid-feedback">Isi Dengan benar</div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 ">
                                            <button class="btn btn-lg btn-block mt-4 text-light" style="background-color: rgb(255, 147, 163)"
                                                type="submit">Submit</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
@endsection
