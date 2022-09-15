@extends('Dashboard.Admin.Layout.index')

@section('container')
<h3 align='center'>Jadwal Pendaftaran</h3>

        <section style="text-center">

            {{-- <div class="container-fluid">
            <div class="text-center mt-2 mb-4">
                <h3 class="text-dark">Tambah Data</h3>
            </div>
            <div class="row g-3">
                <div class="col-sm-7">
                  <div class="form-outline">
                    <label class="form-label" for="form10Example1">Kategori Pendaftaran</label>
                    <select class="form-select" name="Jalur_pendaftaran" id="exampleFormControlInput1" required>
                        <option selected>Pilih Kategori</option>
                          <option value="Afirmasi">Prestasi</option>
                          <option value="Afirmasi">Afirmasi</option>
                          <option value="Zonasi">Zonasi</option>
                    </select>
                  </div>
                </div>

                <div class="col-sm">
                  <div class="form-outline">
                    <label class="form-label" for="date">Tanggal Awal</label>
                    <input type="date" id="date" class="form-control" name="tanggal_awal">

                  </div>
                </div>
                <div class="col-sm">
                    <div class="form-outline">
                        <label class="form-label" for="date">Tanggal Akhir</label>
                      <input type="date" id="date" class="form-control" name="tanggal_akhir">

                    </div>
                  </div>
              </div>

                <div class="form-group text-center">
                    <button class="btn btn-primary mt-4" class="form-control" type="submit">Submit</button>
                </div>
        </div> --}}

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
                                    <input type="hidden" name="Jalur_pendaftaran"
                                        value="{{ $afirmasi->Jalur_pendaftaran }}">
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
                                        <div class="form-group text-center">
                                            <button class="btn btn-outline-success" class="form-control"
                                                type="submit">Submit</button>
                                        </div>
                                    </td>
                                </tr>
                            </form>

                            <form action="{{ url('updateJadwal') }}" method="post">
                                @csrf
                                <tr>
                                    <td style="width: 200px">{{ $prestasi->Jalur_pendaftaran }}</td>
                                    <input type="hidden" name="Jalur_pendaftaran"
                                        value="{{ $prestasi->Jalur_pendaftaran }}">
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
                                                type="submit">Submit</button>
                                        </div>
                                    </td>
                                </tr>
                            </form>

                            <form action="{{ url('updateJadwal') }}" method="post">
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
                                            <button class="btn btn-outline-success" class="form-control"
                                                type="submit">Submit</button>
                                        </div>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

@endsection
