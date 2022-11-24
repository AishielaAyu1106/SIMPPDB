@extends('Dashboard.Admin.Layout2.index')

@section('container')
    <section style="p-4 mt-4">
        <div class="card card-body mt-5 shadow-sm">
            <div class="card-body">
                <h4>Jadwal Pendaftaran</h4>
                {{-- <div class=" mt-4"> --}}
                <div class="table-responsive mt-4">
                    <table class="table table-sm">
                        <thead>
                            <tr class="text-dark">
                                <th >Kategori pendaftaran</th>
                                <th >Tanggal Awal</th>
                                <th >Tanggal Akhir</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>


                            <form action="{{ url('updateJadwal') }}" method="post" class="update-data-swift-allert-example">
                                @csrf
                                <tr>
                                    <td style="width: 200px">{{ $afirmasi->Jalur_pendaftaran }}</td>
                                    <input type="hidden" name="Jalur_pendaftaran"
                                        value="{{ $afirmasi->Jalur_pendaftaran }}">

                                    <td class="text-center" >
                                        <div class="col-sm-6">
                                            <input type="date" name="tanggal_awal" class="form-control "
                                                value="{{ $afirmasi->tanggal_awal }}"  required>
                                        </div>
                                    </td>

                                    <td  class="text-center">
                                        <div class="col-sm-6 ">
                                            <input type="date" name="tanggal_akhir" class="form-control "
                                                value="{{ $afirmasi->tanggal_akhir }}" required>
                                        </div>
                                    </td>

                                    <td class="text-center" style="width: 100px">
                                        <div class="form-group text-center ">
                                            <button class="btn btn-outline-success btn-sm" class="form-control"
                                                type="submit">Update</button>
                                        </div>
                                    </td>
                                </tr>


                            </form>

                            <form action="{{ url('updateJadwal') }}" method="post" class="update-data-swift-allert-example">
                                @csrf
                                <tr>
                                    <td style="width: 200px">{{ $prestasi->Jalur_pendaftaran }}</td>
                                    <input type="hidden" name="Jalur_pendaftaran"
                                        value="{{ $prestasi->Jalur_pendaftaran }}">
                                    <td style="width: 500px">
                                        {{-- @dd($prestasi->tanggal_awal) --}}
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
                                            <button class="btn btn-outline-success btn-sm" class="form-control"
                                                type="submit">Update</button>
                                        </div>
                                    </td>
                                </tr>

                                </td>
                            </form>

                            <form action="{{ url('updateJadwal') }}" method="post" class="update-data-swift-allert-example">
                                @csrf
                                <tr>
                                    <td style="width: 200px">{{ $zonasi->Jalur_pendaftaran }}</td>
                                    <input type="hidden" name="Jalur_pendaftaran"
                                        value="{{ $zonasi->Jalur_pendaftaran }}">
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
                                            <button class="btn btn-outline-success btn-sm" class="form-control"
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
