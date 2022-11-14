<!-- Navbar -->

<div class="container">
    <div class="row">
        <div class="col col-sm-11 ">
            <div class="card mt-2 " style="left:11.5rem ">
                <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbarMain">
                    <ul class="navbar-nav ms-auto">
                        <div class="container-fluid">
                            <form class="d-flex me-4">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="dropdown">
                            <span type="button" class="d-flex align-items-center" id="dropdownUser"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
                                    src="{{ asset('css/profile (1).svg') }}" width="35"
                                    class="me-1 mt-2" />
                                    <span class="mx-1 fw-bold me">{{ Str::of(Auth::user()->name)->words('2', '') }}</span> <i
                                    class="fas fa-caret-down fa-fw me-2"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="dropdownUser">
                                <small
                                    class="dropdown-item-text text-muted font-weight-bold">{{ Auth::user()->email }}</small>

                                {{-- <a class="dropdown-item" href="{{url('profile-siswa/'.$main->id)}}">My Profil <i --}}
                                <a class="dropdown-item" href="{{ url('profile-siswa') }}">My Profil <i
                                        class="fas fa-share"></i></a>
                                <form action="{{ url('logout') }}" method="GET">
                                    @csrf
                                    <button class="dropdown-item text-danger">Logout <i
                                            class="fas fa-share"></i></button>
                                </form>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="15"
                    alt="MDB Logo" loading="lazy" />
            </a>
        </div>


        <div class="d-flex align-items-center">
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                    id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25"
                        alt="Black and White Portrait of a Man" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> --}}
