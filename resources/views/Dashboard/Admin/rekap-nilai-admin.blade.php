@extends('Dashboard.Admin.Layout.index')
@section('container')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Afirmasi</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Prestasi</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Zonasi</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form action="/formulir-pendaftaran-siswa" method="POST">
            @csrf

              <div class="card">
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Matematika</th>
                        <th scope="col">Ilmu Pengetahuan Alam</th>
                        <th scope="col">Ilmu Pengetahuan Sosial</th>
                        <th scope="col">Bahasa Inggris</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($rekap as $rekap)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td style="width: 200px" >{{ $rekap->mtk??0}}</td>
                          <td style="width: 500px" >{{ $rekap->ipa??0}}</td>
                          <td style="width: 500px" >{{ $rekap->ips??0}}</td>
                          <td style="width: 500px" >{{ $rekap->basing??0}}</td>
                          <td style="width: 100px"><a href="/data-pendaftar/show/{{$rekap->id??0}}" class="btn btn-success">Lihat</a></td>

                          <td style="width: 100px"><a href="/data-pendaftar/delete/{{$rekap->id??0}}" class="btn btn-danger">Hapus</a></td>


                        </tr>


                        @endforeach
                      </tbody>
                  </table>
                </div>
              </div>

          </form>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <form action="/formulir-pendaftaran-siswa" method="POST">
            @csrf

              <div class="card">
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Matematika</th>
                        <th scope="col">Ilmu Pengetahuan Alam</th>
                        <th scope="col">Ilmu Pengetahuan Sosial</th>
                        <th scope="col">Bahasa Inggris</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($rekap as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td style="width: 200px" >{{ $item->mtk??0}}</td>
                          <td style="width: 500px" >{{ $item->ipa??0}}</td>
                          <td style="width: 500px" >{{ $item->ips??0}}</td>
                          <td style="width: 500px" >{{ $item->basing??0}}</td>
                          <td style="width: 100px"><a href="/data-pendaftar/show/{{$item->id??0}}" class="btn btn-success">Lihat</a></td>

                          <td style="width: 100px"><a href="/data-pendaftar/delete/{{$item->id??0}}" class="btn btn-danger">Hapus</a></td>


                        </tr>


                        @endforeach
                      </tbody>
                  </table>
                </div>
              </div>

          </form>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <form action="/formulir-pendaftaran-siswa" method="POST">
            @csrf

              <div class="card">
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Matematika</th>
                        <th scope="col">Ilmu Pengetahuan Alam</th>
                        <th scope="col">Ilmu Pengetahuan Sosial</th>
                        <th scope="col">Bahasa Inggris</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($rekap as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td style="width: 200px" >{{ $item->mtk??0}}</td>
                          <td style="width: 500px" >{{ $item->ipa??0}}</td>
                          <td style="width: 500px" >{{ $item->ips??0}}</td>
                          <td style="width: 500px" >{{ $item->basing??0}}</td>
                          <td style="width: 100px"><a href="/data-pendaftar/show/{{$item->id??0}}" class="btn btn-success">Lihat</a></td>

                          <td style="width: 100px"><a href="/data-pendaftar/delete/{{$item->id??0}}" class="btn btn-danger">Hapus</a></td>


                        </tr>


                        @endforeach
                      </tbody>
                </div>
              </div>

          </form>
    </div>
  </div>

@endsection

