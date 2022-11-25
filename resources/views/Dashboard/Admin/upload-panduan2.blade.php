@extends('Dashboard.Admin.Layout2.index')

@section('container')
    <form action="/upload-panduan/store" method="POST" enctype="multipart/form-data"
        class="submit-button-swift-allert-example ">
        @csrf
        <section class="p-4">
            <div class="card card-body mt-5 p-4 shadow-sm">
                <div class="card-body">

                    <h3 class="m-0 font-weight-bold text-dark mb-2">Upload Panduan</h3>
                    <hr>

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

                        <div class="col-sm-4 ">
                            <label>Upload Berkas </label>

                            <div class="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="upload_panduan" class="custom-file-input"
                                            id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>

                                    @error('upload_panduan')
                                        <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                                {{-- <div class="col-sm-6">
                            <label for="form-label" for="personal-data" class="text-dark mb-2">Upload Berkas</label>
                            <input type="file" class="form-file-input form-control mb-2" name="upload_panduan">
                            <div class="input-group">
                                <div class="form-file">

                                </div>
                            </div>
                            @error('upload')
                                <div class="alert alert-warning" role="alert">
                                    <strong>Peringatan!</strong>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                                <div class="col-sm-4 mb-4 text-end">
                                    <input name="status" type="hidden" value="uploadberkas">
                                    <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </form>

    <hr class="mb-4 mt-2">
    <section class="p-4">
        <div class="card card-body mt-5 p-4 shadow-sm">
            <div class="card-body">

                <h3 class="m-0 font-weight-bold text-dark mb-2">List Berkas</h3>
                <hr>

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
                                        <td style="width: 200px">
                                            {{-- <td class="text-center" > --}}
                                            <form class="delete-data-swift-allert-example"
                                                action="/upload-panduan/delete/{{ $panduan->id }}" method="POST"
                                                class="delete-data-swift-allert-example">
                                                @csrf
                                                <a href='{{ asset('storage/' . $panduan->upload_panduan) }}'
                                                    class="btn btn-outline-success btn-sm"><i class="fa fa-info"></i>
                                                    Lihat</a>

                                                <button class="btn btn-outline-danger btn-sm delete-data"
                                                    data-bs-toggle="modal" data-bs-target="#modalHapusData"
                                                    data-name="user " data-url=''><i class="fas fa-trash-alt"></i>
                                                    Hapus</button>



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
