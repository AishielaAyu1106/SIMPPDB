@extends('Dashboard.Admin.Layout.index')

@section('container')
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        {{-- <form action="/kuota-kelas-lihat" method="POST"> --}}
        {{-- @csrf --}}

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
                        @foreach ($kelas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="width: 300px">{{ $item->Nama_Kelas }}</td>
                                <td style="width: 500px">{{ $item->Kuota_kelas }}</td>
                                {{-- <td style="width: 100px"><a href="/data-pendaftar/show/{{ $form->id }}"
                                            class="btn btn-success">Lihat</a></td> --}}
                                {{-- <td style="width: 100px"><a href="/edit-formulir-pendaftaran/{{$form->id}}" class="btn btn-primary">Edit</a></td> --}}
                                <td style="width: 200px">
                                    <div class="row">
                                        <form class="delete-data-swift-allert-example" action="{{ route('kuota-kelas.destroy', $item->id) }}" method="post">
                                        <a href="{{ route('kuota-kelas.edit', $item->id) }}" class="col btn btn-warning">edit</a>
                                            @method('DELETE')
                                            @csrf
                                            <button class="col btn btn-danger">hapus</button>
                                        </form>

                                    </div>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- </form> --}}
    </div>
@endsection