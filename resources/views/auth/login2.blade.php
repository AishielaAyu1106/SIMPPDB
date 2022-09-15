@extends('auth.layout.main')
@section('container')
    <div class="session">
        <div class="left">

        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img class="mb-4" src="{{ asset('css/Logo SMAN 1 Bengalon.PNG') }}" alt="" width="150" height="150">
            <h4><span>Selamat Datang Calon Peserta Didik Baru</span></h4>

            <div class="floating-label">
                <input placeholder="Email" type="email" name="email" id="email"
                    class="@error('email')
              is-invalid
          @enderror"
                    @if (Cookie::has('loginemail')) value="{{ Cookie::get('loginemail') }}" @endif autocomplete="off">
                <label for="email">Email:</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="floating-label">
                <input placeholder="Password" type="password" name="password" id="password"
                    @if (Cookie::has('loginpassword')) value="{{ Cookie::get('loginpassword') }}" @endif autocomplete="off">
                <label for="password">Password:</label>
            </div>


            <div class="col d-flex m-auto">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" @if (Cookie::has('loginemail')) checked @endif
                        id="form1Example3" name="rememberme" />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
                <button type="submit">Log in</button>
            </div>





            <small class="d-block text-center mt-3">Belum Memiliki akun? <a href="/register">Daftar Sekarang!</a></small>
        </form>
    </div>

@endsection


