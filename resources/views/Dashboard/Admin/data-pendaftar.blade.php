@extends('Dashboard.Admin.Layout.index')
@section('container')
    <section class="p-4 mt-4">

        {{-- <hr> --}}
        <div class="card mt-5 p-4 shadow-sm">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-dark">DATA PENDAFTARAN</h5>
            </div>
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
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        {{-- <form action="/formulir-pendaftaran-siswa" method="POST">
                    @csrf --}}

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table  table-sm">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">No</th>
                                            <th class="text-center">Nomor Pendaftaran</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Jalur Pendaftaran</th>
                                            <th class="text-center">N I S N</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->where('Jalur_pendaftaran', 'Afirmasi') as $form)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $form->Nomor_Pendaftaran }}</td>
                                                <td class="text-center">{{ $form->nama_lengkap }}</td>
                                                <td class="text-center">{{ $form->Jalur_pendaftaran }}</td>
                                                <td class="text-center">{{ $form->NISN }}</td>

                                                <td class="text-center" style="width: 200px">
                                                    <div class="row">
                                                        <form class="delete-data-swift-allert-example" action="/data-pendaftar/delete/{{ $form->id }}"
                                                            method="POST">
                                                            @csrf
                                                            <a href="/data-pendaftar/show/{{ $form->id }}"
                                                                class="btn btn-outline-success btn-sm"><i class="fa fa-info"></i> Lihat</a>

                                                            <button class="btn btn-outline-danger btn-sm"><i
                                                                    class="fa fa-trash "></i> Hapus</button>
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">No</th>
                                            <th class="text-center">Nomor Pendaftaran</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Jalur Pendaftaran</th>
                                            <th class="text-center">N I S N</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->where('Jalur_pendaftaran', 'Prestasi') as $form)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $form->Nomor_Pendaftaran }}</td>
                                                <td class="text-center">{{ $form->nama_lengkap }}</td>
                                                <td class="text-center">{{ $form->Jalur_pendaftaran }}</td>
                                                <td class="text-center">{{ $form->NISN }}</td>

                                                <td class="text-center" style="width: 200px">
                                                    <div class="row">
                                                        <form class="delete-data-swift-allert-example" action="/data-pendaftar/delete/{{ $form->id }}"
                                                            method="POST">
                                                            @csrf
                                                            <a href="/data-pendaftar/show/{{ $form->id }}"
                                                                class="btn btn-success btn-sm"><i class="fa fa-info"></i> Lihat</a>

                                                            <button class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash "></i> Hapus</button>
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
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr class="text-dark">
                                            <th scope="col">No</th>
                                            <th class="text-center">Nomor Pendaftaran</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Jalur Pendaftaran</th>
                                            <th class="text-center">N I S N</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->where('Jalur_pendaftaran', 'Zonasi') as $form)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $form->Nomor_Pendaftaran }}</td>
                                            <td class="text-center">{{ $form->nama_lengkap }}</td>
                                            <td class="text-center">{{ $form->Jalur_pendaftaran }}</td>
                                            <td class="text-center">{{ $form->NISN }}</td>

                                            <td class="text-center" style="width: 200px">
                                                <div class="row">
                                                    <form class="delete-data-swift-allert-example" action="/data-pendaftar/delete/{{ $form->id }}"
                                                        method="POST">
                                                        @csrf
                                                        <a href="/data-pendaftar/show/{{ $form->id }}"
                                                            class="btn btn-success btn-sm"><i class="fa fa-info

                                                            "></i> Lihat</a>

                                                        <button class="btn btn-danger btn-sm"><i
                                                                class="fa fa-trash "></i> Hapus</button>
                                                    </form>
                                                </div>
                                            </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        @endsection
