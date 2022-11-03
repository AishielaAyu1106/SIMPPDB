@extends('Dashboard.Admin.Layout.index')
@section('container')
    <section style="background-color: #eee;" class="p-4 mt-4">
        <h3 align='center'>Data Pendaftaran Calon Siswa </h3>
        <hr>
        <div class="card ">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                        role="tab" aria-controls="home" aria-selected="true" >Afirmasi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                        role="tab" aria-controls="profile" aria-selected="false">Prestasi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                        role="tab" aria-controls="contact" aria-selected="false">Zonasi</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    {{-- <form action="/formulir-pendaftaran-siswa" method="POST">
                    @csrf --}}

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr class="text-dark">
                                        <th scope="col">No</th>
                                        <th scope="col">Nomor Pendaftaran</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Jalur Pendaftaran</th>
                                        <th scope="col">N I S N</th>
                                        <th width="150px" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data->where('Jalur_pendaftaran', 'Afirmasi') as $form)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td style="width: 500px">{{ $form->Nomor_Pendaftaran }}</td>
                                            <td style="width: 500px">{{ $form->nama_lengkap }}</td>
                                            <td style="width: 500px">{{ $form->Jalur_pendaftaran }}</td>
                                            <td style="width: 500px">{{ $form->NISN }}</td>
                                            {{-- <td style="width: 200px"></td> --}}
                                            {{-- <td style="width: 100px"><a href="/data-pendaftar/show/{{$form->id}}" class="btn btn-success">Lihat</a></td> --}}
                                            {{-- <td style="width: 100px"><a href="/edit-formulir-pendaftaran/{{$form->id}}" class="btn btn-primary">Edit</a></td> --}}
                                            <td style="width: 100px"><a href="/data-pendaftar/show/{{ $form->id }}"
                                                class="col btn btn-success"><i class="fa fa-eye"></i></a></td>
                                            <td style="width: 100px">
                                                <form class="delete-data-swift-allert-example"
                                                    action="/data-pendaftar/delete/{{ $form->id }}" method="POST">
                                                    {{-- @method('DELETE') --}}
                                                    @csrf
                                                    <button class="col btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>


                                                {{-- </div> --}}
                                                {{-- <a href="/data-pendaftar/delete/{{$form->id}}" class="btn btn-danger">Hapus</a> --}}
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- </form> --}}
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    {{-- <form action="/formulir-pendaftaran-siswa" method="POST">
                    @csrf --}}

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr  class="text-dark">
                                        <th scope="col">No</th>
                                        <th scope="col">Nomor Pendaftaran</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Jalur Pendaftaran</th>
                                        <th scope="col">N I S N</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data->where('Jalur_pendaftaran', 'Prestasi') as $form)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td style="width: 200px">{{ $form->Nomor_Pendaftaran }}</td>
                                            <td style="width: 500px">{{ $form->nama_lengkap }}</td>
                                            <td style="width: 500px">{{ $form->Jalur_pendaftaran }}</td>
                                            <td style="width: 2000px">{{ $form->NISN }}</td>
                                            <td style="width: 100px"><a href="/data-pendaftar/show/{{ $form->id }}"
                                                    class="btn btn-success"><i class="fa fa-eye"></i></a></td>
                                            {{-- <td style="width: 100px"><a href="/edit-formulir-pendaftaran/{{$form->id}}" class="btn btn-primary">Edit</a></td> --}}
                                            <form action="/data-pendaftar/delete/{{ $form->id }}" method="POST">
                                                @csrf
                                                <td style="width: 100px"><button class="btn btn-danger"><i
                                                            class="fa fa-trash"></i></button></td>
                                            </form>



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
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr  class="text-dark">
                                        <th scope="col">No</th>
                                        <th scope="col">Nomor Pendaftaran</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Jalur Pendaftaran</th>
                                        <th scope="col">N I S N</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data->where('Jalur_pendaftaran', 'Zonasi') as $form)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td style="width: 200px">{{ $form->Nomor_Pendaftaran }}</td>
                                            <td style="width: 500px">{{ $form->nama_lengkap }}</td>
                                            <td style="width: 500px">{{ $form->Jalur_pendaftaran }}</td>
                                            <td style="width: 500px">{{ $form->NISN }}</td>
                                            <td style="width: 100px"><a href="/data-pendaftar/show/{{ $form->id }}"
                                                    class="btn btn-success"><i class="fa fa-eye"></i></a></td>
                                            <td style="width: 100px">
                                                <form action="/data-pendaftar/delete/{{ $form->id }}" method="POST">
                                                    @csrf
                                                    <td style="width: 100px"><button class="btn btn-danger"><i
                                                                class="fa fa-trash"></i></button></td>
                                                </form>
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
