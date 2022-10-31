<!-- Navbar -->
<div class="container">
    <div class="row">
        <div class="col col-sm-11 ">
            <div class="card mt-2 " style="left:11.5rem ">
                {{-- <div class="card-body "> --}}
                <nav class="navbar navbar-expand-lg navbar-light" id="navbarMain">
                    <ul class="navbar-nav ms-auto">
                        <div class="container-fluid">
                            <form class="d-flex me-4">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>

                        <div class="dropdown mt-2" >
                            <span type="button" class="d-flex align-items-center" id="dropdownUser" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <img
                                    src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" width="35" class="me-1" />
                                <span class="mx-1 fw-bold me">{{ Str::of(Auth::user()->name)->words('2', '') }}</span> <i
                                    class="fas fa-caret-down fa-fw me-2"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="dropdownUser">
                                <small class="dropdown-item-text text-muted font-weight-bold">{{ Auth::user()->email }}</small>

                                <a class="dropdown-item" href="{{ url('profile-admin') }}">My Profil <i
                                        class="fas fa-share"></i></a>
                                <form action="{{ url('logout') }}" method="GET">
                                    @csrf
                                    <button class="dropdown-item text-danger">Logout <i class="fas fa-share"></i></button>
                                </form>
                            </div>
                        </div>
                    </ul>


                {{-- </nav> --}}
            </div>
            </div>
        </div>
    </div>
</div>








{{-- <div class="card-body mb-4"> --}}
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbarMain">

            <ul class="navbar-nav ms-auto">
                <div class="dropdown">
                    <span type="button" class="d-flex align-items-center" id="dropdownUser" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> <img
                            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" width="35" class="me-1" />
                        <span class="mx-1 fw-bold"></span> <i class="fas fa-caret-down fa-fw"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="dropdownUser">
                        <small class="dropdown-item-text text-muted font-weight-bold">{{ Auth::user()->email }}</small>


                        <a class="dropdown-item" href="{{url('profile-admin')}}">My Profil <i
                                class="fas fa-share"></i></a>
                        <form action="{{ url('logout') }}" method="GET">
                            @csrf
                            <button class="dropdown-item text-danger">Logout <i class="fas fa-share"></i></button>
                        </form>
                    </div>
                </div>
            </ul>

        </nav> --}}
</div>
</div>
