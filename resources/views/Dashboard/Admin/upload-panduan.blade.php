@extends('Dashboard.Admin.Layout.index')

@section('container')
    <form action="/upload-panduan/store" method="POST" enctype="multipart/form-data">
        @csrf
        <h3 align='center' class="p-4">Upload Panduan Pendaftaran </h3>
        <div class="col-lg-13 ">
            <div class="card mb-4 shadow-sm">
                <div class="card-body ">
                    <div class="row g-3">

                        <div class="col-sm-6">
                            <label for="form-label" for="personal-data" class="text-dark mb-2">Nama Berkas</label>
                            <input type="text" class="form-file-input form-control" name="nama_berkas">
                            @error('nama_berkas')
                                <div class="alert alert-warning" role="alert">
                                    <strong>Peringatan!</strong>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label for="form-label" for="personal-data" class="text-dark mb-2">Upload Berkas</label>
                            <div class="input-group">
                                <div class="form-file">
                                    <input type="file" class="form-file-input form-control mb-2" name="upload_panduan">
                                </div>
                            </div>
                            @error('upload')
                                <div class="alert alert-warning" role="alert">
                                    <strong>Peringatan!</strong>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-4-mb-4 ">
                            <input name="status" type="hidden" value="uploadberkas">
                            <button type="submit" class="btn btn-outline-success">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <hr class="mb-4">
    <div class="card shadow-sm">
        <h5 class="p-4 mb-0">List Berkas</h5>
        <div class="card-body">
            <div class=" mt-">
                <div class="table-responsive">
                    <table class="table table-sm shadow-sm">
                        <thead>
                            <tr style="background-color:rgb(255, 147, 163)" class="text-light">
                                <th scope="col">No</th>
                                <th scope="col">Nama Berkas</th>
                                <th scope="col">Tanggal Berkas</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($panduandaftar as $panduan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="width: 500px">{{ $panduan->nama_berkas }}</td>
                                    <td style="width: 500px">{{ $panduan->created_at }}</td>
                                    <td style="width: 100px">
                                        <div class="row">
                                            <form class="delete-data-swift-allert-example"
                                            action="/upload-panduan/delete/{{ $panduan->id }}" method="POST">

                                            @csrf
                                            <a href="{{ asset('storage/' . $panduan->upload_berkas) }}"
                                                class="col btn btn-success"><i class="fa fa-eye"></i></a>


                                                <button class="col btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                </div>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
