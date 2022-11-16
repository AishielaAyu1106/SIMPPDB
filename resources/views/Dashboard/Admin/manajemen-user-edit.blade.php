@extends('Dashboard.Admin.Layout.index')

@section('container')
<section class="p-4 mt-4">
<div class="card card-body mt-5 p-4 shadow-sm ">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-dark ">EDIT USER {{ $user->name }}</h5>
    </div>
    {{-- <div class="card card-body mt-5">
        <h3>Edit User </h3> --}}

        <form method="POST" action="/data-admin-edit/{{$user->id}}" class="update-data-swift-allert-example">
            {{-- @method('put') --}}
            @csrf

            <div class="row mb-3 g-3 mt-5">
                {{-- kolom --}}
                <div class="col-md">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="name" name="name" id="name" value="{{ old('name', $user->name) }}">

                    {{-- menampilkan pesan error --}}
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- kolom --}}
                <div class="col-md">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" id="email" value="{{ old('email', $user->email) }}">

                    {{-- menampilkan pesan error --}}
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md">
                    <label for="password" class="form-label">Password (opsional)</label>
                    <div class="input-group">
                        <input type="password" placeholder="password" name="password" id="password" class="form-control">

                        {{-- <span class="input-group-text bg-white"><i class="toggle-pass"></i></span> --}}
                    </div>
                    <small id="passHelper" class="form-text text-muted font-weight-bold">Isi jika ingin mengganti password</small>
                </div>
            </div>

            <div class="form-group">
                {{-- <label class="agama text-dark"> Nomor Pendaftaran</label> --}}
                <input value="admin" name="role" type="hidden">
                {{-- <input type="text" name="Nomor_Pendaftaran" class="form-control" id="nodaftar"
                    value="{{ old('Nomor_Pendaftaran') }}" placeholder value> --}}
            </div>
            {{-- <div class="row">
                <div class="col-md">
                    <label class="mb-1">Roles</label>
                    @foreach($roles as $role)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="roles[]" value="{{$role->id}}" id="roles{{$loop->iteration}}" {{(is_array(old('roles', $user->roles->pluck('id')->toArray())) and in_array($role->id, old('roles', $user->roles->pluck('id')->toArray()))) ? 'checked' : ''}}>
                        <label class="form-check-label fw-normal text-dark" for="roles{{ $loop->iteration }}">
                            {{ $role->name }}
                        </label>
                    </div>

                    @endforeach
                    @error('roles')
                    <small class="text-danger font-weight-bold">
                        {{ $message }}
                    </small>
                    @enderror
                    <small id="roleHelper" class="form-text text-muted font-weight-bold">Pilih role sesuai dengan hak akses yang ingin diberikan</small>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-md text-end">
                    <button class="btn btn-outline-success btn-sm">Update</button>
                </div>
            </div>

        </form>
    </div>
</div>
</section>
@endsection
