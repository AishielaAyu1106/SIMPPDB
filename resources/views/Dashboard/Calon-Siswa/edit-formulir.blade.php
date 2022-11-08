@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    <form action="/edit-formulir-pendaftaran/{{ $edit->id }}" method="post" enctype="multipart/form-data">
        {{-- @method('put') --}}
        @csrf
        <section class="vh-100" style="background-color: #eee;">
            <h3 align="center" class="mt-4">Edit Formulir Pendaftaran</h3>
            <div class="row mb-3 mt-4">
                <div class="col-md-6">
                    <div class="card card-body text-center">
                        <h4>{{ $edit->Nomor_Pendaftaran }}</h4>
                        <p class="mb-0"> <span class="badge" style="background-color:rgb(255, 147, 163)">Nomor
                                Pendaftaran</span></p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-body text-center">
                        <h4>{{ $edit->Jalur_pendaftaran }}</h4>
                        {{-- <input name="Jalur_pendaftaran" type="hidden" value="{{old($edit->Jalur_pendaftaran)}}"> --}}
                        <p class="mb-0"> <span class="badge" style="background-color:rgb(255, 147, 163)">Jalur
                                Pendaftaran
                            </span> </p>
                    </div>
                </div>
            </div>

            <div class="card card-body">
                {{-- <div class="container">
            <div class="card-body">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> --}}



                <div class="card-body">
                    <div class="form-group">
                        <label class="agama">Nomor Pendaftaran</label>
                        <input type="text" name="Nomor_Pendaftaran" class="form-control" id="nodaftar"
                            value="{{ old('Nomor_Pendaftaran', $edit->Nomor_Pendaftaran) }}" placeholder>
                    </div>

                    {{-- <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Jalur Pendaftaran</label>
                <select class="form-select" name="Jalur_pendaftaran" id="exampleFormControlInput1" >
                  <option selected>Pilih Jalur Pendaftaran</option>
                    <option value="Afirmasi">Prestasi</option>
                    <option value="Afirmasi">Afirmasi</option>
                    <option value="Zonasi">Zonasi</option>
                </select>
                <div class="invalid-feedback">Silahkan Pilih Jalur Pendaftaran Yang Benar</div>
              </div> --}}

                    <div class="form-group">
                        <label for="Namasiswa" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" id="Namasiswa"
                            value="{{ old('nama_lengkap', $edit->nama_lengkap) }}" placeholder value>

                        <div class="invalid-feedback">Silahkan Isi nama dengan benar</div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label"
                                value="{{ old('Jenis_kelamin', $edit->Jenis_kelamin) }}">Jenis Kelamin</label>
                            <select class="form-select" name="Jenis_kelamin" id="exampleFormControlInput1">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="NomorInduk" class="form-label">N I S N</label>
                            <input type="text" name="NISN" class="form-control" id="NomorInduk"
                                value="{{ old('NISN', $edit->NISN) }}" placeholder value>
                            <small class="text-muted">Isi NISN dengan benar</small>
                            <div class="invalid-feedback">Silahkan Isi NISN dengan benar</div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Tempat Lahir</label>
                            <input type="address" name="tempat_lahir_siswa" class="form-control" id="address"
                                value="{{ old('tempat_lahir_siswa', $edit->tempat_lahir_siswa) }}" placeholder value>
                            <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                        </div>

                        <div class="col-sm-6">
                            <label for="date" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir_siswa" class="form-control" id="date"
                                value="{{ old('tanggal_lahir_siswa', $edit->tanggal_lahir_siswa) }}" placeholder value>
                            <div class="invalid-feedback">Tanggal Lahir Dibutuhkan</div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label class="agama">Agama</label>
                            <div>
                                <select name="agama_siswa" class="form-control"
                                    value="{{ old('agama_siswa', $edit->agama_siswa) }}">
                                    <option value="islam">Islam</option>
                                    <option value="protestan">Kristen Protestan</option>
                                    <option value="katolik">Kristen Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label class="Sekolah_asal">Sekolah Asal</label>
                            <input type="text" name="Sekolah_asal" class="form-control" id="Sekolah_asal"
                                value="{{ old('Sekolah_asal', $edit->Sekolah_asal) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="col-sm-4">
                            <label class="lulus">Tahun Lulus</label>
                            <input type="text" name="Tahun_lulus" class="form-control" id="Tahun_lulus"
                                value="{{ old('Tahun_lulus', $edit->Tahun_lulus) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>
                    </div>


                    <div class="row g-3">
                        <label class="Alamat">
                            <hr> Alamat Tempat Tinggal
                        </label>
                        <div class="col-sm-4">
                            <label class="form-label">Dusun</label>
                            <input type="text" name="dusun" class="form-control" id="dusun"
                                value="{{ old('dusun', $edit->dusun) }}" placeholder value>
                            <div class="invalid-feedback">Alamat dibutuhkan</div>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label">RT</label>
                            <input type="text" name="Rt" class="form-control" id="rt"
                                value="{{ old('Rt', $edit->Rt) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label">RW</label>
                            <input type="text" name="rw" class="form-control" id="rw"
                                value="{{ old('rw', $edit->rw) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label">Kelurahan/Desa</label>
                            <input type="text" name="kelurahan_desa" class="form-control" id="kelurahan"
                                value="{{ old('kelurahan_desa'), $edit->kelurahan_desa }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">Kode Pos</label>
                            <input type="text" name="kode_pos" class="form-control" id="kodepos"
                                value="{{ old('kode_pos', $edit->kode_pos) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label class="form-label">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" id="kecamatan"
                                value="{{ old('kecamatan', $edit->kecamatan) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label">Kabupaten/Kota</label>
                            <input type="text" name="kabupaten_kota" class="form-control" id="kota"
                                value="{{ old('kabupaten_kota', $edit->kabupaten_kota) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label">Provinsi</label>
                            <input type="text" name="provinsi" class="form-control" id="provinsi"
                                value="{{ old('provinsi', $edit->provinsi) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label">Nomor Hp</label>
                            <input type="text" name="nomor_hp_siswa" class="form-control" id="nohp"
                                value="{{ old('nomor_hp_siswa', $edit->nomor_hp_siswa) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="col-sm-6">
                            <label for="email" class="form-label"> Email Siswa</label>
                            <input type="email" name="email_siswa" class="form-control" id="email"
                                value="{{ old('email_siswa', $edit->email_siswa) }}" placeholder="you@example.com">
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>
                    </div>

                    {{-- Data Ayah kandung --}}

                    <div class="row g-3">
                        <h6 align="center">
                            <hr> Data Ayah Kandung
                        </h6>
                        <div class="form-group">
                            <label for="address" class="form-label">Nama Ayah</label>
                            <input type="address" name="nama_ayah" class="form-control" id="address"
                                value="{{ old('nama_ayah', $edit->nama_ayah) }}" placeholder>
                            <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Tempat Lahir</label>
                            <input type="address" name="tempat_lahir_ayah" class="form-control" id="address"
                                value="{{ old('tempat_lahir_ayah', $edit->tempat_lahir_ayah) }}" placeholder>
                            <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                        </div>

                        <div class="col-sm-6">
                            <label for="date" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir_ayah" class="form-control" id="date"
                                value="{{ old('tanggal_lahir_ayah', $edit->tanggal_lahir_ayah) }}" placeholder>
                            <div class="invalid-feedback">Tanggal Lahir Dibutuhkan</div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label class="form-label">NIK Ayah</label>
                            <input type="text" name="NIK_ayah" class="form-control" id="NIK"
                                value="{{ old('NIK_ayah', $edit->NIK_ayah) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label">Pekerjaan</label>
                            <input type="text" name="pekerjaan_ayah" class="form-control" id="Pekerjaan"
                                value="{{ old('pekerjaan_ayah', $edit->pekerjaan_ayah) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label">Nomor HP</label>
                            <input type="text" name="nomor_hp_ayah" class="form-control" id="nohpayah"
                                value="{{ old('nomor_hp_ayah', $edit->nomor_hp_ayah) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>
                    </div>

                    {{-- Data Ibu kandung --}}

                    <div class="row g-3">
                        <h6 align="center">
                            <hr> Data Ibu Kandung
                        </h6>
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control" id="address"
                                value="{{ old('nama_ibu', $edit->nama_ibu) }}" placeholder value>
                            <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Tempat Lahir</label>
                            <input type="address" name="tempat_lahir_ibu" class="form-control" id="address"
                                value="{{ old('tempat_lahir_ibu', $edit->tempat_lahir_ibu) }}" placeholder value>
                            <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                        </div>

                        <div class="col-sm-6">
                            <label for="date" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir_ibu" class="form-control" id="date"
                                value="{{ old('tanggal_lahir_ibu', $edit->tanggal_lahir_ibu) }}" placeholder value>
                            <div class="invalid-feedback">Tanggal Lahir Dibutuhkan</div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label class="form-label">NIK Ibu</label>
                            <input type="text" name="NIK_ibu" class="form-control" id="NIK"
                                value="{{ old('NIK_ibu', $edit->NIK_ibu) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label">Pekerjaan</label>
                            <input type="text" name="pekerjaan_ibu" class="form-control" id="Pekerjaan"
                                value="{{ old('pekerjaan_ibu', $edit->pekerjaan_ibu) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label">Nomor HP</label>
                            <input type="text" name="nomor_hp_ibu" class="form-control" id="nohpibu"
                                value="{{ old('nomor_hp_ibu', $edit->nomor_hp_ibu) }}" placeholder value>
                            <div class="invalid-feedback">Isi Dengan benar</div>
                        </div>

                        <div class="row g-3">
                            <h6 align="center">
                                <hr>Nilai Rata-Rata Mapel Kelompok A semester 1 - 5
                            </h6>
                            {{-- <div class="col-sm-4">
                                            <label class="form-label">Pendidikan Agama</label>
                                            <input type="text" name="p_agama" class="form-control" id="p_agama"
                                                value="{{ old('p_agama', $edit->p_agama) }}" placeholder value>
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label">PPKn</label>
                                            <input type="text" name="ppkn" class="form-control" id="ppkn"
                                                value="{{ old('ppkn', $edit->ppkn) }}" placeholder value>
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label class="form-label">Bahasa Indonesia</label>
                                            <input type="text" name="B_indo" class="form-control" id="b_indo"
                                                value="{{ old('B_indo', $edit->B_indo) }}" placeholder value>
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>
                                    </div> --}}

                            {{-- <div class="row g-3">
                                        <div class="col-sm-3">
                                            <label class="form-label">Matematika</label>
                                            <input type="text" name="mtk" class="form-control" id="mtk"
                                                value="{{ old('mtk', $edit->mtk) }}" placeholder value>
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="form-label">Ilmu Pengetahuan Alam</label>
                                            <input type="text" name="ipa" class="form-control" id="ipa"
                                                value="{{ old('ipa', $edit->ipa) }}" placeholder value>
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>

                                        <div class="col-sm-3">
                                            <label class="form-label">Ilmu Pengetahuan Sosial</label>
                                            <input type="text" name="ips" class="form-control" id="ips"
                                                value="{{ old('ips', $edit->ips) }}" placeholder value>
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>

                                        <div class="col-sm-3">
                                            <label class="form-label">Bahasa Inggris</label>
                                            <input type="text" name="basing" class="form-control" id="basing"
                                                value="{{ old('basing', $edit->basing) }}" placeholder value>
                                            <div class="invalid-feedback">Isi Dengan benar</div>
                                        </div>
                                    </div> --}}

                            {{-- upload file --}}


                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="form-label" for="personal-data">Fotocopy Akta Kelahiran</label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcakta"
                                                value="{{ old('fcakta', $edit->fcakta) }}">
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6">
                                    <label for="form-label" for="personal-data">Surat Keterangan Lulus
                                        Asli</label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="SKLasli"
                                                value="{{ old('SKLasli', $edit->SKLasli) }}">
                                        </div>
                                    </div>
                                    @error('SKLasli')
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="form-label" for="personal-data">Fotocopy STTB legalisir
                                        <small>(jika ada)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcSTTB"
                                                value="{{ old('fcSTTB', $edit->fcSTTB) }}">
                                        </div>
                                    </div>
                                    @error('fcSTTB')
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="form-label" for="personal-data">Fotocopy Raport
                                        Kelas<small>(Semester 1-5)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcRaport"
                                                value="{{ old('fcRaport', $edit->fcRaport) }}">
                                        </div>
                                    </div>
                                    @error('fcRaport')
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row g-3">

                                <div class="col-sm-6">
                                    <label for="form-label" for="personal-data">Surat Keterangan Bebas
                                        Narkoba<small>(dari BNN)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control"
                                                name="suratnarkoba"
                                                value="{{ old('suratnarkoba', $edit->suratnarboka) }}">
                                        </div>
                                    </div>
                                    @error('suratnarkoba')
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="form-label" for="personal-data">Pas Foto Ukuran 3 x 4
                                        <small>(dengan Latar Merah)</small></label>

                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="Foto"
                                                value="{{ old('Foto', $edit->Foto) }}">
                                        </div>
                                    </div>
                                    @error('Foto')
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>




                            <div class="row g-3">
                                <h6>
                                    <hr>Bagi Jalur Afirmasi
                                </h6>
                                <div class="col-sm-4">
                                    <label for="form-label" for="personal-data">Fotocopy Kartu Indonesia Pintar
                                        <small>(KIP)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcKIP"
                                                value="{{ old('fcKIP', $edit->fcKIP) }}">
                                        </div>
                                    </div>
                                    @error('fcKIP')
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="form-label" for="personal-data">Fotocopy Kartu Pelindung Sosial
                                        <small>(KPS)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcKPS"
                                                value="{{ old('fcKPS', $edit->fcKPS) }}">
                                        </div>
                                    </div>
                                    @error('fcKPS')
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label for="form-label" for="personal-data">Fotocopy Program Keluarga Harapan
                                        <small>(PKH)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcPKH"
                                                value="{{ old('fcPKH', $edit->fcPKH) }}">
                                        </div>
                                    </div>
                                    @error('fcPKH')
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <h6 align="center">
                                        <hr>Catatan Prestasi
                                    </h6>
                                    <div class="col-sm-6">
                                        <label class="form-label">Jenis Prestasi</label>
                                        <input type="text" name="jenis_prestasi" class="form-control"
                                            id="jenisprestasi" value="{{ old('jenis_prestasi') }}"
                                            placeholder="Cth. OSN">
                                        <div class="invalid-feedback">Isi Dengan benar</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="email" class="form-label">Tingkat</label>
                                        <input type="text" name="tingkat" class="form-control" id="tingkat"
                                            value="{{ old('tingkat') }}" placeholder="Cth.Kabupaten">
                                        <div class="invalid-feedback">Isi Dengan benar</div>
                                    </div>

                                </div>

                                <div class="row g-3">
                                    <div class="col-sm-4">
                                        <label class="form-label">Nama Prestasi</label>
                                        <input type="text" name="nama_prestasi" class="form-control"
                                            id="nama_prestasi" value="{{ old('nama_prestasi') }}"
                                            placeholder="Cth. Olimpiade Sains">
                                        <div class="invalid-feedback">Isi Dengan benar</div>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="email" class="form-label">Tahun</label>
                                        <input type="text" name="tahun" class="form-control" id="tahun"
                                            value="{{ old('tahun') }}" placeholder="Cth. 2021">
                                        <div class="invalid-feedback">Isi Dengan benar</div>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="email" class="form-label">Penyelenggara</label>
                                        <input type="text" name="penyelenggara" class="form-control"
                                            id="penyelenggara" value="{{ old('penyelenggara') }}"
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
                                                    name="piagam">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row g-3">
                                <div class="col-sm-4-mb-4">
                                    <input name="status" type="hidden" value="Sedang diproses">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                            {{-- <div class="row g-3">

                                        <hr class="mb-4">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
                                    </div> --}}

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
