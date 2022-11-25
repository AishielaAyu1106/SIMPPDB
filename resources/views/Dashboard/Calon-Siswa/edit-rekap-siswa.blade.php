@extends('Dashboard.Calon-Siswa.Layout2.index')

@section('container')
    <h1 align="center">Rekap Nilai & Prestasi</h1>
    <div class="card card-body">
        <form action="/edit-rekap-nilai-siswa/{{ $editRekap->id }}" method="post" enctype="multipart/form-data">
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
                                    value="{{ old('mtk', $editRekap->mtk) }}" placeholder="0.00">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Ilmu Pengetahuan Alam</label>
                                <input type="text" name="ipa" class="form-control" id="ipa"
                                    value="{{ old('ipa', $editRekap->ipa) }}" placeholder="0.00">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-3">
                                <label class="form-label">Ilmu Pengetahuan Sosial</label>
                                <input type="text" name="ips" class="form-control" id="ips"
                                    value="{{ old('ips', $editRekap->ips) }}" placeholder="0.00">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-3">
                                <label class="form-label">Bahasa Inggris</label>
                                <input type="text" name="basing" class="form-control" id="basing"
                                    value="{{ old('basing', $editRekap->basing) }}" placeholder="0.00">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>
                        </div>



                        <div class="row g-3">
                            <h6 align="center">
                                <hr>Catatan Prestasi
                            </h6>
                            <div class="col-sm-6">
                                <label class="form-label">Jenis Prestasi</label>
                                <input type="text" name="jenis_prestasi" class="form-control" id="jenisprestasi"
                                    value="{{ old('jenis_prestasi', $editRekap->jenis_prestasi) }}" placeholder="Cth. OSN">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-6">
                                <label for="email" class="form-label">Tingkat</label>
                                <input type="text" name="tingkat" class="form-control" id="tingkat"
                                    value="{{ old('tingkat', $editRekap->tingkat) }}" placeholder="Cth.Kabupaten">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                        </div>

                        <div class="row g-3">
                            <div class="col-sm-4">
                                <label class="form-label">Nama Prestasi</label>
                                <input type="text" name="nama_prestasi" class="form-control" id="nama_prestasi"
                                    value="{{ old('nama_prestasi', $editRekap->nama_prestasi) }}"
                                    placeholder="Cth. Olimpiade Sains">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-4">
                                <label for="email" class="form-label">Tahun</label>
                                <input type="text" name="tahun" class="form-control" id="tahun"
                                    value="{{ old('tahun', $editRekap->tahun) }}" placeholder="Cth. 2021">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-4">
                                <label for="email" class="form-label">Penyelenggara</label>
                                <input type="text" name="penyelenggara" class="form-control" id="penyelenggara"
                                    value="{{ old('penyelenggara', $editRekap->penyelenggara) }}"
                                    placeholder="Cth. Kabupaten">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <label for="form-label" for="personal-data">Piagam Prestasi</label>
                                <div class="input-group">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input form-control"
                                            value="{{ old('piagam', $editRekap->piagam) }}" name="piagam">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <button class="btn  btn-lg btn-block mt-4 text-light" type="submit" style="background-color: rgb(255, 147, 163)">Update</button>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    </div>
    </form>
    </div>
@endsection
