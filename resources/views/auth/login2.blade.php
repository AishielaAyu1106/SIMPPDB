{{-- @extends('auth.layout.main') --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">





<link href="{{asset('bootstrap/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/sign-in/signin.css')}}" rel="stylesheet">
    {{-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> --}}
    {{-- <link href="{{asset('bootstrap/sign-in/registrasi.css')}}" rel="stylesheet"> --}}
  </head>

  <body class="text-center">
    <div class="container">
        <div class="session">
            <div class="left">
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <img class="mb-4" src="{{ asset('css/Logo SMAN 1 Bengalon.PNG') }}" alt="" width="150" height="150">
                <h4><span>Selamat Datang Calon Peserta Didik Baru</span></h4>

                <div class="floating-label">
                    <input placeholder="Email" type="email" name="email" id="email" required
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
                    <input placeholder="Password" type="password" name="password" id="password" required
                        @if (Cookie::has('loginpassword')) value="{{ Cookie::get('loginpassword') }}" @endif autocomplete="off">
                    <label for="password">Password:</label>
                </div>


                <div class="col d-flex m-auto ">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                            id="form1Example3" name="rememberme"/>
                        <label class="form-check-label" for="form1Example3"> Remember me </label>

                    </div>

                    <div class="text-end">
                        <button type="submit">Log in</button>
                    </div>
                </div>







                <small class="d-block text-center mt-3">Belum Memiliki akun? <a href="/register">Daftar Sekarang!</a></small>
                <small><a class="small" href="forgot-password.html">Forgot Password?</a></small>
                {{-- <div class="text-center"> --}}

                {{-- </div> --}}
            </form>
        </div>
    </div>

    <script src="{{asset('bootstrap/assets/dist/js/bootstrap.bundle.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="{{asset('bootstrap/dashboard/dashboard.js')}}"></script>


  </body>
</html>




{{-- @section('container')

    <div class="session">
        <div class="left">
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img class="mb-4" src="{{ asset('css/Logo SMAN 1 Bengalon.PNG') }}" alt="" width="150" height="150">
            <h4><span>Selamat Datang Calon Peserta Didik Baru</span></h4>

            <div class="floating-label">
                <input placeholder="Email" type="email" name="email" id="email" required
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
                <input placeholder="Password" type="password" name="password" id="password" required
                    @if (Cookie::has('loginpassword')) value="{{ Cookie::get('loginpassword') }}" @endif autocomplete="off">
                <label for="password">Password:</label>
            </div>


            <div class="col d-flex m-auto ">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"
                        id="form1Example3" name="rememberme"/>
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
                <div class="text-end">
                    <button type="submit">Log in</button>
                </div>
            </div>







            <small class="d-block text-center mt-3">Belum Memiliki akun? <a href="/register">Daftar Sekarang!</a></small>
        </form>
    </div>

@endsection --}}


