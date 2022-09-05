@extends('auth.layout.main')
@section('container')

    <div class="session">
      <div class="left">

      </div>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <img class="mb-4" src="{{asset('css/Logo SMAN 1 Bengalon.PNG')}}" alt="" width="150" height="150">
        <h4><span>Selamat Datang Calon Peserta Didik Baru</span></h4>
        {{-- <p>Login and start a productive day!</p> --}}
        <div class="floating-label">
          {{-- <input placeholder="Email" type="email" name="email" id="email" autocomplete="off" @if(Cookie::has('loginemail')) value="{{Cookie::get('loginemail')}}"@endif> --}}
          <input placeholder="Email" type="email" name="email" id="email" class="@error('email')
              is-invalid
          @enderror" @if(Cookie::has('loginemail')) value="{{Cookie::get('loginemail')}}"@endif autocomplete="off">
          <label for="email">Email:</label>
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="floating-label">
          {{-- <input placeholder="Password" type="password" name="password" id="password" autocomplete="off" @if(Cookie::has('loginpassword')) value="{{Cookie::get('loginpassword')}}"@endif> --}}
          <input placeholder="Password" type="password" name="password" id="password" @if(Cookie::has('loginpassword')) value="{{Cookie::get('loginpassword')}}"@endif autocomplete="off">
          <label for="password">Password:</label>
        </div>

        {{-- <div class="row mb-4"> --}}
            <div class="col d-flex justify-content-center">

              <div class="form-check">
                <input class="form-check-input" type="checkbox" @if(Cookie::has('loginemail')) checked @endif id="form1Example3" name="rememberme" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
              </div>
            </div>



        <button type="submit" >Log in</button>
        <small class="d-block text-center mt-3">Belum Memiliki akun? <a href="/register">Daftar Sekarang!</a></small>
      </form>
    </div>

{{-- <main class="form-signin w-100 m-auto">




<div class="card">
    <div class=" card-body">
        <form action="/">
            <img class="mb-4" src="{{asset('css/login-ilustrasi')}}" alt="" width="150" height="150">
        </form>
    </div>


  <div class=" card-body">
    <form action="/" method="post">
      @csrf
      <img class="mb-4" src="{{asset('css/Logo SMAN 1 Bengalon.PNG')}}" alt="" width="150" height="150">
      <h1 class="h3 mb-3 fw-normal">Login</h1>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" autofocus>
        <label for="floatingInput">Masukkan Email</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" autofocus>
        <label for="floatingPassword">Masukkan Password</label>
      </div>


      <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
      <div class="checkbox mb-3">
          {{-- <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label> --

{{-- </main> --}}
@endsection
