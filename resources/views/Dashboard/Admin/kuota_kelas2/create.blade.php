@extends('Dashboard.Admin.Layout2.index')

@section('container')
    <form action="{{ route('kuota-kelas.store') }}" method="post" enctype="multipart/form-data"
        class="submit-button-swift-allert-example">
        @csrf
        <section class="p-4">
            <div class="card card-body mt-5 p-4 shadow-sm">
                <div class="card-body">

                    <h3 class="m-0 font-weight-bold text-dark mb-2">Tambah Kelas</h3>
                    <hr>
                    <div class="row g-3">

                        <div class="col-sm-6">
                            <label for="form-label" for="personal-data" class="text-dark mb-2">Nama Kelas</label>
                            <input type="text" class="form-file-input form-control" name="Nama_Kelas">
                            @error('Nama_Kelas')
                                <div class="alert alert-warning" role="alert">
                                    <strong>Peringatan!</strong>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label for="form-label" for="personal-data" class="text-dark mb-2">Kuota Kelas</label>
                            <input type="number" class="form-file-input form-control" name="Kuota_kelas">
                            @error('Kuota_kelas')
                                <div class="alert alert-warning" role="alert">
                                    <strong>Peringatan!</strong>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-4 mb-4 mt-4 ">
                            <input name="status" type="hidden" value="uploadberkas">
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

    </form>
    </section>
@endsection
