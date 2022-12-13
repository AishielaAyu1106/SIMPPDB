@extends('Dashboard.Calon-Siswa.Layout2.index')

@section('container')
<section class="p-4 mt-4">
    <div class="card card-body mt-5 p-4 shadow-sm">
        <div class="card-body">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                {{-- <div class=""> --}}
                    <h3 class=" mb-2 m-0 font-weight-bold text-dark">Formulir Pendaftaran</h3>
                <a href="/cetak-bukti-siswa" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Cetak Bukti Pendaftaran</a>
                {{-- <a href="/cetak-data-pendaftaran" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Cetak Data Pendaftaran</a> --}}
            </div>
        {{-- <h3 class="m-0 font-weight-bold text-dark">Formulir Pendaftaran</h3> --}}
        <hr class="mt-0">

                {{-- <div class="btn-list  pt-2 pb-2">
                    <a href="/cetak-bukti-siswa" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Cetak Bukti Pendaftaran</a> --}}
                    {{-- <a href="/cetak-bukti-siswa" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Cetak Bukti Pendaftaran</a> --}}
                {{-- </div> --}}
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th >Nomor Pendaftaran</th>
                                <th >Nama Lengkap</th>
                                <th >Jalur Pendaftaran</th>
                                <th >N I S N</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms as $form)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td >{{ $form->Nomor_Pendaftaran }}</td>
                                    <td >{{ $form->nama_lengkap }}</td>
                                    <td >{{ $form->Jalur_pendaftaran }}</td>
                                    <td >{{ $form->NISN }}</td>
                                    <td class="text-center" style="width: 200px">
                                    <div class="row">

                                            <form action="/formulir-pendaftaran-siswa/delete/{{ $form->id }}" method="POST"
                                                class="delete-data-swift-allert-example">
                                                @csrf
                                                <a href="/formulir-pendaftaran-siswa/show/{{ $form->id }}"
                                                    class="btn btn-outline-success btn-sm"><i class="fa fa-info"></i> Lihat</a>
                                            @if ($form->status=='Sedang diproses')
                                            <a href="/edit-formulir-pendaftaran/{{ $form->id }}" class="btn btn-outline-warning btn-sm"><i
                                                class="fa fa-pen"></i> Edit</a>
                                            <button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                                            @endif
                                            </form>

                                    </div>
                                </td>


                                    {{-- @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif --}}



                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
@endsection
