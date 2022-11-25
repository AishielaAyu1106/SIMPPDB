@extends('Dashboard.Admin.Layout2.index')

@section('container')
<section class="p-4">
    <div class="card card-body mt-5 p-4 shadow-sm">
        <div class="card-body">

            <h3 class="m-0 font-weight-bold text-dark mb-2">Tambah User</h3>
            <hr>

    </div>

            <form method="POST" action="/data-admin-create" class="submit-button-swift-allert-example">
                @csrf

                <div class="row mb-3 g-3">
                    {{-- kolom --}}
                    <div class="col-md">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="name"
                            name="name" id="name" value="{{ old('name') }}">

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
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email"
                            name="email" id="email" value="{{ old('email') }}">

                        {{-- menampilkan pesan error --}}
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" placeholder="password" name="password" id="password"
                                class="form-control @error('password') is-invalid @endif">

                            {{-- <span class="input-group-text bg-white"><i class="toggle-pass"></i></span> --}}
                        </div>
                        <small id="passHelper" class="form-text text-muted font-weight-bold">Isi password minimal 5
                            karakter</small>
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
                    @foreach ($role as $roles)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="role[]" value="{{$roles->role}}" id="" {{(is_array(old('role')) and in_array($roles->id, old('role'))) ? 'checked' : ''}}>
                        <label class="form-check-label fw-normal text-dark" for="role">
                            {{ $roles->role }}
                        </label>
                    </div>

                    @endforeach --}}
                {{-- @error('roles')
                    <small class="text-danger font-weight-bold">
                        {{ $message }}
                    </small>
                    @enderror --}}
                {{-- <small id="roleHelper" class="form-text text-muted font-weight-bold">Pilih role sesuai dengan hak akses yang ingin diberikan</small> --}}
                {{-- </div> --}}
                {{-- </div> --}}


                <div class="row">
                    <div class="col-md text-end">
                        <button class="btn btn-outline-success">Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
