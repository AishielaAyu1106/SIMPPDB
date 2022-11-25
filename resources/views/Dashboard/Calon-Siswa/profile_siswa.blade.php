@extends('Dashboard.Calon-Siswa.Layout2.index')

@section('container')
    <section class="vh-100">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-4">

                    <div class="card border border-left-info" style="border-radius: 15px;">
                        <h6 class="mt-4 font-weight-bold text-dark" align='center'>My Profile </h6>
                        <div class="card-body text-center">
                            <div class="mt-3 mb-4">
                                <img src="{{ asset('css/profile (1).svg') }}" class="rounded-circle img-fluid"
                                    style="width: 100px;" />
                            </div>
                            <h4 class="mb-2">{{ auth()->user()->name }}</h4>
                            <p class="text-muted mb-4">{{ Auth::user()->email }}<span class="mx-2">
                                </span> <a href="/formulir-pendaftaran-siswa"></a></p>

                            <a type="button" class="btn btn-primary btn-rounded btn-sm" href="/formulir-pendaftaran-siswa">
                                Lihat Selengkapnya
                            </a>
                            {{-- <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                <div>
                                    <p class="mb-2 h5">8471</p>
                                    <p class="text-muted mb-0">Wallets Balance</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-2 h5">8512</p>
                                    <p class="text-muted mb-0">Income amounts</p>
                                </div>
                                <div>
                                    <p class="mb-2 h5">4751</p>
                                    <p class="text-muted mb-0">Total Transactions</p>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- <section class="vh-100" style="background-color: #ffffff;">
        <div class="container mt-5 ">
            <div class="row d-flex p-5 justify-content-center align-items-center h-100" style="shadow-sm">
                <div class="col col-md-4">
                    <div class="card mb-3" style="border-radius: .5rem; shadow-sm">

                        <div class="row g-0">
                            <div class="col-md-20  text-center text-black"
                                style="border-top-left-radius: .10rem; border-bottom-left-radius: .10rem; background-color:rgb(255, 255, 255)  ">
                                <img src="{{ asset('css/profile (1).svg') }}"
                                    alt="Avatar" class="img-fluid my-5" style="width: 80px; right:50rem" />
                                <h5>Nama: {{ auth()->user()->name }}</h5>


                            </div>
                            <div class="col-md-20">
                                <div class="card-body p-4">
                                    <h6>My Profile</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ Auth::user()->email }}</p>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
