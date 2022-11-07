@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
<section class="p-4 mt-4">
    <div class="card card-body mt-5 p-4 shadow-sm">
        <div class="card-body">
        <h3 class="mt-4 ">Formulir Pendaftaran</h3>
        <hr class="mt-0">

                <div class="btn-list  pt-2 pb-2">
                    <a href="" class="btn btn-success"><i class="fa fa-download"></i> Cetak Bukti Pendaftaran</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nomor Pendaftaran</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jalur Pendaftaran</th>
                                <th scope="col">N I S N</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms as $form)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="width: 300px">{{ $form->Nomor_Pendaftaran }}</td>
                                    <td style="width: 500px">{{ $form->nama_lengkap }}</td>
                                    <td style="width: 500px">{{ $form->Jalur_pendaftaran }}</td>
                                    <td style="width: 500px">{{ $form->NISN }}</td>
                                    <td style="width: 50px">
                                        <a href="/formulir-pendaftaran-siswa/show/{{ $form->id }}"
                                            class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <td><a href="/edit-formulir-pendaftaran/{{ $form->id }}" class="btn btn-warning"><i
                                                class="fa fa-pen"></i></a></td>
                                    <form action="/formulir-pendaftaran-siswa/delete/{{ $form->id }}" method="POST"
                                        class="delete-data-swift-allert-example">
                                        @csrf
                                        <td><button class="btn btn-danger "><i class="fa fa-trash"></i></button></td>
                                    </form>
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
