@extends('Dashboard.Admin.Layout.index')

@section('container')
    <section class="p-4 mt-4">
        <div class="card card-body mt-5 p-4 shadow-sm ">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-dark ">EDIT STATUS PENGUMUMAN</h5>
            </div>
            {{-- <div class="card card-body mt-5">
        <h3>Edit User </h3> --}}

            <form method="POST" action="/pengumuman-edit/{{ $editPengumuman->id }}"
                class="update-data-swift-allert-example">
                {{-- @method('put') --}}
                @csrf

                <div class="row mb-3 g-3 mt-5">


                    <div class="col-md">
                        <label for="password" class="form-label">Status</label>
                        <div class="input-group">
                            {{-- <label for="exampleFormControlInput1" class="form-label text-dark">Jenis Kelamin</label> --}}
                            <select class="form-select" name="status" id="exampleFormControlInput1"
                                value="{{ old('status') }}">
                                <option selected>Pilih Status</option>
                                <option value="Berkas Ditolak">Berkas Ditolak</option>
                                <option value="Berkas Diterima">Berkas Diterima</option>
                                <option value="Sedang Diproses">Sedang Diproses</option>
                            </select>
                        </div>
                        <small id="passHelper" class="form-text text-muted font-weight-bold">Isi jika ingin mengganti Status
                            Pendaftaran</small>
                    </div>
                </div>

                <div class="form-group">

                    <input value="admin" name="role" type="hidden">

                </div>

                <div class="row">
                    <div class="col-md text-end">
                        <button class="btn btn-outline-success btn-sm">Update</button>
                    </div>
                </div>

            </form>
        </div>
        </div>
    </section>
@endsection
