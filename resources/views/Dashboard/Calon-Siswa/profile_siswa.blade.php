@extends('Dashboard.Calon-Siswa.Layout.index')

@section('container')
    <section class="vh-100" style="background-color: #ffffff;">
        <div class="container">
            <h3 align="center" class="mt-4">My Profile</h3>
            <div class="row d-flex p-5 justify-content-center align-items-center h-100">
                <div class="col col-md-4">
                    {{-- <div class="col col-lg-6 mb-4 mb-lg-13"> --}}
                    <div class="card mb-3" style="border-radius: .5rem; shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-20  text-center text-black"
                                style="border-top-left-radius: .10rem; border-bottom-left-radius: .10rem; background-color:rgb(255, 255, 255)  ">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                    alt="Avatar" class="img-fluid my-5" style="width: 80px; right:50rem" />
                                <h5>Nama: {{ auth()->user()->name }}</h5>
                                {{-- <p>Jalur Pendaftaran:</p> --}}
                                <a type="submit" href="{{ url('profile-siswa-edit') }}" class="btn btn-outline-secondary"
                                    data-toggle="modal" data-target="#exampleModal"
                                    data-whatever="Tolak Berkas Pendaftaran"><i class="far fa-edit mb-0"></i>
                                </a>

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
                                        {{-- <div class="col-6 mb-3">
                                                <h6>Nomor Pendaftaran</h6>
                                                <p class="text-muted"></p>
                                            </div> --}}
                                    </div>
                                    {{-- <h6>Lainnya </h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1"> --}}
                                    {{-- <div class="col-6 mb-3">
                                                <h6>Asal Sekolah</h6>
                                                <p class="text-muted">Lorem ipsum</p>
                                            </div> --}}
                                    {{-- <div class="col-6 mb-3">
                                        <h6>Jenis Kelamin</h6>
                                        <p class="text-muted">Dolor sit amet</p>
                                    </div>
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
