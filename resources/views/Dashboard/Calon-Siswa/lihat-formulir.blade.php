@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
<section style="background-color: #eee;">
    <div class="container py-5">
      {{-- <div class="row"> --}}
        {{-- <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div> --}}
      {{-- </div> --}}


        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{$lihat->nama_lengkap}}</h5>
                        <p class="text-muted mb-1">Jalur Pendaftaran : {{$lihat->Jalur_pendaftaran}}</p>
                        <p class="text-muted mb-4">N I S N : {{$lihat->NISN}}</p>
                    </div>
                </div>



                <div class="card mb-4 sm-lg-4">
                    <div class="card-body">
                        <p class="mb-4"><h6 class="text-primary font-italic me-1">Nilai Rata-Rata Semester 1 - 5</h6>
                        </p>
                        <div class="row">
                            <div class="col-sm-9">
                              <p class="mb-0">Pendidikan Agama</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{$lihat->p_agama}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                              <p class="mb-0">PPKN</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{$lihat->ppkn}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                              <p class="mb-0">Bahasa Indonesia</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{$lihat->B_indo}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                              <p class="mb-0">Matematika</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{$lihat->mtk}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                              <p class="mb-0">Ilmu Pengetahuan Alam</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{$lihat->ipa}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                              <p class="mb-0">Ilmu Pengetahuan Sosial</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{$lihat->ips}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-9">
                              <p class="mb-0">Bahasa Inggris</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{$lihat->basing}}</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="card mb-4 sm-lg-4">
                    <div class="card-body">
                        <p class="mb-4"><h6 class="text-primary font-italic me-1">Kelengkapan Berkas</h6>
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">Fotocopy Akta kelahiran :</p>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{asset('storage/app/public'. $lihat->fcakta)}}" class="btn btn-outline-success">Lihat Berkas</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">Surat Keterangan Lulus Asli :</p>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{asset('storage/app/public'. $lihat->SKLasli)}}" class="btn btn-outline-success">Lihat Berkas</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">Fotocopy STTB Legalisir :</p>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{asset('storage/app/public'. $lihat->fcSTTB)}}" class="btn btn-outline-success">Lihat Berkas</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">Fotocopy raport Semester 1-5 :</p>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{asset('storage/app/public'. $lihat->fcRaport)}}" class="btn btn-outline-success">Lihat Berkas</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">Surat Keterangan Bebas Narkoba :</p>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{asset('storage/app/public'. $lihat->suratnarkoba)}}" class="btn btn-outline-success">Lihat Berkas</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">Pas Foto Ukuran 3 x 4 :</p>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{asset('storage/app/public'. $lihat->Foto)}}" class="btn btn-outline-success">Lihat Berkas</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="card mb-4 sm-lg-4">
                    <div class="card-body">
                        <p class="mb-4"><h6 class="text-primary font-italic me-1">Bagi Jalur Afirmasi</h6>
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">Fotocopy Kartu Indonesia Pintar :</p>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{asset('storage/app/public'. $lihat->fcKIP)}}" class="btn btn-outline-success">Lihat Berkas</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">Fotocopy Kartu Pelindung Sosial :</p>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{asset('storage/app/public'. $lihat->fcKPS)}}" class="btn btn-outline-success">Lihat Berkas</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">Fotocopy Program Keluarga Harapan :</p>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{asset('storage/app/public'. $lihat->fcPKH)}}" class="btn btn-outline-success">Lihat Berkas</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>


        </div>





</-------------------------------------------------------------------------Nomor Pendaftaran-----------------------------------------------------------------------------------*/>

        <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-body">
                <p class="mb-4"><h6 class="text-primary font-italic me-1">Biodata Siswa</h6>
                </p>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Nomor Pendaftaran</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$lihat->Nomor_Pendaftaran}}</p>
                  </div>
                </div>
                <hr>
</--------------------------------------------------------------------Jalur Pendaftaran-----------------------------------------------------------------------------------*/>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Jalur Pendaftaran</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$lihat->Jalur_pendaftaran}}</p>
                  </div>
                </div>
                <hr>
</---------------------------------------------------------------------------Nama lengkap-----------------------------------------------------------------------------------*/>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Nama Lengkap</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$lihat->nama_lengkap}}</p>
                  </div>
                </div>
                <hr>
</------------------------------------------------------------------------Jenis Kelamin-----------------------------------------------------------------------------------*/>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Jenis Kelamin</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$lihat->Jenis_kelamin}}</p>
                  </div>
                </div>
                <hr>
</------------------------------------------------------------------------------------N I S N-----------------------------------------------------------------------------------*/>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">N I S N</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$lihat->NISN}}</p>
                  </div>
                </div>
                <hr>
</------------------------------------------------------------------------------Tempat Lahir-----------------------------------------------------------------------------------*/>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Tempat Lahir</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$lihat->tempat_lahir_siswa}}</p>
                    </div>
                </div>
                <hr>
</-------------------------------------------------------------------------------------Tanggal Lahir-----------------------------------------------------------------------------------*/>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Tanggal Lahir</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$lihat->tanggal_lahir_siswa}}</p>
                    </div>
                </div>
                <hr>
</-----------------------------------------------------------------------------Agama-----------------------------------------------------------------------------------*/>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Agama</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$lihat->agama_siswa}}</p>
                    </div>
                </div>
                <hr>
</-------------------------------------------------------------------------Asal Sekolah-----------------------------------------------------------------------------------*/>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Sekolah Asal</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$lihat->Sekolah_asal}}</p>
                    </div>
                </div>
                <hr>
</-------------------------------------------------------------------------Tahun Lulus-----------------------------------------------------------------------------------*/>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Tahun Lulus</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$lihat->Tahun_lulus}}</p>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Nomor Hp</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$lihat->nomor_hp_siswa}}</p>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$lihat->email_siswa}}</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <p class="mb-4"><h6 class="text-primary font-italic me-1">Alamat Tempat Tinggal</h6>
                        </p>
                        <div class="row">
                            <div class="col-sm-2">
                              <p class="mb-0">Dusun :</p>
                            </div>
                            <div class="col-sm-2">
                              <p class="text-muted mb-0">{{$lihat->dusun}}</p>
                            </div>

                            <div class="col-sm-2">
                                <p class="mb-0">RT :</p>
                            </div>
                              <div class="col-sm-2">
                                <p class="text-muted mb-0">{{$lihat->Rt}}</p>
                              </div>

                            <div class="col-sm-2">
                                <p class="mb-0">RW :</p>
                            </div>
                              <div class="col-sm-2">
                                <p class="text-muted mb-0">{{$lihat->rw}}</p>
                              </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Kelurahan/Desa :</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{$lihat->kelurahan_desa}}</p>
                            </div>

                            <div class="col-sm-3">
                                <p class="mb-0">Kecamatan :</p>
                            </div>
                              <div class="col-sm-3">
                                <p class="text-muted mb-0">{{$lihat->kecamatan}}</p>
                              </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Kabupaten/Kota :</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{$lihat->kabupaten_kota}}</p>
                            </div>

                            <div class="col-sm-3">
                                <p class="mb-0">Provinsi :</p>
                            </div>
                              <div class="col-sm-3">
                                <p class="text-muted mb-0">{{$lihat->provinsi}}</p>
                              </div>
                        </div>
                        <hr>

                    </div>
                </div>

            </div>

        </div>


            <div class="row">
              <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                  <div class="card-body">
                    <p class="mb-4"><h6 class="text-primary font-italic me-1">Data Ayah Kandung</h6>
                    </p>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Nama Ayah</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->nama_ayah}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Tempat Lahir</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->tempat_lahir_ayah}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Tanggal lahir</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->tanggal_lahir_ayah}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">NIK Ayah</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->NIK_ayah}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Pekerjaan</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->pekerjaan_ayah}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Nomor HP</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->nomor_hp_ayah}}</p>
                        </div>
                    </div>
                    <hr>

                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                  <div class="card-body">
                    <p class="mb-4"><h6 class="text-primary font-italic me-1">Data Ibu Kandung</h6>
                    </p>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Nama Ibu</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->nama_ibu}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Tempat Lahir</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->tempat_lahir_ibu}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Tanggal lahir</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->tanggal_lahir_ibu}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">NIK Ibu</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->NIK_ibu}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Pekerjaan</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->pekerjaan_ibu}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Nomor HP</p>
                        </div>
                        <div class="col-sm-5">
                          <p class="text-muted mb-0">{{$lihat->nomor_hp_ibu}}</p>
                        </div>
                    </div>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>


      </div>
    </div>
</section>
@endsection
