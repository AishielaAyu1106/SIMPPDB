@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')

<form action="/rekap-nilai-siswa" method="POST">
  @csrf
  {{-- <h2>Section title</h2> --}}

  <div class="content mb-3">

          {{-- <a href="/formulir-pendaftaran-siswa/tambah" class="btn btn-primary btn-rounded fs-18 mt-100">Daftar Seleksi</a> --}}

  </div>

    <div class="card">
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nilai</th>
              <th scope="col">Jenis Prestasi</th>
              <th scope="col">tingkat</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($submit as $rekap)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td style="width: 200px" >{{ $rekap->basing}}</td>
              <td style="width: 500px" >{{ $rekap->jenis_prestasi}}</td>
              <td style="width: 500px" >{{ $rekap->tingkat}}</td>
              {{-- <td style="width: 500px" >{{ $rekap->NISN}}</td> --}}
              <td style="width: 100px"><a href="/rekap-nilai-siswa/show/{{$rekap->id}}" class="btn btn-success">Lihat</a></td>
              <td style="width: 100px"><a href="/edit-rekap-nilai-siswa/{{$rekap->id}}" class="btn btn-primary">Edit</a></td>
              <td style="width: 100px"><a href="/rekap-nilai-siswa/delete/{{$rekap->id}}" class="btn btn-danger">Hapus</a></td>


            </tr>


            @endforeach
          </tbody>
        </table>
      </div>
    </div>

</form>


@endsection
