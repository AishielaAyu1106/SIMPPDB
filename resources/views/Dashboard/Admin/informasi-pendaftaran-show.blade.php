@extends('Dashboard.Admin.Layout2.index')

@section('container')

<section class="p-4 mt-4">
    <div class="row d-flex  justify-content-center align-items-center h-100">
        {{-- <div class="card card card-body mt-5 p-4 shadow-sm"> --}}
            {{-- <div class="col col-lg-6 mb-4 mb-lg-0"> --}}
                <div class="p-4 ">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">INFORMASI PENDAFTARAN</h6>
                        </div>
                        <div class="card-body ">
                            @foreach ($lihatinfo as $lihatinfo)
                                <div class="card-body shadow-sm">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                                    src="{{ asset('css/informasi pendaftaran.svg') }}" alt="...">
                                            </div>

                                            <div class="col-sm-6 mt-5">
                                                <li class="text-muted mb-2">{{ $lihatinfo->syarat_usia }}</li>
                                                <li class="text-muted mb-2">{{ $lihatinfo->ijazah }}</li>
                                                <li class="text-muted mb-2">{{ $lihatinfo->surat }}</li>
                                                <li class="text-muted mb-2">{{ $lihatinfo->surat_lainnya }}</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>

    </div>



</section>
@endsection
