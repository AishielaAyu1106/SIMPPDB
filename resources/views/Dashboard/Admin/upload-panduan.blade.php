@extends('Dashboard.Admin.Layout.index')

@section('container')
    <section class="p-4 mt-4">
        <form action="/upload-panduan/store" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="col-lg-13 ">
                <div class="card card-body mt-5 p-4 shadow-sm">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-dark">UPLOAD PANDUAN PENDAFTARAN</h5>
                    </div>
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
                                        <input type="file" class="form-file-input form-control mb-2"
                                            name="upload_panduan">
                                    </div>
                                </div>
                                @error('upload')
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Peringatan!</strong>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class=" text-end">
                                <input name="status" type="hidden" value="uploadberkas">
                                <button type="submit" class="btn btn-outline-success">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

        <hr class="mb-4 mt-5">
        <div class="card shadow-sm">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-dark">LIST BERKAS</h5>
            </div>
            <div class="card-body">
                <div class=" mt-">
                    <div class="table-responsive">
                        <table class="table table-sm shadow-sm">
                            <thead>
                                <tr class="text-dark">
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
                                            <div class="row text-center">
                                                <form class="delete-data-swift-allert-example"
                                                    action="/upload-panduan/delete/{{ $panduan->id }}" method="POST">

                                                    @csrf
                                                    <a href="{{ asset('storage/' . $panduan->upload_panduan) }}"
                                                        class="col btn btn-success btn-sm"><i class="fa fa-eye"></i></a>


                                                    <button class="col btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
    </section>
@endsection
