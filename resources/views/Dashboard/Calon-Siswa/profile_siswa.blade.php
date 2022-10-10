@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    {{-- <form action="{{ url('profile-siswa') }}" method="POST"> --}}
        <section class="vh-100" style="background-color: #ffffff;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-black"
                                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; background-color:rgb(255, 243, 245)">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                        alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                    <h5>{{$profile->nama_lengkap}}</h5>
                                    <p>Jalur Pendaftaran:</p>
                                    <button type="submit" class="btn btn-outline-secondary" data-toggle="modal"
                                        data-target="#exampleModal" data-whatever="Tolak Berkas Pendaftaran"><i
                                            class="far fa-edit mb-0">Edit</i>
                                    </button>

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h6>My Profile</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Email</h6>
                                                <p class="text-muted">info@example.com</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Nomor Pendaftaran</h6>
                                                <p class="text-muted">123 456 789</p>
                                            </div>
                                        </div>
                                        <h6>Lainnya </h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Asal Sekolah</h6>
                                                <p class="text-muted">Lorem ipsum</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Jenis Kelamin</h6>
                                                <p class="text-muted">Dolor sit amet</p>
                                            </div>
                                        </div>
                                        {{-- <div class="d-flex justify-content-start">
                                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- </form> --}}
@endsection
