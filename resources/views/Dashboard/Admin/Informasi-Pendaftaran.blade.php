@extends('Dashboard.Admin.Layout.index')

@section('container')
    <form action="/informasi-pendaftaran" method="post" enctype="multipart/form-data">
        @csrf
        <section class="p-4 mt-4">
            <div class="card card-body mt-5 p-4 shadow-sm">
                <div class="card-body">
                    <h3>Informasi Pendaftaran</h3>
                    <hr>
                    <div class="container ">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="message-text" class="col-form-label">Syarat Usia</label>

                                    <textarea class="form-control" id="message-text" name="syarat_usia"></textarea>
                                </div>

                                <div class="col-sm-6">
                                    <label for="message-text" class="col-form-label">Ijazah</label>

                                    <textarea class="form-control" id="message-text" name="ijazah"></textarea>
                                </div>
                            </div>
                            <h6 align="center">
                                <hr class="mt-4"> Kelengkapan Berkas dan Surat
                            </h6>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="message-text" class="col-form-label">Surat</label>

                                    <textarea class="form-control" id="message-text" name="surat"></textarea>
                                </div>

                                <div class="col-sm-6 mb-4">
                                    <label for="message-text" class="col-form-label ">Lainnya</label>

                                    <textarea class="form-control" id="message-text" name="surat_lainnya"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-4-mb-4 text-end">
                                <input name="status" type="hidden" value="uploadberkas">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>


    <section class="p-4 mt-4">

        {{-- <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> --}}
            <div class="card card-body mt-5 p-4 shadow-sm">
                <div class="card-body">
                    <h3 class=" mb-2">Informasi Pendafataran</h3>
                    <hr>

                    {{-- <div class="btn-list mb-2" >
                        <a href="" class="btn btn-success">Tambah
                            Kelas</a>
                    </div> --}}

                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr  class="text-dark">
                                    <th scope="col">No</th>
                                    <th scope="col">Syarat Usia</th>
                                    <th scope="col">Ijazah</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($infodaftar as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td style="width: 300px">{{ $item->syarat_usia }}</td>
                                        <td style="width: 500px">{{ $item->ijazah }}</td>
                                        {{-- <td style="width: 100px"><a href="/data-pendaftar/show/{{ $form->id }}"
                                                class="btn btn-success">Lihat</a></td> --}}
                                        {{-- <td style="width: 100px"><a href="/edit-formulir-pendaftaran/{{$form->id}}" class="btn btn-primary">Edit</a></td> --}}
                                        <td style="width: 100px">
                                            <div class="row">
                                                <form class="delete-data-swift-allert-example"
                                                    action="/info-pendaftaran/delete/{{$item->id }}" method="post">
                                                    <a href="/informasi-pendaftaran"
                                                        class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                    {{-- @method('DELETE') --}}
                                                    @csrf
                                                    <button class="col btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>

                                            </div>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            {{-- </form> --}}
        </div>
    </section>

@endsection
