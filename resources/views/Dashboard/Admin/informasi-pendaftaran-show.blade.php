@extends('Dashboard.Admin.Layout.index')

@section('container')

<section class="p-4 mt-4">
    <div class="row d-flex  justify-content-center align-items-center h-100">
        <div class="card card card-body mt-5 p-4 shadow-sm">
            {{-- <div class="col col-lg-6 mb-4 mb-lg-0"> --}}
                @foreach ($lihatinfo as $lihatinfo)
                <div class="card-body">
                    <h3 >Informasi Pendaftaran</h3>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-0">Syarat Usia</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $lihatinfo->syarat_usia }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-0">Ijazah</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $lihatinfo->ijazah }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-0">Surat</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $lihatinfo->surat }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-0">Lainnya</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $lihatinfo->surat_lainnya }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>



</section>
@endsection
