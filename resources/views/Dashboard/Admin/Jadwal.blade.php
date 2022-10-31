@extends('Dashboard.Admin.Layout.index')

@section('container')
    <section style="text-center">
<div class="card mt-4">
    <div class="card-body">
        <h3 align='center' class="mt-4">Jadwal Pendaftaran</h3>



        <div class=" mt-4">
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr style="background-color:rgb(255, 147, 163)" class="text-light">
                            <th scope="col">Kategori pendaftaran</th>
                            <th scope="col">Tanggal Awal</th>
                            <th scope="col">Tanggal Akhir</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>


                        <form action="{{ url('updateJadwal') }}" method="post">
                            @csrf
                            <tr>

                                <td style="width: 200px">{{ $afirmasi->Jalur_pendaftaran }}</td>
                                <input type="hidden" name="Jalur_pendaftaran" value="{{ $afirmasi->Jalur_pendaftaran }}">
                                <td style="width: 500px">
                                    <div class="col-sm-6">
                                        <input type="date" name="tanggal_awal" class="form-control "
                                            value="{{ $afirmasi->tanggal_awal }}" placeholder value required>
                                    </div>
                                </td>

                                <td style="width: 500px">
                                    <div class="col-sm-6">
                                        <input type="date" name="tanggal_akhir" class="form-control "
                                            value="{{ $afirmasi->tanggal_akhir }}" placeholder value required>
                                    </div>
                                </td>

                                <td style="width: 100px">

                                    <div class="form-group text-center ">
                                        <button class="btn btn-outline-success" class="form-control"
                                            type="submit">Update</button>
                                    </div>


                                </td>
                            </tr>


                        </form>

                        <form action="{{ url('updateJadwal') }}" method="post">
                            @csrf
                            <tr>
                                <td style="width: 200px">{{ $prestasi->Jalur_pendaftaran }}</td>
                                <input type="hidden" name="Jalur_pendaftaran" value="{{ $prestasi->Jalur_pendaftaran }}">
                                <td style="width: 500px">
                                    <div class="col-sm-6">
                                        <input type="date" name="tanggal_awal" class="form-control "
                                            value="{{ $prestasi->tanggal_awal }}" placeholder value required>
                                    </div>
                                </td>

                                <td style="width: 500px">
                                    <div class="col-sm-6">
                                        <input type="date" name="tanggal_akhir" class="form-control "
                                            value="{{ $prestasi->tanggal_akhir }}" placeholder value required>
                                    </div>
                                </td>

                                <td style="width: 100px">
                                    <div class="form-group text-center">
                                        <button class="btn btn-outline-success" class="form-control"
                                            type="submit">Update</button>
                                    </div>
                                </td>
                            </tr>

                            </td>
                        </form>

                        <form action="{{ url('updateJadwal') }}" method="post">
                            @csrf
                            <tr>
                                <td style="width: 200px">{{ $zonasi->Jalur_pendaftaran }}</td>
                                <input type="hidden" name="Jalur_pendaftaran" value="{{ $zonasi->Jalur_pendaftaran }}">
                                <td style="width: 500px">
                                    <div class="col-sm-6">
                                        <input type="date" name="tanggal_awal" class="form-control "
                                            value="{{ $zonasi->tanggal_awal }}" placeholder value required>
                                    </div>
                                </td>

                                <td style="width: 500px">
                                    <div class="col-sm-6">
                                        <input type="date" name="tanggal_akhir" class="form-control "
                                            value="{{ $zonasi->tanggal_akhir }}" placeholder value required>
                                    </div>
                                </td>

                                <td style="width: 100px">
                                    <div class="form-group text-center">
                                        <button class="btn btn-outline-success" class="form-control"
                                            type="submit">Update</button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

    </section>
@endsection
