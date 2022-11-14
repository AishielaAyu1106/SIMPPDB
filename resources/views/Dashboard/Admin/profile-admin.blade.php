@extends('Dashboard.Admin.Layout.index')

@section('container')
    <section class="mt-5 p-4" style="background-color: #ffffff;">
        {{-- <div class="card mt-5 p-4"> --}}
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

    </section>
@endsection
