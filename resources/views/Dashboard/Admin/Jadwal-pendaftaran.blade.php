{{-- @extends('Dashboard.Admin.Layout.index')

@section('container')
<form action="/jadwal-pendaftaran" method="POST">
    @csrf

    <div class="content mb-3">



    </div>

      <div class="card">
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kategori pendaftaran</th>
                <th scope="col">Tanggal Awal</th>
                <th scope="col">Tanggal Akhir</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($jadwal as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td style="width: 200px" >{{ $item->Jalur_pendaftaran}}</td>
                <td style="width: 500px" >{{ $item->tanggal_awal}}</td>
                <td style="width: 500px" >{{ $item->tanggal_akhir}}</td>

                <td style="width: 100px"><a href="/formulir-pendaftaran-siswa/show/{{$item->id}}" class="btn btn-success">Lihat</a></td>
                <td style="width: 100px"><a href="/edit-formulir-pendaftaran/{{$item->id}}" class="btn btn-primary">Edit</a></td>
                <td style="width: 100px"><a href="/formulir-pendaftaran-siswa/delete/{{$item->id}}" class="btn btn-danger">Hapus</a></td>

              </tr>


              @endforeach
            </tbody>
          </table>
        </div>
      </div>

  </form>

@endsection --}}


