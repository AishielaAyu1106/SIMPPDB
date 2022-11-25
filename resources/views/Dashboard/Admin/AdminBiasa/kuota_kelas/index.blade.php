@extends('Dashboard.Admin.Layout.index')

@section('container')
    <section class="p-4 mt-4">

        {{-- <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> --}}
            <div class="card card-body mt-5 p-4 shadow-sm">
                <div class="card-body">
                    <h3 class=" mb-2">Kuota Kelas</h3>
                    <hr>
                    <div class="row my-3">
                        <div class="col-md text-end">
                            <a href="/kuota-kelas/create" class="btn btn-success">Tambah Kelas</a>
                        </div>
                    </div>
                    {{-- <div class="btn-list mb-2" >
                        <a href="" class="btn btn-success">Tambah
                            Kelas</a>
                    </div> --}}

                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr  class="text-dark">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Kuota Kelas</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td >{{ $item->Nama_Kelas }}</td>
                                        <td >{{ $item->Kuota_kelas }}</td>
                                        {{-- <td style="width: 100px"><a href="/data-pendaftar/show/{{ $form->id }}"
                                                class="btn btn-success">Lihat</a></td> --}}
                                        {{-- <td style="width: 100px"><a href="/edit-formulir-pendaftaran/{{$form->id}}" class="btn btn-primary">Edit</a></td> --}}
                                        <td class="text-center" style="width: 200px">
                                            <div class="row">
                                                <form class="delete-data-swift-allert-example"
                                                    action="{{ route('kuota-kelas.destroy', $item->id) }}" method="post">
                                                    <a href="{{ route('kuota-kelas.edit', $item->id) }}"
                                                        class="col btn btn-outline-warning btn-sm"><i class="fa fa-pen"></i> Edit</a>
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="col btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                                                </form>

                                            </div>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            {{-- </form> --}}
        </div>
    </section>
@endsection
