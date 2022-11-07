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
                                    <input value="{{ request()->id }}" name="syarat_usia" type="hidden">
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>

                                <div class="col-sm-6">
                                    <label for="message-text" class="col-form-label">Ijazah</label>
                                    <input value="{{ request()->id }}" name="ijazah" type="hidden">
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </div>
                            <h6 align="center">
                                <hr class="mt-4"> Kelengkapan Berkas dan Surat
                            </h6>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="message-text" class="col-form-label">Surat</label>
                                    <input value="{{ request()->id }}" name="surat" type="hidden">
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>

                                <div class="col-sm-6 mb-4">
                                    <label for="message-text" class="col-form-label ">Lainnya</label>
                                    <input value="{{ request()->id }}" name="surat_lainnya" type="hidden">
                                    <textarea class="form-control" id="message-text"></textarea>
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
@endsection
