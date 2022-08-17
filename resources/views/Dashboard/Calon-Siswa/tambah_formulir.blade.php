@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
<form action="/formulir-pendaftaran-siswa" method="post" enctype="multipart/form-data">
  @csrf
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h1 align="center">Formulir Pendaftaran</h1>


            <div class="card-body">
              <div class="form-group">
                <label class="agama">Nomor Pendaftaran</label>
                <input type="text" name="Nomor_Pendaftaran" class="form-control" id="nodaftar" value="{{ old('Nomor_Pendaftaran')}}" placeholder value required>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Jalur Pendaftaran</label>
                <select class="form-select" name="Jalur_pendaftaran" id="exampleFormControlInput1" required>
                  <option selected>Pilih Jalur Pendaftaran</option>
                    <option value="Afirmasi">Prestasi</option>
                    <option value="Afirmasi">Afirmasi</option>
                    <option value="Zonasi">Zonasi</option>
                </select>
                <div class="invalid-feedback">Silahkan Pilih Jalur Pendaftaran Yang Benar</div>
              </div>

              <div class="form-group">
                <label for="Namasiswa" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" id="Namasiswa" value="{{ old('nama_lengkap')}}" placeholder value required>

                <div class="invalid-feedback">Silahkan Isi nama dengan benar</div>
              </div>

                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" name="Jenis_kelamin" id="exampleFormControlInput1" value="{{ old('Jenis_kelamin')}}" required>
                    <option selected>Pilih Jenis Kelamin</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                  </div>

                  <div class="col-sm-6">
                    <label for="NomorInduk" class="form-label">N I S N</label>
                    <input type="text" name="NISN" class="form-control" id="NomorInduk" value="{{ old('NISN')}}" placeholder value required>
                    <small class="text-muted">Isi NISN dengan benar</small>
                    <div class="invalid-feedback">Silahkan Isi NISN dengan benar</div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="address" class="form-label">Tempat Lahir</label>
                    <input type="address" name="tempat_lahir_siswa" class="form-control" id="address" value="{{ old('tempat_lahir_siswa')}}" placeholder value required>
                    <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                  </div>

                  <div class="col-sm-6">
                    <label for="date" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir_siswa" class="form-control" id="date" value="{{ old('tanggal_lahir_siswa')}}" placeholder value required>
                    <div class="invalid-feedback">Tanggal Lahir Dibutuhkan</div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-4">
                    <label class="agama">Agama</label>
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
                    <label class="Sekolah_asal">Sekolah Asal</label>
                    <input type="text" name="Sekolah_asal" class="form-control" id="Sekolah_asal" value="{{ old('Sekolah_asal')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="col-sm-4">
                    <label class="lulus">Tahun Lulus</label>
                    <input type="text" name="Tahun_lulus" class="form-control" id="Tahun_lulus" value="{{ old('Tahun_lulus')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>
                </div>


                <div class="row g-3">
                  <label class="Alamat"><hr> Alamat Tempat Tinggal</label>
                  <div class="col-sm-4">
                    <label class="form-label">Dusun</label>
                    <input type="text" name="dusun" class="form-control" id="dusun" value="{{ old('dusun')}}" placeholder value required>
                    <div class="invalid-feedback">Alamat dibutuhkan</div>
                  </div>

                  <div class="col-sm-4">
                    <label class="form-label">RT</label>
                    <input type="text" name="Rt" class="form-control" id="rt" value="{{ old('Rt')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="col-sm-4">
                    <label class="form-label">RW</label>
                    <input type="text" name="rw" class="form-control" id="rw" value="{{ old('rw')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label">Kelurahan/Desa</label>
                    <input type="text" name="kelurahan_desa" class="form-control" id="kelurahan" value="{{ old('kelurahan_desa')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label">Kode Pos</label>
                    <input type="text" name="kode_pos" class="form-control" id="kodepos" value="{{ old('kode_pos')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-4">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="{{ old('kecamatan')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="col-sm-4">
                    <label class="form-label">Kabupaten/Kota</label>
                    <input type="text" name="kabupaten_kota" class="form-control" id="kota" value="{{ old('kabupaten_kota')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="col-sm-4">
                    <label class="form-label">Provinsi</label>
                    <input type="text" name="provinsi" class="form-control" id="provinsi" value="{{ old('provinsi')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label">Nomor Hp</label>
                    <input type="text" name="nomor_hp_siswa" class="form-control" id="nohp" value="{{ old('nomor_hp_siswa')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="col-sm-6">
                    <label for="email" class="form-label"> Email Siswa</label>
                    <input type="email" name="email_siswa" class="form-control" id="email" value="{{ old('email_siswa')}}" placeholder="you@example.com">
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>
                </div>

                {{-- Data Ayah kandung --}}

                <div class="row g-3">
                  <h6 align="center"><hr> Data Ayah Kandung</h6>
                  <div class="form-group">
                    <label for="address" class="form-label">Nama Ayah</label>
                    <input type="address" name="nama_ayah" class="form-control" id="address" value="{{ old('nama_ayah')}}" placeholder>
                    <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                  </div>
                  <div class="col-sm-6">
                    <label for="address" class="form-label">Tempat Lahir</label>
                    <input type="address" name="tempat_lahir_ayah" class="form-control" id="address" value="{{ old('tempat_lahir_ayah')}}" placeholder>
                    <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                  </div>

                  <div class="col-sm-6">
                    <label for="date" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir_ayah" class="form-control" id="date" value="{{ old('tanggal_lahir_ayah')}}" placeholder>
                    <div class="invalid-feedback">Tanggal Lahir Dibutuhkan</div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-4">
                    <label class="form-label">NIK Ayah</label>
                    <input type="text" name="NIK_ayah" class="form-control" id="NIK" value="{{ old('NIK_ayah')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="col-sm-4">
                    <label class="form-label">Pekerjaan</label>
                    <input type="text" name="pekerjaan_ayah" class="form-control" id="Pekerjaan" value="{{ old('pekerjaan_ayah')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="col-sm-4">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" name="nomor_hp_ayah" class="form-control" id="nohpayah" value="{{ old('nomor_hp_ayah')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>
                </div>

                {{-- Data Ibu kandung --}}

                <div class="row g-3">
                  <h6 align="center"><hr> Data Ibu Kandung</h6>
                  <div class="form-group">
                    <label for="name" class="form-label">Nama Ibu</label>
                    <input type="text" name="nama_ibu" class="form-control" id="address" value="{{ old('nama_ibu')}}" placeholder value required>
                    <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                  </div>
                  <div class="col-sm-6">
                    <label for="address" class="form-label">Tempat Lahir</label>
                    <input type="address" name="tempat_lahir_ibu" class="form-control" id="address" value="{{ old('tempat_lahir_ibu')}}" placeholder value required>
                    <div class="invalid-feedback">Tempat Lahir Dibutuhkan</div>
                  </div>

                  <div class="col-sm-6">
                    <label for="date" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir_ibu" class="form-control" id="date" value="{{ old('tanggal_lahir_ibu')}}" placeholder value required>
                    <div class="invalid-feedback">Tanggal Lahir Dibutuhkan</div>
                  </div>
                </div>

                <div class="row g-3">
                  <div class="col-sm-4">
                    <label class="form-label">NIK Ibu</label>
                    <input type="text" name="NIK_ibu" class="form-control" id="NIK" value="{{ old('NIK_ibu')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="col-sm-4">
                    <label class="form-label">Pekerjaan</label>
                    <input type="text" name="pekerjaan_ibu" class="form-control" id="Pekerjaan" value="{{ old('pekerjaan_ibu')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="col-sm-4">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" name="nomor_hp_ibu" class="form-control" id="nohpibu" value="{{ old('nomor_hp_ibu')}}" placeholder value required>
                    <div class="invalid-feedback">Isi Dengan benar</div>
                  </div>

                  <div class="row g-3">
                    <h6 align="center"><hr>Nilai Rata-Rata Mapel Kelompok A semester 1 - 5</h6>
                    <div class="col-sm-4">
                      <label class="form-label">Pendidikan Agama</label>
                      <input type="text" name="p_agama" class="form-control" id="p_agama" placeholder value required>
                      <div class="invalid-feedback">Isi Dengan benar</div>
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label">PPKn</label>
                      <input type="text" name="ppkn" class="form-control" id="ppkn" placeholder value required>
                      <div class="invalid-feedback">Isi Dengan benar</div>
                    </div>

                    <div class="col-sm-4">
                      <label class="form-label">Bahasa Indonesia</label>
                      <input type="text" name="B_indo" class="form-control" id="b_indo" placeholder value required>
                      <div class="invalid-feedback">Isi Dengan benar</div>
                    </div>
                  </div>

                  <div class="row g-3">
                    <div class="col-sm-3">
                      <label class="form-label">Matematika</label>
                      <input type="text" name="mtk" class="form-control" id="mtk" placeholder value required>
                      <div class="invalid-feedback">Isi Dengan benar</div>
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label">Ilmu Pengetahuan Alam</label>
                      <input type="text" name="ipa" class="form-control" id="ipa" placeholder value required>
                      <div class="invalid-feedback">Isi Dengan benar</div>
                    </div>

                    <div class="col-sm-3">
                      <label class="form-label">Ilmu Pengetahuan Sosial</label>
                      <input type="text" name="ips" class="form-control" id="ips" placeholder value required>
                      <div class="invalid-feedback">Isi Dengan benar</div>
                    </div>

                    <div class="col-sm-3">
                      <label class="form-label">Bahasa Inggris</label>
                      <input type="text" name="basing" class="form-control" id="basing" placeholder value required>
                      <div class="invalid-feedback">Isi Dengan benar</div>
                    </div>
                  </div>

                  {{-- upload file --}}


                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="form-label" for="personal-data">Fotocopy Akta Kelahiran</label>
                      <div class="input-group">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" name="fcakta">
                        </div>
                      </div>
                    </div>



                    <div class="col-sm-6">
                      <label for="form-label" for="personal-data">Surat Keterangan Lulus Asli</label>
                      <div class="input-group">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" name="SKLasli">
                        </div>
                      </div>
                      @error('SKLasli')
                      <div class="alert alert-warning" role="alert">
                        <strong>Peringatan!</strong>
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="form-label" for="personal-data">Fotocopy STTB legalisir <small>(jika ada)</small></label>
                      <div class="input-group">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" name="fcSTTB">
                        </div>
                      </div>
                      @error('fcSTTB')
                      <div class="alert alert-warning" role="alert">
                        <strong>Peringatan!</strong>
                        {{$message}}
                      </div>
                      @enderror
                    </div>

                    <div class="col-sm-6">
                      <label for="form-label" for="personal-data">Fotocopy Raport Kelas<small>(Semester 1-5)</small></label>
                      <div class="input-group">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" name="fcRaport">
                        </div>
                      </div>
                      @error('fcRaport')
                      <div class="alert alert-warning" role="alert">
                        <strong>Peringatan!</strong>
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row g-3">

                    <div class="col-sm-6">
                      <label for="form-label" for="personal-data">Surat Keterangan Bebas Narkoba<small>(dari BNN)</small></label>
                      <div class="input-group">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" name="suratnarkoba">
                        </div>
                      </div>
                      @error('suratnarkoba')
                      <div class="alert alert-warning" role="alert">
                        <strong>Peringatan!</strong>
                        {{$message}}
                      </div>
                      @enderror
                    </div>

                    <div class="col-sm-6">
                      <label for="form-label" for="personal-data">Pas Foto Ukuran 3 x 4 <small>(dengan Latar Merah)</small></label>

                      <div class="input-group">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" name="Foto">
                        </div>
                      </div>
                      @error('Foto')
                      <div class="alert alert-warning" role="alert">
                        <strong>Peringatan!</strong>
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>




                  <div class="row g-3">
                    <h6><hr>Bagi Jalur Afirmasi</h6>
                    <div class="col-sm-4">
                      <label for="form-label" for="personal-data">Fotocopy Kartu Indonesia Pintar <small>(KIP)</small></label>
                      <div class="input-group">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" name="fcKIP">
                        </div>
                      </div>
                      @error('fcKIP')
                      <div class="alert alert-warning" role="alert">
                        <strong>Peringatan!</strong>
                        {{$message}}
                      </div>
                      @enderror
                    </div>

                    <div class="col-sm-4">
                      <label for="form-label" for="personal-data">Fotocopy Kartu Pelindung Sosial <small>(KPS)</small></label>
                      <div class="input-group">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" name="fcKPS">
                        </div>
                      </div>
                      @error('fcKPS')
                      <div class="alert alert-warning" role="alert">
                        <strong>Peringatan!</strong>
                        {{$message}}
                      </div>
                      @enderror
                    </div>

                    <div class="col-sm-4">
                      <label for="form-label" for="personal-data">Fotocopy Program Keluarga Harapan <small>(PKH)</small></label>
                      <div class="input-group">
                        <div class="form-file">
                          <input type="file" class="form-file-input form-control" name="fcPKH">
                        </div>
                      </div>
                      @error('fcPKH')
                      <div class="alert alert-warning" role="alert">
                        <strong>Peringatan!</strong>
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row g-3">

                  <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
</form>


@endsection