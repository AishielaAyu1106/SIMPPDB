@extends('Dashboard.Calon-Siswa.Layout2.index')

@section('container')
    {{-- @if ($edit->where('status','!=','Sedang diproses'))
        <section class="mt-5">
            <div class="container-fluid">
                <div class="card card-body mt-5 p-4 shadow-sm mb-4 border border-bottom-warning">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800 ">Hallo {{ auth()->user()->name }} !!</h1>
                        </div>

                        <div class="col col-lg-6 mb-4 mb-lg-0">

                            <div class="row g-3">
                                <h5>Mohon Maaf {{ auth()->user()->name }},</h5>
                                <hr>
                                @if ($edit->status)
                                    <h5>Data pendaftaran anda telah diverifikasi</h5>

                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    @else --}}
        <form action="/edit-formulir-pendaftaran/{{ $edit->id }}" method="post" enctype="multipart/form-data"
            class="update-data-swift-allert-example">
            @csrf
            <div class="container-fluid">
                <div class="card card-body mt-5 p-4 shadow-sm mb-4 border border-bottom-info">
                    <div class="card-body">
                        {{-- <div class="card"> --}}
                        <h3 align="center" class="mt-4">Edit Formulir Pendaftaran</h3>
                        <div class="row mb-3 mt-4">
                            <div class="col-md-6">
                                <div class="card card-body text-center">
                                    <h4>{{ $edit->Nomor_Pendaftaran }}</h4>
                                    <p class="mb-0"> <span class="badge text-dark"
                                            style="background-color:rgb(255, 147, 163)">Nomor
                                            Pendaftaran</span></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-body text-center">
                                    <h4>{{ $edit->Jalur_pendaftaran }}</h4>
                                    <p class="mb-0"> <span class="badge text-dark"
                                            style="background-color:rgb(255, 147, 163)">Jalur
                                            Pendaftaran
                                        </span> </p>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="card-body">
                                {{-- <div class="form-group">
                            <label class="agama">Nomor Pendaftaran</label>
                            <input type="text" name="Nomor_Pendaftaran" class="form-control" id="nodaftar"
                                value="{{ old('Nomor_Pendaftaran', $edit->Nomor_Pendaftaran) }}" placeholder>
                        </div> --}}

                                <div class="form-group">
                                    <label for="Namasiswa" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" id="Namasiswa"
                                        value="{{ old('nama_lengkap', $edit->nama_lengkap) }}" placeholder value>

                                    <div class="invalid-feedback">Silahkan Isi nama dengan benar</div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label text-dark">Jenis
                                            Kelamin</label>

                                        <select class="form-control" name="Jenis_kelamin"
                                            value="{{ old('Jenis_kelamin', $edit->Jenis_kelamin) }}">
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
                                            value="{{ old('tempat_lahir_siswa', $edit->tempat_lahir_siswa) }}" placeholder
                                            value>
                                        <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="date" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir_siswa" class="form-control" id="date"
                                            value="{{ old('tanggal_lahir_siswa', $edit->tanggal_lahir_siswa) }}" placeholder
                                            value>
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

                                <h6 align="center" class="m-0 font-weight-bold text-dark mb-4">
                                    <hr> Alamat tempat Tinggal
                                </h6>
                                <div class="row g-3 mt-2">
                                    <label class="Alamat">

                                    </label>
                                    <div class="col-sm-4 mt-2">
                                        <label class="form-label">Dusun</label>
                                        <input type="text" name="dusun" class="form-control" id="dusun"
                                            value="{{ old('dusun', $edit->dusun) }}" placeholder value>
                                        <div class="invalid-feedback">Alamat dibutuhkan</div>
                                    </div>

                                    <div class="col-sm-4 mt-2">
                                        <label class="form-label">RT</label>
                                        <input type="text" name="Rt" class="form-control" id="rt"
                                            value="{{ old('Rt', $edit->Rt) }}" placeholder value>
                                        <div class="invalid-feedback">Isi Dengan benar</div>
                                    </div>

                                    <div class="col-sm-4 mt-2">
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
                                            value="{{ old('email_siswa', $edit->email_siswa) }}"
                                            placeholder="you@example.com">
                                        <div class="invalid-feedback">Isi Dengan benar</div>
                                    </div>
                                </div>

                                {{-- Data Ayah kandung --}}
                                <h6 align="center" class="m-0 font-weight-bold text-dark mb-4">
                                    <hr> Data Ayah Kandung
                                </h6>

                                <div class="form-group">
                                    <label for="Namasiswa" class="form-label text-dark">Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" id="Namasiswa"
                                        value="{{ old('nama_ayah', $edit->nama_ayah) }}" placeholder="">

                                    <div class="invalid-feedback">Silahkan Isi nama dengan benar</div>
                                </div>
                                <div class="row g-3 mt-2">
                                    {{-- <div class="form-group">
                                    <label for="address" class="form-label">Nama Ayah</label>
                                    <input type="address" name="nama_ayah" class="form-control" id="address"
                                        value="{{ old('nama_ayah', $edit->nama_ayah) }}" placeholder>
                                    <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                                </div> --}}
                                    <div class="col-sm-6">
                                        <label for="address" class="form-label">Tempat Lahir</label>
                                        <input type="address" name="tempat_lahir_ayah" class="form-control"
                                            id="address"
                                            value="{{ old('tempat_lahir_ayah', $edit->tempat_lahir_ayah) }}" placeholder>
                                        <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="date" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir_ayah" class="form-control"
                                            id="date"
                                            value="{{ old('tanggal_lahir_ayah', $edit->tanggal_lahir_ayah) }}"
                                            placeholder>
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
                                <h6 align="center" class="m-0 font-weight-bold text-dark mb-4">
                                    <hr> Data Ibu Kandung
                                </h6>
                                <div class="form-group">
                                    <label for="Namasiswa" class="form-label text-dark">Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" id="Namasiswa"
                                        value="{{ old('nama_ibu', $edit->tempat_lahir_ibu) }}" placeholder="">

                                    <div class="invalid-feedback">Silahkan Isi nama dengan benar</div>
                                </div>
                                <div class="row g-3">


                                    <div class="col-sm-6">
                                        <label for="address" class="form-label">Tempat Lahir</label>
                                        <input type="address" name="tempat_lahir_ibu" class="form-control"
                                            id="address" value="{{ old('tempat_lahir_ibu', $edit->tempat_lahir_ibu) }}"
                                            placeholder value>
                                        <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="date" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir_ibu" class="form-control"
                                            id="date"
                                            value="{{ old('tanggal_lahir_ibu', $edit->tanggal_lahir_ibu) }}" placeholder
                                            value>
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


                                        {{-- upload file --}}
                                        <div class="row g-3">
                                            <div class="col-sm-4 mt-2">
                                                <label>Fotocopy Akta Kelahiran</label>
                                                <div class="">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="fcakta"
                                                                class="custom-file-input" id="inputGroupFile01"
                                                                value="{{ old('fcakta', $edit->fcakta) }}">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file</label>
                                                        </div>

                                                        @error('fcakta')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 mt-2">
                                                <label>Surat Keterangan Lulus Asli</label>
                                                <div class="">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="SKLasli"
                                                                class="custom-file-input" id="inputGroupFile01"
                                                                value="{{ old('SKLasli', $edit->SKLasli) }}">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file</label>
                                                        </div>

                                                        @error('SKLasli')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 mt-2">
                                                <label>Fotocopy STTB legalisir <small>(jika ada)</small></label>
                                                <div class="">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="fcSTTB"
                                                                class="custom-file-input" id="inputGroupFile01"
                                                                value="{{ old('fcSTTB', $edit->fcSTTB) }}">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file</label>
                                                        </div>

                                                        @error('fcSTTB')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-sm-4 mt-2">
                                            <label>Fotocopy Raport <small>(Semester 1-5)</small></label>
                                            <div class="">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="fcRaport" class="custom-file-input"
                                                            id="inputGroupFile01"
                                                            value="{{ old('suratnarkoba', $edit->fcRaport) }}">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>

                                                    @error('fcRaport')
                                                        <div class="alert alert-warning" role="alert">
                                                            <strong>Peringatan!</strong>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-4 mt-2">
                                            <label>Surat Keterangan Bebas Narkoba <small>(dari BNN)</small></label>
                                            <div class="">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="suratnarkoba"
                                                            class="custom-file-input" id="inputGroupFile01"
                                                            value="{{ old('suratnarkoba', $edit->suratnarboka) }}">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>

                                                    @error('suratnarkoba')
                                                        <div class="alert alert-warning" role="alert">
                                                            <strong>Peringatan!</strong>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-4 mt-2">
                                            <label>Pas Foto Ukuran 3 x 4 <small>(dengan latar merah)</small></label>
                                            <div class="">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="Foto" class="custom-file-input"
                                                            id="inputGroupFile01" value="{{ old('Foto', $edit->Foto) }}">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>

                                                    @error('Foto')
                                                        <div class="alert alert-warning" role="alert">
                                                            <strong>Peringatan!</strong>
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="card-body">
                                        <h6 align="center" class="m-0 font-weight-bold text-dark mb-4">
                                            <hr> Bagi Jalur Afirmasi
                                        </h6>

                                        <div class="row g-3">
                                            <div class="col-sm-4 mt-2">
                                                <label>Fotocopy Kartu Indonesia Pintar <small>(KIP)</small></label>
                                                <div class="">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="fcKIP"
                                                                class="custom-file-input" id="inputGroupFile01"
                                                                value="{{ old('fcKIP', $edit->fcKIP) }}">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file</label>
                                                        </div>

                                                        @error('fcKIP')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 mt-2">
                                                <label>Fotocopy Kartu Pelindung Sosial <small>(KPS)</small></label>
                                                <div class="">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="fcKPS"
                                                                class="custom-file-input" id="inputGroupFile01"
                                                                value="{{ old('fcPKH', $edit->fcPKH) }}">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file</label>
                                                        </div>

                                                        @error('fcKPS')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 mt-2">
                                                <label>Fotocopy Program Keluarga Harapan <small>(PKH)</small></label>
                                                <div class="">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="fcPKH"
                                                                class="custom-file-input" id="inputGroupFile01"
                                                                value="{{ old('fcPKH', $edit->fcPKH) }}">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file</label>
                                                        </div>

                                                        @error('fcPKHt')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- Catatan Prestasi --}}


                                    <div class="card-body">
                                        <h6 align="center" class="m-0 font-weight-bold text-dark mb-4">
                                            <hr>Catatan Prestasi
                                        </h6>
                                        <div class="row g-3">

                                            <div class="col-sm-6">
                                                <label class="form-label">Jenis Prestasi</label>
                                                <input type="text" name="jenis_prestasi" class="form-control"
                                                    id="jenisprestasi"
                                                    value="{{ old('jenis_prestasi', $edit->jenis_prestasi) }}"
                                                    placeholder="Cth. OSN">
                                                <div class="invalid-feedback">Isi Dengan benar</div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="email" class="form-label">Tingkat</label>
                                                <input type="text" name="tingkat" class="form-control" id="tingkat"
                                                    value="{{ old('tingkat', $edit->tingkat) }}"
                                                    placeholder="Cth.Kabupaten">
                                                <div class="invalid-feedback">Isi Dengan benar</div>
                                            </div>

                                        </div>

                                        <div class="row g-3 mt-2">
                                            <div class="col-sm-4">
                                                <label class="form-label">Nama Prestasi</label>
                                                <input type="text" name="nama_prestasi" class="form-control"
                                                    id="nama_prestasi"
                                                    value="{{ old('nama_prestasi', $edit->nama_prestasi) }}"
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
                                                    id="penyelenggara"
                                                    value="{{ old('penyelenggara', $edit->penyelenggara) }}"
                                                    placeholder="Cth. Kabupaten">
                                                <div class="invalid-feedback">Isi Dengan benar</div>
                                            </div>

                                        </div>

                                        <div class="row g-3">

                                            <div class="col-sm-4 mt-2">
                                                <label>Piagram Prestasi </label>

                                                <div>
                                                    <small>(Jika Lebih Dari 1, Jadikan Satu PDF File)</small>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="piagam"
                                                                class="custom-file-input" id="inputGroupFile01"
                                                                value="{{ 'piagam' }}">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file</label>
                                                        </div>

                                                        @error('piagam')
                                                            <div class="alert alert-warning" role="alert">
                                                                <strong>Peringatan!</strong>
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
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
    {{-- @endif --}}
@endsection
