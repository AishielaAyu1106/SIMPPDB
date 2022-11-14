@extends('Dashboard.Admin.Layout.index')

@section('container')
    <section style="p-4 mt-4">
        <div class="card card-body mt-5 p-4 shadow-sm">
            <div class="card-body">
        <form action="{{ route('kuota-kelas.store') }}" method="post" enctype="multipart/form-data">
            @csrf

                    <h3>Tambah Kelas</h3>
                    {{-- <div class="col-lg-13 p-2"> --}}
                        {{-- <div class="card mb-3 shadow-sm"> --}}
                            {{-- <span class="border border-success"></span> --}}
                            {{-- <div class="card-body "> --}}
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
                                    <div class="col-sm-4-mb-4">
                                        <input name="status" type="hidden" value="uploadberkas">
                                        <button type="submit" class="btn btn-outline-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
