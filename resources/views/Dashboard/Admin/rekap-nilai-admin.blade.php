@extends('Dashboard.Admin.Layout.index')
@section('container')
    <section class="p-4 mt-4">

        {{-- <hr> --}}
        <div class="card card-body mt-5 p-4 shadow-sm">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-dark">REKAP NILAI</h5>
            </div>
            <div class="card-body ">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
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
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr  class="text-dark">
                                            <th scope="col">No</th>
                                            {{-- <th scope="col">Nama</th> --}}
                                            <th scope="col">Matematika</th>
                                            <th scope="col">Ilmu Pengetahuan Alam</th>
                                            <th scope="col">Ilmu Pengetahuan Sosial</th>
                                            <th scope="col">Bahasa Inggris</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Afirmasi as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                {{-- <td style="width: 200px" >{{ $item->}}</td> --}}
                                                <td style="width: 200px">{{ $item->mtk ?? 0 }}</td>
                                                <td style="width: 500px">{{ $item->ipa ?? 0 }}</td>
                                                <td style="width: 500px">{{ $item->ips ?? 0 }}</td>
                                                <td style="width: 500px">{{ $item->basing ?? 0 }}</td>

                                                <td style="width: 200px">
                                                    <div class="row">
                                                        <form action="/rekap-nilai-admin/delete/{{ $item->id }}" method="POST"  class="delete-data-swift-allert-example">
                                                            @csrf
                                                        <a href="/data-pendaftar/show/{{ $item->id }}"
                                                            class="btn btn-success"><i class="fa fa-eye"></i></a>

                                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>

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
                        {{-- <form action="/formulir-pendaftaran-siswa" method="POST">
            @csrf --}}

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr  class="text-dark">
                                            <th scope="col">No</th>
                                            <th scope="col">Matematika</th>
                                            <th scope="col">Ilmu Pengetahuan Alam</th>
                                            <th scope="col">Ilmu Pengetahuan Sosial</th>
                                            <th scope="col">Bahasa Inggris</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Prestasi as $item1)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td style="width: 200px">{{ $item1->mtk ?? 0 }}</td>
                                                <td style="width: 500px">{{ $item1->ipa ?? 0 }}</td>
                                                <td style="width: 500px">{{ $item1->ips ?? 0 }}</td>
                                                <td style="width: 500px">{{ $item1->basing ?? 0 }}</td>
                                                <td style="width: 100px"><a href="/data-pendaftar/show/{{ $item1->id ?? 0 }}"
                                                        class="btn btn-success">Lihat</a></td>

                                                <form action="/rekap-nilai-admin/delete/{{ $item1->id ?? 0 }}"
                                                    method="POST">
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
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        {{-- <form action="/formulir-pendaftaran-siswa" method="POST">
            @csrf --}}

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr  class="text-dark">
                                            <th scope="col">No</th>
                                            {{-- <th scope="col">Nama</th> --}}
                                            <th scope="col">Matematika</th>
                                            <th scope="col">Ilmu Pengetahuan Alam</th>
                                            <th scope="col">Ilmu Pengetahuan Sosial</th>
                                            <th scope="col">Bahasa Inggris</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Zonasi as $item3)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                {{-- <td style="width: 200px" >{{ $item3->user_id}}</td> --}}
                                                <td style="width: 200px">{{ $item3->mtk ?? 0 }}</td>
                                                <td style="width: 500px">{{ $item3->ipa ?? 0 }}</td>
                                                <td style="width: 500px">{{ $item3->ips ?? 0 }}</td>
                                                <td style="width: 500px">{{ $item3->basing ?? 0 }}</td>

                                                <td style="width: 100px"><a
                                                        href="/data-pendaftar/show/{{ $item3->id ?? 0 }}"
                                                        class="btn btn-success">Lihat</a></td>

                                                <form action="/rekap-nilai-admin/delete/{{ $item3->id ?? 0 }}"
                                                    method="POST">
                                                    @csrf
                                                    <td style="width: 100px"><button class="btn btn-danger">Hapus</button>
                                                    </td>
                                                </form>

                                            </tr>
                                        @endforeach
                                    </tbody>
                            </div>
                        </div>

                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
     @endsection
