@extends('Dashboard.Admin.Layout.index')

@section('container')
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
                        <th width="150px" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    {{-- @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                <li>{{ $role->name }}</li>
                            @endforeach
                        </td>
                        <td class="text-center" style="vertical-align: middle">
                            <a href="{{ url('admin/manajemen-user/edit/'.$user->id) }}" class="btn btn-outline-success btn-sm"><i class="fa fa-pencil-square"></i> Edit</a>

                            {{-- fungsi untuk menampilkan modal dan mengoper data sesuai yang dipilih --}}
                            {{-- fungsi button ketika diklik terdapat di layout/script.blade.php --}}
                            {{-- <button class="btn btn-outline-danger btn-sm delete-data" data-bs-toggle="modal" data-bs-target="#modalHapusData" data-name="user {{$user->name}}" data-url="{{url('admin/manajemen-user/'.$user->id)}}"><i class="fas fa-trash-alt"></i> Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}
        {{-- @include('helper.modal_delete')
    </div>  --}}
@endsection

@push('javascript')
<script>
    $('#tableManUser').dataTable();
</script>
@endpush
