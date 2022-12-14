@extends('Dashboard.Calon-Siswa.Layout2.index')

@section('container')
    @if (date('Y-m-d H:i:s') > $validasi->tanggal_awal && date('Y-m-d H:i:s') < $validasi->tanggal_akhir)
        <div class="container-fluid">
            <div class="card card-body mt-5 p-4 shadow-sm mb-4 border border-bottom-info">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Hallo {{ auth()->user()->name }} !!</h1>
                    </div>

                    <div class="d-sm-flex align-items-center justify-content-between mt-2">
                        <h6 class="d-sm-mb-0 text-gray-500">Anda Berada Di Halaman Formulir Pendaftaran, Silahkan Isi Data
                            Dengan
                            Benar</h6>
                    </div>
                </div>

            </div>
            <section class="p-4 mt-4">
                <div class="card card-body mt-5 p-4 shadow-sm ">
                    <div class="card-body">
                        <h3 align='center' class="m-0 font-weight-bold text-dark mb-4">Formulir Pendaftaran </h3>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="card card-body text-center">
                                    <small>Akan Terisi Setelah Melakukan Pendaftaran
                                        {{ $validasi->Nomor_Pendaftaran }}</small>
                                    <p class="mb-0"> <span class="badge text-dark"
                                            style="background-color:rgb(255, 147, 163)">Nomor
                                            Pendaftaran</span></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-body text-center">
                                    <small>{{ $validasi->Jalur_pendaftaran }}</small>
                                    <p class="mb-0"> <span class="badge text-dark"
                                            style="background-color:rgb(255, 147, 163)">Jalur
                                            Pendaftaran
                                        </span> </p>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">

                            <form action="/formulir-pendaftaran-siswa" method="post" enctype="multipart/form-data"
                                >
                                @csrf
                                <div class="container ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            {{-- <label class="agama text-dark"> Nomor Pendaftaran</label> --}}
                                            <input value="{{ request()->id }}" name="Jalur_pendaftaran" type="hidden">
                                            {{-- <input type="text" name="Nomor_Pendaftaran" class="form-control" id="nodaftar"
                                    value="{{ old('Nomor_Pendaftaran') }}" placeholder value> --}}
                                        </div>

                                        <div class="form-group">
                                            <label for="Namasiswa" class="form-label text-dark">Nama Lengkap</label>
                                            <label for="Namasiswa" class="form-label text-danger">*</label>
                                            <input type="text" name="nama_lengkap" class="form-control" id="Namasiswa"
                                                value="{{ old('nama_lengkap') }}" placeholder="">

                                                <div>
                                                    @error('nama_lengkap')
                                                        <div class="alert alert-warning" role="alert">
                                                            <strong>Peringatan!</strong>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label class="form-label text-dark">Jenis
                                                    Kelamin</label>
                                                <label for="Jenis_kelamin" class="form-label text-danger">*</label>
                                                <select class="form-control" name="Jenis_kelamin"
                                                    value="{{ old('Jenis_kelamin') }}">
                                                    <option selected>Pilih Jenis Kelamin</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>

                                                <div>
                                                    @error('Jenis_kelamin')
                                                        <div class="alert alert-warning" role="alert">
                                                            <strong>Peringatan!</strong>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="NomorInduk" class="form-label text-dark">N I S N</label>
                                                <label for="NomorInduk" class="form-label text-danger">*</label>
                                                <input type="text" name="NISN" class="form-control" id="NomorInduk"
                                                    value="{{ old('NISN') }}" placeholder="12345678">
                                                <small class="text-muted">Isi NISN dengan benar</small>
                                                <div>
                                                    @error('NISN')
                                                        <div class="alert alert-warning" role="alert">
                                                            <strong>Peringatan!</strong>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label for="address" class="form-label text-dark">Tempat Lahir</label>
                                                <label for="address" class="form-label text-danger">*</label>
                                                <input type="address" name="tempat_lahir_siswa" class="form-control"
                                                    id="address" value="{{ old('tempat_lahir_siswa') }}" placeholder
                                                    value>
                                                    <div>
                                                        @error('tempat_lahir_siswa')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="date" class="form-label text-dark">Tanggal Lahir</label>
                                                <label for="" class="form-label text-danger">*</label>
                                                <input type="date" name="tanggal_lahir_siswa" class="form-control"
                                                    id="date" value="{{ old('tanggal_lahir_siswa') }}" placeholder
                                                    value>
                                                    <div>
                                                        @error('tanggal_lahir_siswa')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-2">
                                            <div class="col-sm-4">
                                                <label class="agama text-dark">Agama</label>
                                                <label for="" class="form-label text-danger">*</label>
                                                <div>
                                                    <select name="agama_siswa" class="form-control">
                                                        <option selected>Agama</option>
                                                        <option value="islam">Islam</option>
                                                        <option value="protestan">Kristen Protestan</option>
                                                        <option value="katolik">Kristen Katolik</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="buddha">Buddha</option>
                                                        <option value="konghucu">Konghucu</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    @error('agama_siswa')
                                                        <div class="alert alert-warning" role="alert">
                                                            <strong>Peringatan!</strong>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="Sekolah_asal text-dark">Sekolah Asal</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="Sekolah_asal" class="form-control"
                                                    id="Sekolah_asal" value="{{ old('Sekolah_asal') }}" placeholder="">
                                                <div class="invalid-feedback">Isi Dengan benar</div>
                                                <div>
                                                    @error('Sekolah_asal')
                                                        <div class="alert alert-warning" role="alert">
                                                            <strong>Peringatan!</strong>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="lulus text-dark">Tahun Lulus</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="Tahun_lulus" class="form-control"
                                                    id="Tahun_lulus" value="{{ old('Tahun_lulus') }}"
                                                    placeholder="Cth. 2021">
                                                    <div>
                                                        @error('Tahun_lulus')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>


                                        <h6 align="center" class="m-0 font-weight-bold text-dark mb-4">
                                            <hr> Alamat tempat Tinggal
                                        </h6>
                                        <div class="row g-3 mt-2">

                                            <label class="Alamat">

                                            </label>
                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">Dusun</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="dusun" class="form-control" id="dusun"
                                                    value="{{ old('dusun') }}" placeholder>
                                                    <div>
                                                        @error('dusun')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">RT</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="Rt" class="form-control" id="rt"
                                                    value="{{ old('Rt') }}" placeholder="Cth. 008">
                                                    <div>
                                                        @error('Rt')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">RW</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="rw" class="form-control" id="rw"
                                                    value="{{ old('rw') }}" placeholder="Cth. 008">
                                                    <div>
                                                        @error('rw')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-2">
                                            <div class="col-sm-6">
                                                <label class="form-label text-dark">Kelurahan/Desa</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="kelurahan_desa" class="form-control"
                                                    id="kelurahan" value="{{ old('kelurahan_desa') }}" placeholder value>
                                                    <div>
                                                        @error('kelurahan_desa')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="form-label text-dark">Kode Pos</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="kode_pos" class="form-control"
                                                    id="kodepos" value="{{ old('kode_pos') }}"
                                                    placeholder="Cth. 12345">
                                                    <div>
                                                        @error('kode_pos')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-2">
                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">Kecamatan</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="kecamatan" class="form-control"
                                                    id="kecamatan" value="{{ old('kecamatan') }}" placeholder value>
                                                    <div>
                                                        @error('kecamatan')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">Kabupaten/Kota</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="kabupaten_kota" class="form-control"
                                                    id="kota" value="{{ old('kabupaten_kota') }}" placeholder value>
                                                    <div>
                                                        @error('kabupaten_kota')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">Provinsi</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="provinsi" class="form-control"
                                                    id="provinsi" value="{{ old('provinsi') }}" placeholder value>
                                                    <div>
                                                        @error('provinsi')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-2">
                                            <div class="col-sm-6">
                                                <label class="form-label text-dark">Nomor Hp</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="nomor_hp_siswa" class="form-control"
                                                    id="nohp" value="{{ old('nomor_hp_siswa') }}"
                                                    placeholder="Cth. 08xxxxxxxxxx">
                                                    <div>
                                                        @error('nomor_hp_siswa')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="email" class="form-label text-dark"> Email Siswa</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="email" name="email_siswa" class="form-control"
                                                    id="email" value="{{ old('email_siswa') }}"
                                                    placeholder="you@example.com">
                                                    <div>
                                                        @error('email_siswa')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>



                                        {{-- Data Ayah kandung --}}
                                        <h6 align="center" class="m-0 font-weight-bold text-dark mb-4">
                                            <hr> Data Ayah Kandung
                                        </h6>

                                        <div class="form-group">
                                            <label for="Namasiswa" class="form-label text-dark">Nama Ayah</label>
                                            <label for="Namasiswa" class="form-label text-danger">*</label>
                                            <input type="text" name="nama_ayah" class="form-control" id="Namasiswa"
                                                value="{{ old('nama_ayah') }}" placeholder="">

                                                <div>
                                                    @error('nama_ayah')
                                                        <div class="alert alert-warning" role="alert">
                                                            <strong>Peringatan!</strong>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label for="address" class="form-label text-dark">Tempat Lahir</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="address" name="tempat_lahir_ayah" class="form-control"
                                                    id="address" value="{{ old('tempat_lahir_ayah') }}" placeholder>
                                                    <div>
                                                        @error('tempat_lahir_ayah')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="date" class="form-label text-dark">Tanggal Lahir</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="date" name="tanggal_lahir_ayah" class="form-control"
                                                    id="date" value="{{ old('tanggal_lahir_ayah') }}" placeholder>
                                                    <div>
                                                        @error('tanggal_lahir_ayah')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-2">
                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">NIK Ayah</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="NIK_ayah" class="form-control"
                                                    id="NIK" value="{{ old('NIK_ayah') }}"
                                                    placeholder="Cth. 1xxxxxxxxxxx">
                                                    <div>
                                                        @error('NIK_ayah')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">Pekerjaan</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="pekerjaan_ayah" class="form-control"
                                                    id="Pekerjaan" value="{{ old('pekerjaan_ayah') }}" placeholder value>
                                                    <div>
                                                        @error('pekerjaan_ayah')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">Nomor HP</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="nomor_hp_ayah" class="form-control"
                                                    id="nohpayah" value="{{ old('nomor_hp_ayah') }}"
                                                    placeholder="Cth. 08xxxxxxxxxx">
                                                    <div>
                                                        @error('nomor_hp_ayah')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>

                                        {{-- Data Ibu kandung --}}
                                        <h6 align="center" class="m-0 font-weight-bold text-dark mb-4">
                                            <hr> Data Ibu Kandung
                                        </h6>

                                        <div class="form-group">
                                            <label for="Namasiswa" class="form-label text-dark">Nama Ibu</label>
                                            <label for="Namasiswa" class="form-label text-danger">*</label>
                                            <input type="text" name="nama_ibu" class="form-control" id="Namasiswa"
                                                value="{{ old('nama_ibu') }}" placeholder="">

                                            <div>
                                                @error('nama_ibu')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            {{-- <div class="form-group">
                                                <label for="name" class="form-label text-dark">Nama Ibu</label>
                                                <input type="text" name="nama_ibu" class="form-control"
                                                    id="address" value="{{ old('nama_ibu') }}" placeholder value>
                                                <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                                            </div> --}}
                                            <div class="col-sm-6">
                                                <label for="address" class="form-label text-dark">Tempat Lahir</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="address" name="tempat_lahir_ibu" class="form-control"
                                                    id="address" value="{{ old('tempat_lahir_ibu') }}" placeholder
                                                    value>
                                                <div>
                                                    @error('tempat_lahir_ibu')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="date" class="form-label text-dark">Tanggal Lahir</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="date" name="tanggal_lahir_ibu" class="form-control"
                                                    id="date" value="{{ old('tanggal_lahir_ibu') }}" placeholder
                                                    value>
                                                <div>
                                                    @error('tanggal_lahir_ibu')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-2">
                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">NIK Ibu</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="NIK_ibu" class="form-control" id="NIK"
                                                    value="{{ old('NIK_ibu') }}" placeholder="Cth. 1xxxxxxxxx">
                                                <div>
                                                    @error('NIK_ibu')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">Pekerjaan</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="pekerjaan_ibu" class="form-control"
                                                    id="Pekerjaan" value="{{ old('pekerjaan_ibu') }}" placeholder value>
                                                <div class="invalid-feedback">Isi Dengan benar</div>
                                                <div>
                                                    @error('pekerjaan_ibu')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label text-dark">Nomor HP</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <input type="text" name="nomor_hp_ibu" class="form-control"
                                                    id="nohpibu" value="{{ old('nomor_hp_ibu') }}"
                                                    placeholder="Cth. 08xxxxxxxxxx">
                                                <div class="invalid-feedback">Isi Dengan benar</div>
                                                <div>
                                                    @error('nomor_hp_ibu')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="row g-3">
                                                <h6 align="center">
                                                    <hr>Nilai Rata-Rata Mapel Kelompok A semester 1 - 5
                                                </h6>
                                                <div class="col-sm-4">
                                                    <label class="form-label">Pendidikan Agama</label>
                                                    <input type="text" name="p_agama" class="form-control" id="p_agama"
                                                        placeholder="Cth. 00.00">
                                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label">PPKn</label>
                                                    <input type="text" name="ppkn" class="form-control" id="ppkn"
                                                        placeholder="Cth. 00.00">
                                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label class="form-label">Bahasa Indonesia</label>
                                                    <input type="text" name="B_indo" class="form-control" id="b_indo"
                                                        placeholder="Cth. 00.00">
                                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                                </div>
                                            </div>

                                            <div class="row g-3">
                                                <div class="col-sm-3">
                                                    <label class="form-label">Matematika</label>
                                                    <input type="text" name="mtk" class="form-control" id="mtk"
                                                        placeholder="Cth. 00.00">
                                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label">Ilmu Pengetahuan Alam</label>
                                                    <input type="text" name="ipa" class="form-control" id="ipa"
                                                        placeholder="Cth. 00.00">
                                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <label class="form-label">Ilmu Pengetahuan Sosial</label>
                                                    <input type="text" name="ips" class="form-control" id="ips"
                                                        placeholder="Cth. 00.00">
                                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <label class="form-label">Bahasa Inggris</label>
                                                    <input type="text" name="basing" class="form-control" id="basing"
                                                        placeholder="Cth. 00.00">
                                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                                </div>
                                            </div> --}}



                                        {{-- upload file --}}

                                        {{-- <div class="row mb-3">
                                            <div class="col-md">
                                                <label for="formFile" class="form-label">Fotocopy Akta Kelahiran</label>

                                                <div class="mt-1 ">
                                                    <input class=" form-file" type="file" id="formFile" name="fcakta">
                                                </div>
                                            </div>


                                            @error('upload_panduan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div> --}}
                                        <div class="row g-3 mt-2">
                                            <div class="col-sm-4">
                                                <label for="form-label" for="personal-data" class="text-dark">Fotocopy
                                                    Akta
                                                    Kelahiran</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <div class="input-group ">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input " name="fcakta">
                                                    </div>
                                                </div>
                                                @error('fcakta')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>



                                            <div class="col-sm-4">
                                                <label for="form-label" for="personal-data" class="text-dark">Surat
                                                    Keterangan
                                                    Lulus
                                                    Asli</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <div class="input-group">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input " name="SKLasli">
                                                    </div>
                                                </div>
                                                @error('SKLasli')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="col-sm-4 mt-2">
                                                <label for="form-label" for="personal-data" class="text-dark">Fotocopy
                                                    STTB
                                                    legalisir
                                                    <small>(jika ada)</small></label>

                                                <div class="input-group">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input " name="fcSTTB">
                                                    </div>
                                                </div>
                                                @error('fcSTTB')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-2">
                                            <div class="col-sm-4">
                                                <label for="form-label" for="personal-data" class="text-dark">Fotocopy
                                                    Raport
                                                    Kelas<small>(Semester 1-5)</small></label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <div class="input-group">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input " name="fcRaport">
                                                    </div>
                                                </div>
                                                @error('fcRaport')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="col-sm-4">
                                                <label for="form-label" for="personal-data" class="text-dark">Surat
                                                    Keterangan
                                                    Bebas
                                                    Narkoba</label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>
                                                <div class="input-group">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input "
                                                            name="suratnarkoba">
                                                    </div>
                                                </div>
                                                @error('suratnarkoba')
                                                    <div class="alert alert-warning" role="alert">
                                                        <strong>Peringatan!</strong>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="col-sm-4">
                                                <label for="form-label" for="personal-data" class="text-dark">Pas Foto
                                                    Ukuran 3 x
                                                    4
                                                    <small>(dengan Latar Merah)</small></label>
                                                <label for="Namasiswa" class="form-label text-danger">*</label>

                                                <div class="input-group">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input " name="Foto">
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


                                        {{-- Jalur Afirmasi --}}

                                        <h6 align="center" class="m-0 font-weight-bold text-dark mb-4">
                                            <hr> BAGI JALUR AFIRMASI
                                        </h6>
                                        <div class="row g-3">

                                            <div class="col-sm-4">
                                                <label for="form-label" for="personal-data" class="text-dark">Fotocopy
                                                    Kartu
                                                    Indonesia
                                                    Pintar <small>(KIP)</small></label>
                                                <div class="input-group">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input " name="fcKIP">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-sm-4">
                                                <label for="form-label" for="personal-data" class="text-dark">Fotocopy
                                                    Kartu
                                                    Pelindung
                                                    Sosial <small>(KPS)</small></label>
                                                <div class="input-group">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input " name="fcKPS">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-sm-4">
                                                <label for="form-label" for="personal-data" class="text-dark">Fotocopy
                                                    Program
                                                    Keluarga
                                                    Harapan <small>(PKH)</small></label>
                                                <div class="input-group">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input " name="fcPKH">
                                                    </div>
                                                </div>

                                            </div>


                                        </div>

                                        {{-- Catatan Prestasi --}}

                                        <h6 align="center" class="m-0 font-weight-bold text-dark mb-4">
                                            <hr>CATATAN PRESTASI
                                        </h6>
                                        <div class="card-body">
                                            <div class="row g-3">

                                                <div class="col-sm-6">
                                                    <label class="form-label">Jenis Prestasi</label>
                                                    <input type="text" name="jenis_prestasi" class="form-control"
                                                        id="jenisprestasi" value="{{ old('jenis_prestasi') }}"
                                                        placeholder="Cth. OSN">
                                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="email" class="form-label">Tingkat</label>
                                                    <input type="text" name="tingkat" class="form-control"
                                                        id="tingkat" value="{{ old('tingkat') }}"
                                                        placeholder="Cth.Kabupaten">
                                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                                </div>

                                            </div>

                                            <div class="row g-3 mt-2">
                                                <div class="col-sm-4">
                                                    <label class="form-label">Nama Prestasi</label>
                                                    <input type="text" name="nama_prestasi" class="form-control"
                                                        id="nama_prestasi" value="{{ old('nama_prestasi') }}"
                                                        placeholder="Cth. Olimpiade Sains">
                                                    <div class="invalid-feedback">Isi Dengan benar</div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label for="email" class="form-label">Tahun</label>
                                                    <input type="text" name="tahun" class="form-control"
                                                        id="tahun" value="{{ old('tahun') }}"
                                                        placeholder="Cth. 2021">
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

                                            <div class="row g-3 mt-2">
                                                {{-- <div class="row g-3"> --}}
                                                <div class="col">
                                                    <label for="form-label" for="personal-data">Piagam Prestasi</label>
                                                    <small>(Jika Lebih Dari 1, Jadikan Satu PDF File)</small>
                                                    <div class="input-group">
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input "
                                                                name="piagam">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row-g-3 ">
                                            <div class="col-lg-2 mb-4">
                                                <button class="btn btn-lg text-light" type="submit"
                                                    style="background-color:rgb(255, 147, 163)">Daftar</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                        </div>


                    </div>

                </div>

        </div>
        </div>
        </div>

        </form>

        </div>
    @else
        <section class="mt-5">
            <div class="container-fluid">
                <div class="card card-body mt-5 p-4 shadow-sm mb-4 border border-bottom-warning">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800 ">Hallo {{ auth()->user()->name }} !!</h1>
                        </div>

                        <div class="col col-lg-6 mb-4 mb-lg-0">
                            {{-- <div class="card mb-3"  > --}}
                            <div class="row g-3">
                                <h5>Mohon Maaf {{ auth()->user()->name }}</h5>
                                @if (date('Y-m-d H:i:s') < $validasi->tanggal_awal)
                                    <h5>Pendaftaran Belum Dibuka</h5>
                                @else
                                    <h5>Pendaftaran Sudah Ditutup</h5>
                                @endif
                                {{-- <h5 align='center'>Pendaftaran akan dibuka pada {{$jadwal->zonasi}</h5> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    @endif

@endsection
