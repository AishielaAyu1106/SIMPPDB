@extends('Dashboard.Admin.Layout.index')
@section('container')
    <section class="p-4 mt-4">

        {{-- <hr class="mt-0"> --}}
        <div class="card card-body mt-5 p-4 shadow-sm">
            <div class="card-body">
                <h3 class=" mb-4">Pengumuman</h3>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Diterima</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Ditolak</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        {{-- <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Zonasi</button> --}}
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        {{-- <form action="/pengumuman-admin-diterima" method="POST">
                @csrf --}}

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jalur Pendaftaran</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengumumanDiterima as $form)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td style="width: 200px">{{ $form->nama_lengkap }}</td>
                                                <td style="width: 500px">{{ $form->Jalur_pendaftaran }}</td>
                                                <td style="width: 500px">{{ $form->kelass->kuota_kelass->Nama_Kelas}}</td>
                                                <td style="width: 500px">{{ $form->form->status }}</td>
                                                {{-- <td style="width: 500px" >{{ $form->NISN}}</td> --}}
                                                <td class="text-center" style="width: 200px">
                                                    <div class="row">
                                                        <form action="/pengumuman-delete/{{ $form->id }}" method="POST"
                                                            class="delete-data-swift-allert-example">
                                                            @method('post')
                                                            @csrf
                                                            <a href="/data-pendaftar/show/{{ $form->id }}"
                                                                class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                                            <button class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash"></i></button>
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        {{-- <form action="/pengumuman-admin-ditolak" method="POST">
                @csrf --}}

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jalur Pendaftaran</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengumumanDitolak as $form)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td style="width: 200px">{{ $form->nama_lengkap }}</td>
                                                <td style="width: 500px">{{ $form->Jalur_pendaftaran }}</td>
                                                <td style="width: 500px">{{ $form->kelas }}</td>
                                                <td style="width: 500px">{{ $form->form->status }}</td>
                                                {{-- <td style="width: 500px" >{{ $form->NISN}}</td> --}}
                                                <td style="width: 100px"><a href="/data-pendaftar/show/{{ $form->id }}"
                                                        class="btn btn-success">Lihat</a></td>
                                                {{-- <td style="width: 100px"><a href="/edit-formulir-pendaftaran/{{$form->id}}" class="btn btn-primary">Edit</a></td> --}}
                                                <form action="/pengumuman-delete/{{ $form->id }}" method="POST"
                                                    class="delete-data-swift-allert-example">
                                                    @method('post')
                                                    @csrf
                                                    <td style="width: 100px"><button class="btn btn-danger">Hapus</button>
                                                    </td>
                                                </form>



                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- </form> --}}
                    </div>
                    {{-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <form action="/formulir-pendaftaran-siswa" method="POST">
                @csrf

                  <div class="card">
                    <div class="table-responsive">
                      <table class="table table-striped table-sm">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jalur Pendaftaran</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead> --}}
                    {{-- <tbody>
                          @foreach ($data as $form)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="width: 200px" >{{ $form->Nomor_Pendaftaran}}</td>
                            <td style="width: 500px" >{{ $form->nama_lengkap}}</td>
                            <td style="width: 500px" >{{ $form->Jalur_pendaftaran}}</td>
                            <td style="width: 500px" >{{ $form->NISN}}</td>
                            <td style="width: 100px"><a href="/data-pendaftar/show/{{$form->id}}" class="btn btn-success">Lihat</a></td>
                            {{-- <td style="width: 100px"><a href="/edit-formulir-pendaftaran/{{$form->id}}" class="btn btn-primary">Edit</a></td> --}}
                    {{-- <td style="width: 100px"><a href="/data-pendaftar/delete/{{$form->id}}" class="btn btn-danger">Hapus</a></td>


                          </tr>


                          @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>

            {{-- </form> --}}
        </div>
        </div>
        </div>

    </section>
@endsection
