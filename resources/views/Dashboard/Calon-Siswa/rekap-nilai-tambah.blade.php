@extends('Dashboard.Calon-Siswa.Layout2.index')

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
              <th scope="col" class="text-center">No</th>
              <th scope="col" class="text-center">Nilai</th>
              <th scope="col" class="text-center">Jenis Prestasi</th>
              <th scope="col" class="text-center">Tingkat</th>
              <th scope="col" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($submit as $rekap)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td style="width: 200px" class="text-center" >{{ $rekap->basing}}</td>
              <td style="width: 500px" class="text-center" >{{ $rekap->jenis_prestasi}}</td>
              <td style="width: 500px" class="text-center" >{{ $rekap->tingkat}}</td>

              <td style="width: 100px"><a href="/rekap-nilai-siswa/show/{{$rekap->id}}" class="btn btn-outline-primary btn-sm"><i class="fa fa-eye"></i>Lihat</a></td>
              <td style="width: 100px"><a href="/edit-rekap-nilai-siswa/{{$rekap->id}}" class="btn btn-outline-success btn-sm"><i class="fa fa-pencil-square"></i>Edit</a></td>
              <td style="width: 100px"><a href="/rekap-nilai-siswa/delete/{{$rekap->id}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i>Hapus</a></td>
            </tr>


            @endforeach
          </tbody>
        </table>
      </div>
    </div>

</form>


@endsection
