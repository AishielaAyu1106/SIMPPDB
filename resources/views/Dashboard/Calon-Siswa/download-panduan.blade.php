@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    <section class="p-4 mt-4">
        <div class="card card-body mt-5 p-4 shadow-sm">
            <div class="card-body">
                <h3  class="mt-4">Panduan Pendaftaran</h3>
                <hr>
                <div class="table-responsive p-4">
                    <table class="table table-sm ">
                        <thead>
                            <tr class="text-dark" style="background-color:rgb(255, 243, 245)">
                                <th scope="col">NO</th>
                                <th scope="col">Nama Berkas</th>
                                <th scope="col">Tanggal Berkas</th>
                                <th scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($panduandaftar as $panduan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="width: 300px">{{ $panduan->nama_berkas }}</td>
                                <td style="width: 500px">{{ $panduan->created_at }}</td>


                                <td style="width: 200px">
                                    <a href="{{ url('/data-pendaftar/show/{id}') }}">
                                        <i class="col btn btn-outline-success">Download</i>
                                    </a>
                                </td>


                            </tr>
                        @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>

    </section>
@endsection
