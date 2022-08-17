@extends('Dashboard.Admin.Layout.index')

@section('container')

<section style="background-color: #eee;  text-center">
    <form method="POST" action="/jadwal-pendaftaran" class="pl-3 pr-3" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
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
        </div>

        <div class="card mt-4">
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
                {{-- <td style="width: 500px" >{{ $form->NISN}}</td> --}}
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
</section>



@endsection
