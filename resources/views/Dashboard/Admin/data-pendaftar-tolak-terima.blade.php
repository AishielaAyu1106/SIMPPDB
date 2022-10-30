@extends('Dashboard.Admin.Layout.index')

@section('container')
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ $lihatdata->nama_lengkap }}</h5>
                            <p class="text-muted mb-1">Jalur Pendaftaran : {{ $lihatdata->Jalur_pendaftaran }}</p>
                            <p class="text-muted mb-4">N I S N : {{ $lihatdata->NISN }}</p>
                            @if ($lihatdata->status == 'Terima berkas')
                                <span class="badge text-black badge-primary">Diterima</span>
                            @elseif ($lihatdata->status == 'Tolak Berkas')
                                <span class="badge text-black badge-danger">Ditolak</span>
                            @elseif ($lihatdata->status == 'Sedang diproses')
                                <div class="row mb-4">
                                    <div class="col-sm-6">
                                        <form action="{{ url('status-berkas', request()->route()->parameters) }}"
                                            method="post">
                                            @csrf
                                            <input name="status" type="hidden" value="Terima berkas">
                                            <button type="submit" class="btn btn-outline-success">Terima
                                                Berkas</button>
                                        </form>
                                    </div>


                                    <div class="col-sm-6">
                                        <form action="{{ url('status-berkas', request()->route()->parameters) }}"
                                            method="post">
                                            @method('POST')
                                            @csrf
                                            <input name="status" type="hidden" value="Tolak Berkas">
                                            <button type="submit" class="btn btn-outline-danger">Tolak
                                                Berkas</button>
                                        </form>
                                    </div>
                                



                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tolak Berkas</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>

                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Catatan
                                                                Perbaikan:</label>
                                                            <textarea class="form-control" id="message-text"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                {{-- <div class="modal-footer">
                                                <form action="{{url('status-berkas',request()->route()->parameters)}}" method="post">
                                                    @csrf
                                                    <input name="status" type="hidden" value="Tolak Berkas">
                                                    <input name="status" type="hidden" value="Tolak Berkas">
                                                    <button type="submit" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                                </form>
                                            </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>



                    <div class="card mb-4 sm-lg-4">
                        <div class="card-body">
                            <p class="mb-4">
                            <h6 class="text-primary font-italic me-1">Catatan Prestasi</h6>
                            </p>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="mb-0">Jenis Prestasi</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">{{ $lihatdata->jenis_prestasi }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="mb-0">Tingkat</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">{{ $lihatdata->tingkat }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="mb-0">Nama Prestasi</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">{{ $lihatdata->nama_prestasi }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="mb-0">Tahun</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">{{ $lihatdata->tahun }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="mb-0">Penyelenggara</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">{{ $lihatdata->penyelenggara }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Piagam Prestasi :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ asset('storage/' . $lihatdata->piagam) }}"
                                        class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>


                        </div>
                    </div>

                    <div class="card mb-4 sm-lg-4">
                        <div class="card-body">
                            <p class="mb-4">
                            <h6 class="text-primary font-italic me-1">Kelengkapan Berkas</h6>
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Fotocopy Akta kelahiran :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ asset('storage/' . $lihatdata->fcakta) }}"
                                        class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Surat Keterangan Lulus Asli :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ asset('storage/' . $lihatdata->SKLasli) }}"
                                        class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Fotocopy STTB Legalisir :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ asset('storage/' . $lihatdata->fcSTTB) }}"
                                        class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Fotocopy raport Semester 1-5 :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ asset('storage/' . $lihatdata->fcRaport) }}"
                                        class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Surat Keterangan Bebas Narkoba :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ asset('storage/' . $lihatdata->suratnarkoba) }}"
                                        class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Pas Foto Ukuran 3 x 4 :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ asset('storage/' . $lihatdata->Foto) }}"
                                        class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="card mb-4 sm-lg-4">
                        <div class="card-body">
                            <p class="mb-4">
                            <h6 class="text-primary font-italic me-1">Bagi Jalur Afirmasi</h6>
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Fotocopy Kartu Indonesia Pintar :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ asset('storage/' . $lihatdata->fcKIP) }}"
                                        class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Fotocopy Kartu Pelindung Sosial :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ asset('storage/' . $lihatdata->fcKPS) }}"
                                        class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Fotocopy Program Keluarga Harapan :</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ asset('storage/' . $lihatdata->fcPKH) }}"
                                        class="btn btn-outline-success">Lihat Berkas</a>
                                </div>
                            </div>
                            <hr>

                        </div>
                    </div>


                </div>


                <div class="col-lg-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <p class="mb-4">
                            <h6 class="text-primary font-italic me-1">Biodata Siswa</h6>
                            </p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nomor Pendaftaran</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->Nomor_Pendaftaran }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jalur Pendaftaran </p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->Jalur_pendaftaran }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama Lengkap</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->nama_lengkap }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->Jenis_kelamin }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">N I S N</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->NISN }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tempat Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->tempat_lahir_siswa }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tanggal Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->tanggal_lahir_siswa }}</p>
                                </div>
                            </div>
                            <hr>
                            </-----------------------------------------------------------------------------Agama-----------------------------------------------------------------------------------* />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Agama</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->agama_siswa }}</p>
                                </div>
                            </div>
                            <hr>
                            </-------------------------------------------------------------------------Asal
                                Sekolah-----------------------------------------------------------------------------------* />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Sekolah Asal</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->Sekolah_asal }}</p>
                                </div>
                            </div>
                            <hr>
                            </-------------------------------------------------------------------------Tahun
                                Lulus-----------------------------------------------------------------------------------* />
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tahun Lulus</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->Tahun_lulus }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nomor Hp</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->nomor_hp_siswa }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $lihatdata->email_siswa }}</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3 ">
                                <div class="card-body">
                                    <p class="mb-4">
                                    <h6 class="text-primary font-italic me-1">Alamat Tempat Tinggal</h6>
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <p class="mb-0">Dusun :</p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="text-muted mb-0">{{ $lihatdata->dusun }}</p>
                                        </div>

                                        <div class="col-sm-2">
                                            <p class="mb-0">RT :</p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="text-muted mb-0">{{ $lihatdata->Rt }}</p>
                                        </div>

                                        <div class="col-sm-2">
                                            <p class="mb-0">RW :</p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="text-muted mb-0">{{ $lihatdata->rw }}</p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Kelurahan/Desa :</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="text-muted mb-0">{{ $lihatdata->kelurahan_desa }}</p>
                                        </div>

                                        <div class="col-sm-3">
                                            <p class="mb-0">Kecamatan :</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="text-muted mb-0">{{ $lihatdata->kecamatan }}</p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Kabupaten/Kota :</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="text-muted mb-0">{{ $lihatdata->kabupaten_kota }}</p>
                                        </div>

                                        <div class="col-sm-3">
                                            <p class="mb-0">Provinsi :</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="text-muted mb-0">{{ $lihatdata->provinsi }}</p>
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
                                    <p class="mb-4">
                                    <h6 class="text-primary font-italic me-1">Data Ayah Kandung</h6>
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Nama Ayah</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->nama_ayah }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Tempat Lahir</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->tempat_lahir_ayah }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Tanggal lahir</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->tanggal_lahir_ayah }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">NIK Ayah</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->NIK_ayah }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Pekerjaan</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->pekerjaan_ayah }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Nomor HP</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->nomor_hp_ayah }}</p>
                                        </div>
                                    </div>
                                    <hr>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 ">
                                <div class="card-body">
                                    <p class="mb-4">
                                    <h6 class="text-primary font-italic me-1">Data Ibu Kandung</h6>
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Nama Ibu</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->nama_ibu }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Tempat Lahir</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->tempat_lahir_ibu }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Tanggal lahir</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->tanggal_lahir_ibu }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">NIK Ibu</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->NIK_ibu }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Pekerjaan</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->pekerjaan_ibu }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Nomor HP</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p class="text-muted mb-0">{{ $lihatdata->nomor_hp_ibu }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <p class="mb-4">
                                        <h6 class="text-primary font-italic me-1">Rekap Nilai Semester 1-5</h6>
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="mb-0">Matematika :</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="text-muted mb-0">{{ $lihatdata->rekap->mtk ?? 0 }}</p>
                                            </div>

                                            <div class="col-sm-4">
                                                <p class="mb-0">Ilmu Pengetahuan Alam :</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="text-muted mb-0">{{ $lihatdata->rekap->ipa ?? 0 }}</p>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Ilmu Pengetahuan Sosial :</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="text-muted mb-0">{{ $lihatdata->rekap->ips ?? 0 }}</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <p class="mb-0">Bahasa Inggris :</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <p class="text-muted mb-0">{{ $lihatdata->rekap->basing ?? 0 }}</p>
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
        </div>
    </section>
    @push('scripts')
        <script>
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('' + recipient)
                modal.find('.modal-body input').val(recipient)
            })
        </script>
    @endpush
@endsection
