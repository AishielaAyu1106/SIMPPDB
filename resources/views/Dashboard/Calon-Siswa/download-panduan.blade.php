@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    <section style="background-color: #eee;" class="p-4 mt-4">
        <h3 align='center' class="p-4 ">Panduan Pendaftaran</h3>
        <hr>
        <div class="card">

            {{-- <hr> --}}
            <div class="table-responsive p-4">
                {{-- <div class="row d-flex p-5 justify-content-center align-items-center h-100"> --}}
                {{-- <div class="col col-lg-15"> --}}
                {{-- <h5 class=" mb-2 mt-2 p-2">Panduan Pendaftaran</h5> --}}
                <table class="table table-sm ">
                    <thead>
                        <tr class="text-dark" style="background-color:rgb(255, 243, 245)">
                            <th scope="col">NO</th>
                            <th scope="col">Nama Berkas</th>
                            <th scope="col">Jenis</th>  
                            <th scope="col">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($dashboardData as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="width: 300px">{{ $item->nama_lengkap }}</td>
                                <td style="width: 500px">{{ $item->Nomor_Pendaftaran }}</td>


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
    </section>
@endsection
