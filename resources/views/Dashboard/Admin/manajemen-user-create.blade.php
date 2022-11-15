@extends('Dashboard.Admin.Layout.index')

@section('container')
    <section class="p-4 mt-4">
        <div class="card card-body mt-5 shadow-sm">
            <div class="card-header py-3 mb-4">
                <h5 class="m-0 font-weight-bold text-dark">TAMBAH USER</h5>
            </div>

            <form method="POST" action="/data-admin-create">
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

                        <span class="input-group-text bg-white"><i class="toggle-pass"></i></span>
                    </div>
                    <small id="passHelper" class="form-text text-muted font-weight-bold">Isi password minimal 5 karakter</small>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <label class="mb-1">Roles</label>
                    @foreach ($roles as $role)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="roles[]" value="{{$role->id}}" id="roles{{$loop->iteration}}" {{(is_array(old('roles')) and in_array($role->id, old('roles'))) ? 'checked' : ''}}>
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
                    {{-- <small id="roleHelper" class="form-text text-muted font-weight-bold">Pilih role sesuai dengan hak akses yang ingin diberikan</small> --}}
                </div>
            </div>

            <div class="row">
                            <div class="col-md text-end">
                                <button class="btn btn-success">Simpan</button>
                            </div>
                        </div>

            </form>
        </div>
    </section>
@endsection
