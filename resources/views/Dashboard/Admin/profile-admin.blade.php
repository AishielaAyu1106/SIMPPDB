@extends('Dashboard.Admin.Layout2.index')

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
                            </span> <a href="/data-admin"></a></p>

                        <a type="button" class="btn btn-primary btn-rounded btn-sm" href="/data-admin">
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
    {{-- <section class="mt-5 p-4" style="background-color: #ffffff;">

            <div class="container p-5 h-100 ">
                <h3 >Profile Admin </h3>
                <hr>
                <div class="row d-flex  justify-content-center align-items-center h-100 mt-4">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-black"
                                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; background-color:rgb(255, 243, 245)">
                                    <img src="{{ asset('css/profile (1).svg') }}" alt="Avatar" class="img-fluid my-5"
                                        style="width: 80px;" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h6>My Profile</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Email</h6>
                                                <p class="text-muted">{{ Auth::user()->email }}</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Nama: </h6>
                                                <p class="text-muted">{{ Auth::user()->role }}</p>
                                            </div>
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
