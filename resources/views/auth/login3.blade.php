<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB smansabengalon - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img class="mb-4" src="{{ asset('css/Logo SMAN 1 Bengalon.PNG') }}" alt="" width="150"
                    height="150">
                                        <h1 class="h4 text-gray-900 mb-4">Penerimaan Peserta Didik Baru SMAN 1 Bengalon!</h1>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp" name="email"
                                                placeholder="Enter Email Address..." class="@error('email')
                                                is-invalid
                                            @enderror"
                                                      @if (Cookie::has('loginemail')) value="{{ Cookie::get('loginemail') }}" @endif
                                                      autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password" id="password" required
                                                @if (Cookie::has('loginpassword')) value="{{ Cookie::get('loginpassword') }}" @endif
                                                autocomplete="off">
                                        </div>


                                        {{-- <div class="floating-label">
                                            <input placeholder="Email" type="email" name="email" id="email" required class="@error('email')
                                          is-invalid
                                      @enderror"
                                                @if (Cookie::has('loginemail')) value="{{ Cookie::get('loginemail') }}" @endif
                                                autocomplete="off">
                                            <label for="email">Email:</label>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div> --}}
                                        {{-- <div class="floating-label">
                                            <input placeholder="Password" type="password" name="password" id="password" required
                                                @if (Cookie::has('loginpassword')) value="{{ Cookie::get('loginpassword') }}" @endif
                                                autocomplete="off">
                                            <label for="password">Password:</label>
                                        </div> --}}
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck" name="remember_token">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button href="" class="btn btn-success btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        {{-- <a href="" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                                    </form>
                                    {{-- <hr> --}}
                                    <div class="text-center">
                                        <a class="small" href="forgot-password">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="/register">Daftar Sekarang!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
