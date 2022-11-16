@extends('Dashboard.Admin.Layout.index')

@section('container')
<section class="p-4 mt-4">
    {{-- @section('internal-content') --}}
    <div class="card card-body mt-5 p-4 shadow-sm">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-dark">DAFTAR USER</h5>
        </div>
        {{-- <h3>Daftar User</h3> --}}

        <div class="row my-3">
            <div class="col-md text-end">
                <a href="{{ url('data-admin-create') }}" class="btn btn-success">Tambah User</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table" id="tableManUser">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td class="text-center" style="vertical-align: middle">
                                <form action="/data-admin-delete/{{ $user->id }}" method="POST" class="delete-data-swift-allert-example">
                                    @csrf

                                    <a href='/data-admin-edit/{{ $user->id }}' class="btn btn-outline-success btn-sm"><i
                                        class="fa fa-pencil-square"></i> Edit</a>

                                <button class="btn btn-outline-danger btn-sm delete-data" data-bs-toggle="modal"
                                    data-bs-target="#modalHapusData" data-name="user {{ $user->name }}"
                                    data-url=''><i class="fas fa-trash-alt"></i>
                                    Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- @include('helper.modal_delete')
    </div>  --}}
</section>
    @endsection

    @push('javascript')
        <script>
            $('#tableManUser').dataTable();
        </script>
    @endpush
