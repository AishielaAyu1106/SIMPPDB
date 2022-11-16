@extends('auth.layout.main')
@section('container')
    <div class="session">
        <div class="left" autocomplete="off" class="registrasi">
            <form method="POST" action="{{ route('register') }}">
                <img class="mb-4" src="{{ asset('css/Logo SMAN 1 Bengalon.PNG') }}" alt="" width="150"
                    height="150">
                <h3>Form Registrasi</h3>
                @csrf
                <div class="floating-label">
                    <input placeholder="Name" type="text" name="name" id="name" autocomplete="off">
                    <label for="name">Name:</label>
                </div>
                <div class="floating-label">
                    <input placeholder="Email" type="email" name="email" id="email" autocomplete="off">
                    <label for="email">Email:</label>
                </div>
                <div class="floating-label">
                    <input placeholder="Password" type="password" name="password" id="password" autocomplete="off">
                    <label for="password">Password:</label>
                </div>
                <div class="form-group">
                    <input type="hidden" name="role" value="calon-siswa">
                </div>
                <div class="button">
                    <button type="submit">Registrasi</button>
                </div>

                <small class="d-block text-center mt-3">Sudah Memiliki akun? <a href="/">Login</a></small>
            </form>
        </div>


    </div>
@endsection
