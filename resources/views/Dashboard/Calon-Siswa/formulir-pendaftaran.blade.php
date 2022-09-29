@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')

<form action="/formulir-pendaftaran-siswa" method="POST">
  @csrf

    <div class="card">
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nomor Pendaftaran</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Jalur Pendaftaran</th>
              <th scope="col">N I S N</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($forms as $form)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td style="width: 200px" >{{ $form->Nomor_Pendaftaran}}</td>
              <td style="width: 500px" >{{ $form->nama_lengkap}}</td>
              <td style="width: 500px" >{{ $form->Jalur_pendaftaran}}</td>
              <td style="width: 500px" >{{ $form->NISN}}</td>
              <td style="width: 100px"><a href="/formulir-pendaftaran-siswa/show/{{$form->id}}" class="btn btn-success">Lihat</a></td>
              <td style="width: 100px"><a href="/edit-formulir-pendaftaran/{{$form->id}}" class="btn btn-primary">Edit</a></td>
              <td style="width: 100px"><a href="/formulir-pendaftaran-siswa/delete/{{$form->id}}" class="btn btn-danger">Hapus</a></td>


            </tr>


            @endforeach
          </tbody>
        </table>
      </div>
    </div>

</form>


@endsection
