@extends('Dashboard.Admin.Layout.index')

@section('container')

    <div class="col-lg-13 ">
        <div class="card mb-3 shadow-inner">
            <div class="card-body ">
                <div class="row g-3">
                    <h3 align='center'>Upload Panduan Pendaftaran </h3>
                    <div class="col-sm-4">
                        <label for="form-label" for="personal-data" class="text-dark mb-2">Nama Berkas</label>
                        <input type="text" class="form-file-input form-control" name="nama_berkas">
                        @error('nama_berkas')
                            <div class="alert alert-warning" role="alert">
                                <strong>Peringatan!</strong>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-sm-4">
                        <label for="form-label" for="personal-data" class="text-dark mb-2">Upload Berkas</label>
                        <div class="input-group">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control mb-2" name="upload">
                            </div>
                        </div>
                        @error('upload')
                            <div class="alert alert-warning" role="alert">
                                <strong>Peringatan!</strong>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4-mb-4">
                        <input name="status" type="hidden" value="uploadberkas">
                        <button type="submit" class="btn btn-outline-success">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=" mt-4">
        <div class="table-responsive">
            <table class="table table-sm">
                <thead>
                    <tr style="background-color:rgb(255, 147, 163)" class="text-light">
                        <th scope="col">No</th>
                        <th scope="col">Nama Berkas</th>
                        <th scope="col">Berkas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($item as $item)
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
