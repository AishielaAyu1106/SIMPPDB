@extends('Dashboard.Admin.Layout.index')

@section('container')
    <form action="/kuota-kelas-lihat" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-13 ">
            <div class="card mb-3 shadow-inner">
                <div class="card-body ">
                    <div class="row g-3">
                        <h3 align='center'>Tambah Kelas</h3>
                        <div class="col-sm-4">
                            <label for="form-label" for="personal-data" class="text-dark mb-2">Nama Kelas</label>
                            <input type="text" class="form-file-input form-control" name="Nama_Kelas">
                            @error('Nama_Kelas')
                                <div class="alert alert-warning" role="alert">
                                    <strong>Peringatan!</strong>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-4">
                            <label for="form-label" for="personal-data" class="text-dark mb-2">Kuota Kelas</label>
                            <input type="number" class="form-file-input form-control" name="Kuota_kelas">
                            @error('Kuota_kelas')
                                <div class="alert alert-warning" role="alert">
                                    <strong>Peringatan!</strong>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-4-mb-4">
                            <input name="status" type="hidden" value="uploadberkas">
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
