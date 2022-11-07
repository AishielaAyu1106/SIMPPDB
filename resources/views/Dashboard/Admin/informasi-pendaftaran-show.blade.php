@extends('Dashboard.Admin.Layout.index')

@section('container')

<section class="p-4 mt-4">
    <div class="card card-body mt-5 p-4 shadow-sm">
        <div class="card-body">
            <h3 >Informasi Pendaftaran</h3>

            <div class="row">
                <div class="col-sm-9">
                    <p class="mb-0">Jenis Prestasi</p>
                </div>
                <div class="col-sm-3">
                    <p class="text-muted mb-0">{{ $lihat->jenis_prestasi }}</p>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection
