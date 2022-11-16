@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    @if (date('Y-m-d H:i:s') > $validasi->tanggal_awal && date('Y-m-d H:i:s') < $validasi->tanggal_akhir)
        <h3 align='center' class="mb-4 mt-4">Formulir Pendaftaran </h3>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="card card-body text-center">
                    <p>Akan Terisi Setelah Melakukan pendaftaran {{$validasi->Nomor_Pendaftaran}}</p>
                    <p class="mb-0"> <span class="badge" style="background-color:rgb(255, 147, 163)">Nomor
                            Pendaftaran</span></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-body text-center">
                    <h4>{{ $validasi->Jalur_pendaftaran }}</h4>
                    <p class="mb-0"> <span class="badge" style="background-color:rgb(255, 147, 163)">Jalur Pendaftaran
                        </span> </p>
                </div>
            </div>
        </div>

        <div class="card card-body">

            <form action="/formulir-pendaftaran-siswa" method="post" enctype="multipart/form-data" class="submit-button-swift-allert-example">
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
                            <input type="text" name="nama_lengkap" class="form-control" id="Namasiswa"
                                value="{{ old('nama_lengkap') }}" placeholder="">

                            <div class="invalid-feedback">Silahkan Isi nama dengan benar</div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="exampleFormControlInput1" class="form-label text-dark">Jenis Kelamin</label>
                                <select class="form-select" name="Jenis_kelamin" id="exampleFormControlInput1"
                                    value="{{ old('Jenis_kelamin') }}">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label for="NomorInduk" class="form-label text-dark">N I S N</label>
                                <input type="text" name="NISN" class="form-control" id="NomorInduk"
                                    value="{{ old('NISN') }}" placeholder="12345678">
                                <small class="text-muted">Isi NISN dengan benar</small>
                                <div class="invalid-feedback">Silahkan Isi NISN dengan benar</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="address" class="form-label text-dark">Tempat Lahir</label>
                                <input type="address" name="tempat_lahir_siswa" class="form-control" id="address"
                                    value="{{ old('tempat_lahir_siswa') }}" placeholder value>
                                <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                            </div>

                            <div class="col-sm-6">
                                <label for="date" class="form-label text-dark">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir_siswa" class="form-control" id="date"
                                    value="{{ old('tanggal_lahir_siswa') }}" placeholder value>
                                <div class="invalid-feedback">Tanggal Lahir Dibutuhkan</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-4">
                                <label class="agama text-dark">Agama</label>
                                <div>
                                    <select name="agama_siswa" class="form-control">
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
                                <label class="Sekolah_asal text-dark">Sekolah Asal</label>
                                <input type="text" name="Sekolah_asal" class="form-control" id="Sekolah_asal"
                                    value="{{ old('Sekolah_asal') }}" placeholder="">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-4">
                                <label class="lulus text-dark">Tahun Lulus</label>
                                <input type="text" name="Tahun_lulus" class="form-control" id="Tahun_lulus"
                                    value="{{ old('Tahun_lulus') }}" placeholder="Cth. 2021">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>
                        </div>


                        <div class="row g-3">
                            <label class="Alamat">
                                <hr> Alamat Tempat Tinggal
                            </label>
                            <div class="col-sm-4">
                                <label class="form-label text-dark">Dusun</label>
                                <input type="text" name="dusun" class="form-control" id="dusun"
                                    value="{{ old('dusun') }}" placeholder>
                                <div class="invalid-feedback">Alamat dibutuhkan</div>
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label text-dark">RT</label>
                                <input type="text" name="Rt" class="form-control" id="rt"
                                    value="{{ old('Rt') }}" placeholder="Cth. 008">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label text-dark">RW</label>
                                <input type="text" name="rw" class="form-control" id="rw"
                                    value="{{ old('rw') }}" placeholder="Cth. 008">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label text-dark">Kelurahan/Desa</label>
                                <input type="text" name="kelurahan_desa" class="form-control" id="kelurahan"
                                    value="{{ old('kelurahan_desa') }}" placeholder value>
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label text-dark">Kode Pos</label>
                                <input type="text" name="kode_pos" class="form-control" id="kodepos"
                                    value="{{ old('kode_pos') }}" placeholder="Cth. 12345">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-4">
                                <label class="form-label text-dark">Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" id="kecamatan"
                                    value="{{ old('kecamatan') }}" placeholder value>
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label text-dark">Kabupaten/Kota</label>
                                <input type="text" name="kabupaten_kota" class="form-control" id="kota"
                                    value="{{ old('kabupaten_kota') }}" placeholder value>
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label text-dark">Provinsi</label>
                                <input type="text" name="provinsi" class="form-control" id="provinsi"
                                    value="{{ old('provinsi') }}" placeholder value>
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label text-dark">Nomor Hp</label>
                                <input type="text" name="nomor_hp_siswa" class="form-control" id="nohp"
                                    value="{{ old('nomor_hp_siswa') }}" placeholder="123456789012">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-6">
                                <label for="email" class="form-label text-dark"> Email Siswa</label>
                                <input type="email" name="email_siswa" class="form-control" id="email"
                                    value="{{ old('email_siswa') }}" placeholder="you@example.com">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>
                        </div>

                        {{-- Data Ayah kandung --}}

                        <div class="row g-3">
                            <h6 align="center">
                                <hr> Data Ayah Kandung
                            </h6>
                            <div class="form-group">
                                <label for="address" class="form-label text-dark">Nama Ayah</label>
                                <input type="address" name="nama_ayah" class="form-control" id="address"
                                    value="{{ old('nama_ayah') }}" placeholder>
                                <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label text-dark">Tempat Lahir</label>
                                <input type="address" name="tempat_lahir_ayah" class="form-control" id="address"
                                    value="{{ old('tempat_lahir_ayah') }}" placeholder>
                                <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                            </div>

                            <div class="col-sm-6">
                                <label for="date" class="form-label text-dark">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir_ayah" class="form-control" id="date"
                                    value="{{ old('tanggal_lahir_ayah') }}" placeholder>
                                <div class="invalid-feedback">Tanggal Lahir Dibutuhkan</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-4">
                                <label class="form-label text-dark">NIK Ayah</label>
                                <input type="text" name="NIK_ayah" class="form-control" id="NIK"
                                    value="{{ old('NIK_ayah') }}" placeholder="Cth. 1234567890123456">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label text-dark">Pekerjaan</label>
                                <input type="text" name="pekerjaan_ayah" class="form-control" id="Pekerjaan"
                                    value="{{ old('pekerjaan_ayah') }}" placeholder value>
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label text-dark">Nomor HP</label>
                                <input type="text" name="nomor_hp_ayah" class="form-control" id="nohpayah"
                                    value="{{ old('nomor_hp_ayah') }}" placeholder="Cth. 123456789012">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>
                        </div>

                        {{-- Data Ibu kandung --}}

                        <div class="row g-3">
                            <h6 align="center">
                                <hr> Data Ibu Kandung
                            </h6>
                            <div class="form-group">
                                <label for="name" class="form-label text-dark">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" id="address"
                                    value="{{ old('nama_ibu') }}" placeholder value>
                                <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label text-dark">Tempat Lahir</label>
                                <input type="address" name="tempat_lahir_ibu" class="form-control" id="address"
                                    value="{{ old('tempat_lahir_ibu') }}" placeholder value>
                                <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                            </div>

                            <div class="col-sm-6">
                                <label for="date" class="form-label text-dark">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir_ibu" class="form-control" id="date"
                                    value="{{ old('tanggal_lahir_ibu') }}" placeholder value>
                                <div class="invalid-feedback">Tanggal Lahir Dibutuhkan</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-4">
                                <label class="form-label text-dark">NIK Ibu</label>
                                <input type="text" name="NIK_ibu" class="form-control" id="NIK"
                                    value="{{ old('NIK_ibu') }}" placeholder="Cth. 1234567890123456">
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label text-dark">Pekerjaan</label>
                                <input type="text" name="pekerjaan_ibu" class="form-control" id="Pekerjaan"
                                    value="{{ old('pekerjaan_ibu') }}" placeholder value>
                                <div class="invalid-feedback">Isi Dengan benar</div>
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label text-dark">Nomor HP</label>
                                <input type="text" name="nomor_hp_ibu" class="form-control" id="nohpibu"
                                    value="{{ old('nomor_hp_ibu') }}" placeholder="Cth. 123456789012">
                                <div class="invalid-feedback">Isi Dengan benar</div>
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


                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="form-label" for="personal-data" class="text-dark">Fotocopy Akta
                                        Kelahiran</label>
                                    <div class="input-group ">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcakta">
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6">
                                    <label for="form-label" for="personal-data" class="text-dark">Surat Keterangan
                                        Lulus
                                        Asli</label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="SKLasli">
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
                                    <label for="form-label" for="personal-data" class="text-dark">Fotocopy STTB
                                        legalisir
                                        <small>(jika ada)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcSTTB">
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
                                    <label for="form-label" for="personal-data" class="text-dark">Fotocopy Raport
                                        Kelas<small>(Semester 1-5)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcRaport">
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
                                    <label for="form-label" for="personal-data" class="text-dark">Surat Keterangan
                                        Bebas
                                        Narkoba<small>(dari BNN)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control"
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

                                <div class="col-sm-6">
                                    <label for="form-label" for="personal-data" class="text-dark">Pas Foto Ukuran 3 x
                                        4
                                        <small>(dengan Latar Merah)</small></label>

                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="Foto">
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



                            {{-- @if ($validasi->Jalur_pendaftaran == 'afirmasi') --}}
                            <div class="row g-3">
                                <h6>
                                    <hr>Bagi Jalur Afirmasi
                                </h6>
                                <div class="col-sm-4">
                                    <label for="form-label" for="personal-data" class="text-dark">Fotocopy Kartu
                                        Indonesia
                                        Pintar <small>(KIP)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcKIP">
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
                                    <label for="form-label" for="personal-data" class="text-dark">Fotocopy Kartu
                                        Pelindung
                                        Sosial <small>(KPS)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcKPS">
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
                                    <label for="form-label" for="personal-data" class="text-dark">Fotocopy Program
                                        Keluarga
                                        Harapan <small>(PKH)</small></label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control" name="fcPKH">
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
                            {{-- @else
                            @endif --}}

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
                        </div>


                        <div class=" text-end">
                            <hr class="mb-4">
                            <button class="btn btn-lg btn-block text-light btn-md" type="submit"
                                style="background-color:rgb(255, 147, 163)">Daftar</button>
                        </div>

                    </div>
                </div>
        </div>
        </div>
        </div>
        </form>
        </div>
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
                                @if (date('Y-m-d H:i:s') < $validasi->tanggal_awal)

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
@endsection
