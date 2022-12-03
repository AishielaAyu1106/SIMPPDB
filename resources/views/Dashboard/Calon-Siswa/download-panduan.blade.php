@extends('Dashboard.Calon-Siswa.Layout2.index')

@section('container')
    <section class="p-4 mt-4">
        <div class="card card-body mt-5 p-4 shadow-sm">
            <div class="card-body">
                <h3  class="m-0 font-weight-bold text-dark">Panduan Pendaftaran</h3>
                <hr>
                <div class="table-responsive p-4">
                    <table class="table table-sm ">
                        <thead>
                            <tr class="text-dark" >
                                <th scope="col">NO</th>
                                <th scope="col">Nama Berkas</th>
                                <th scope="col">Tanggal Berkas</th>
                                <th scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($downloadpanduan as $panduan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="width: 300px">{{ $panduan->nama_berkas }}</td>
                                <td style="width: 500px">{{ $panduan->created_at }}</td>


                                <td >
                                    <a href="{{ asset('storage/' . $panduan->upload_panduan) }}" class="btn btn-outline-success btn-icon-split btn-sm" target="_blank">
                                        <span class="text"><i class="fas fa-download"></i> Download</span>
                                    </a>
                                    {{-- <a href="{{ asset('storage/' . $panduan->upload_panduan) }}">
                                        <i class="col btn btn-outline-success btn-sm"><i class="fa fa-download"></i> Download</i>
                                    </a> --}}
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>

    </section>
@endsection
