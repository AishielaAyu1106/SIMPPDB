@extends('Dashboard.Admin.Layout2.index')
@section('container')
<section class="p-4">
    <div class="card card-body mt-5 p-4 shadow-sm">
        <div class="card-body">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                {{-- <div class=""> --}}
                    <h3 class=" mb-2 m-0 font-weight-bold text-dark">Data Pendaftaran</h3>
                <a href="/export-data-pendaftaran" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Export Data Pendaftaran</a>
                {{-- <a href="/cetak-data-pendaftaran" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Cetak Data Pendaftaran</a> --}}
            </div>
            {{-- <h3 class=" mb-2 m-0 font-weight-bold text-dark">Data Pendaftaran</h3>
            <a href="/cetak-data-pendaftaran" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Cetak Data Pendaftaran</a> --}}
            <hr>
            <div class="card-body ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Afirmasi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Prestasi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Zonasi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="verifikasi-tab" data-bs-toggle="tab" data-bs-target="#verifikasi"
                            type="button" role="tab" aria-controls="verifikasi" aria-selected="false">Terverifikasi</button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table  table-sm">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">No</th>
                                            <th class="text-center">Nomor Pendaftaran</th>
                                            <th >Nama Lengkap</th>
                                            <th >Jalur Pendaftaran</th>
                                            <th >N I S N</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->where('Jalur_pendaftaran', 'Afirmasi')->where('status','Sedang diproses') as $form)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $form->Nomor_Pendaftaran }}</td>
                                                <td >{{ $form->nama_lengkap }}</td>
                                                <td >{{ $form->Jalur_pendaftaran }}</td>
                                                <td >{{ $form->NISN }}</td>
                                                <td class="text-center" style="width: 150px">
                                                    <div class="row ">
                                                        <form class="delete-data-swift-allert-example"
                                                            action="/data-pendaftar/delete/{{ $form->id }}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="/data-pendaftar/show/{{ $form->id }}" class="btn btn-outline-success btn-icon-split btn-sm">
                                                                <span class="text"><i class="fas fa-info"></i> Lihat</span>
                                                            </a>

                                                            <button href="" class="btn btn-outline-danger btn-icon-split btn-sm">
                                                                <span class="text"><i class="fas fa-trash"></i> Hapus</span>
                                                            </button>
                                                            {{-- <a href="{{ route('kuota-kelas.edit', $item->id) }}"
                                                                class="col btn btn-outline-warning btn-sm"><i class="fa fa-pen"></i> Edit</a> --}}


                                                        </form>

                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>

                    {{-- PRESTASI --}}
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">No</th>
                                            <th class="text-center">Nomor Pendaftaran</th>
                                            <th >Nama Lengkap</th>
                                            <th >Jalur Pendaftaran</th>
                                            <th >N I S N</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->where('Jalur_pendaftaran', 'Prestasi')->where('status',  'Sedang diproses') as $form)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $form->Nomor_Pendaftaran }}</td>
                                                <td >{{ $form->nama_lengkap }}</td>
                                                <td >{{ $form->Jalur_pendaftaran }}</td>
                                                <td >{{ $form->NISN }}</td>
                                                <td class="text-center" style="width: 150px">
                                                    <div class="row ">
                                                        <form class="delete-data-swift-allert-example"
                                                            action="/data-pendaftar/delete/{{ $form->id }}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="/data-pendaftar/show/{{ $form->id }}" class="btn btn-outline-success btn-icon-split btn-sm">
                                                                <span class="text"><i class="fas fa-info"></i> Lihat</span>
                                                            </a>

                                                            <button href="" class="btn btn-outline-danger btn-icon-split btn-sm">
                                                                <span class="text"><i class="fas fa-trash"></i> Hapus</span>
                                                            </button>
                                                            {{-- <a href="{{ route('kuota-kelas.edit', $item->id) }}"
                                                                class="col btn btn-outline-warning btn-sm"><i class="fa fa-pen"></i> Edit</a> --}}


                                                        </form>

                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- ZONASI --}}
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">No</th>
                                            <th class="text-center">Nomor Pendaftaran</th>
                                            <th >Nama Lengkap</th>
                                            <th >Jalur Pendaftaran</th>
                                            <th >N I S N</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->where('Jalur_pendaftaran', 'Zonasi')->where('status', 'Sedang diproses') as $form)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $form->Nomor_Pendaftaran }}</td>
                                                <td >{{ $form->nama_lengkap }}</td>
                                                <td >{{ $form->Jalur_pendaftaran }}</td>
                                                <td >{{ $form->NISN }}</td>
                                                <td class="text-center" style="width: 150px">
                                                    <div class="row ">
                                                        <form class="delete-data-swift-allert-example"
                                                            action="/data-pendaftar/delete/{{ $form->id }}" method="post">
                                                            {{-- @method('DELETE') --}}
                                                            @csrf
                                                            <a href="/data-pendaftar/show/{{ $form->id }}" class="btn btn-outline-success btn-icon-split btn-sm">
                                                                <span class="text"><i class="fas fa-info"></i> Lihat</span>
                                                            </a>

                                                            <button href="" class="btn btn-outline-danger btn-icon-split btn-sm">
                                                                <span class="text"><i class="fas fa-trash"></i> Hapus</span>
                                                            </button>
                                                            {{-- <a href="{{ route('kuota-kelas.edit', $item->id) }}"
                                                                class="col btn btn-outline-warning btn-sm"><i class="fa fa-pen"></i> Edit</a> --}}


                                                        </form>

                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                        {{-- TERVERIFIKASI --}}
                        <div class="tab-pane fade" id="verifikasi" role="tabpanel" aria-labelledby="verifikasi">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr class="text-dark">
                                                <th scope="col">No</th>
                                                <th class="text-center">Nomor Pendaftaran</th>
                                                <th >Nama Lengkap</th>
                                                <th >Jalur Pendaftaran</th>
                                                <th >N I S N</th>
                                                <th >Status</th>
                                                <th >Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($verifikasi as $form)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $form->Nomor_Pendaftaran }}</td>
                                                    <td >{{ $form->nama_lengkap }}</td>
                                                    <td >{{ $form->Jalur_pendaftaran }}</td>
                                                    <td >{{ $form->NISN }}</td>
                                                    <td >{{ $form->status }}</td>
                                                    <td class="text-center" style="width: 100px">
                                                        <div class="row ">
                                                            <form class="delete-data-swift-allert-example"
                                                                action="/data-pendaftar/delete/{{ $form->id }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                {{-- <a href="/data-pendaftar/show/{{ $form->id }}" class="btn btn-outline-success btn-icon-split btn-sm">
                                                                    <span class="text"><i class="fas fa-info"></i> Lihat</span>
                                                                </a> --}}

                                                                <button href="" class="btn btn-outline-danger btn-icon-split btn-sm">
                                                                    <span class="text"><i class="fas fa-trash"></i> Hapus</span>
                                                                </button>



                                                            </form>

                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        @endsection
