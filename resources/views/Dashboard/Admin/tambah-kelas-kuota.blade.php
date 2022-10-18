@extends('Dashboard.Admin.Layout.index')

@section('container')
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        {{-- <form action="/kuota-kelas-lihat" method="POST"> --}}
            {{-- @csrf --}}
            <h3 align='center'>Tambah Kelas</h3>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kelas</th>
                                <th scope="col">Kuota Kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Kelas as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="width: 300px">{{ $item->Nama_Kelas }}</td>
                                    <td style="width: 500px">{{ $item->Kuota_kelas }}</td>
                                    {{-- <td style="width: 100px"><a href="/data-pendaftar/show/{{ $form->id }}"
                                            class="btn btn-success">Lihat</a></td> --}}
                                    {{-- <td style="width: 100px"><a href="/edit-formulir-pendaftaran/{{$form->id}}" class="btn btn-primary">Edit</a></td> --}}
                                    <td style="width: 100px"><a href="/kuota-kelas-lihat"
                                            class="btn btn-danger delete-data-swift-allert-example">Hapus</a></td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        {{-- </form> --}}
    </div>
@endsection
