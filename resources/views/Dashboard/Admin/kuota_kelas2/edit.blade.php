@extends('Dashboard.Admin.Layout2.index')

@section('container')
    <form action="{{route('kuota-kelas.update', $kuota_kela->id) }}" method="post" enctype="multipart/form-data" class="update-data-swift-allert-example">
        @method("PUT")
        @csrf

        <section class="p-4">
            <div class="card card-body mt-5 p-4 shadow-sm">
                <div class="card-body">

                    <h3 class="m-0 font-weight-bold text-dark mb-2">Edit Kelas</h3>
                    <hr>
                    <div class="row g-3">

                        <div class="col-sm-6">
                            <label for="form-label" for="personal-data" class="text-dark mb-2">Nama Kelas</label>
                            <input type="text" class="form-file-input form-control" name="Nama_Kelas" value="{{ $kuota_kela->Nama_Kelas }}">
                            @error('Nama_Kelas')
                                <div class="alert alert-warning" role="alert">
                                    <strong>Peringatan!</strong>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label for="form-label" for="personal-data" class="text-dark mb-2">Kuota Kelas</label>
                            <input type="number" min="0" class="form-file-input form-control" name="Kuota_kelas" value="{{ $kuota_kela->Kuota_kelas }}">
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
        </section>
    </form>
@endsection
