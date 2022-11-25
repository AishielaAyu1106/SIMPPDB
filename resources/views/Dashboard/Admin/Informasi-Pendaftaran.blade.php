@extends('Dashboard.Admin.Layout2.index')

@section('container')
@if($Infodaftar)
    <form action="/informasi-pendaftaran" method="post" enctype="multipart/form-data" class="submit-button-swift-allert-example">
        @csrf
        <section class="p-4 mt-4">
            <section class="p-4">
                <div class="card card-body mt-5 p-4 shadow-sm">
                    <div class="card-body">

                        <h3 class="m-0 font-weight-bold text-dark mb-2">Informasi Pendaftaran</h3>
                        <hr>
                        <small id="passHelper" class="form-text text-muted font-weight-bold">Jika Ingin Mengubah, Silahkan Isi kembali Form Informasi Pendaftaran</small>
                </div>
                <div class="card-body">

                    <div class="container ">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="message-text" class="col-form-label">Syarat Usia</label>
                                    <textarea class="form-control" id="message-text" name="syarat_usia" value="">
                                        {{$Infodaftar->syarat_usia}}
                                    </textarea>
                                </div>

                                <div class="col-sm-6">
                                    <label for="message-text" class="col-form-label">Ijazah</label>

                                    <textarea class="form-control" id="message-text" name="ijazah" value="">
                                        {{$Infodaftar->ijazah}}
                                    </textarea>
                                </div>
                            </div>
                            <h6 align="center">
                                <hr class="mt-4"> Kelengkapan Berkas dan Surat
                            </h6>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="message-text" class="col-form-label">Surat</label>

                                    <textarea class="form-control" id="message-text" name="surat" value="">
                                        {{$Infodaftar->surat}}
                                    </textarea>
                                </div>

                                <div class="col-sm-6 mb-4">
                                    <label for="message-text" class="col-form-label ">Lainnya</label>

                                    <textarea class="form-control" id="message-text" name="surat_lainnya" value="">
                                        {{$Infodaftar->surat_lainnya}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="col-sm-4-mb-4 text-end">
                                <input name="status" type="hidden" value="uploadberkas">
                                <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endif

    <section class="p-4 mt-4">

        {{-- <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> --}}
            {{-- <div class="card shadow-sm">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-dark">INFORMASI PENDAFTARAN</h5>
                </div>
                <div class="card-body"> --}}


                    {{-- <div class="btn-list mb-2" >
                        <a href="" class="btn btn-success">Tambah
                            Kelas</a>
                    </div> --}}

                    {{-- <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr  class="text-dark">
                                    <th scope="col">No</th>
                                    <th scope="col">Syarat Usia</th>
                                    <th scope="col">Ijazah</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Infodaftar as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td style="width: 300px">{{ $item->syarat_usia }}</td>
                                        <td style="width: 500px">{{ $item->ijazah }}</td>

                                        <td style="width: 200px" class="text-center">
                                            <div class="row">
                                                <form class="delete-data-swift-allert-example"
                                                    action="/info-pendaftaran/delete/{{$item->id }}" method="post">
                                                    <a href="/informasi-pendaftaran"
                                                        class="btn btn-outline-success btn-sm"><i class="fa fa-info"></i> Lihat</a>

                                                    @csrf
                                                    <button class="col btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                                                </form>

                                            </div>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> --}}
                </div>

            </div>

            {{-- </form> --}}
        </div>
    </section>

@endsection
