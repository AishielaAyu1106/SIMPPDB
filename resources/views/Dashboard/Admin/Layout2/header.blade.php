<!-- Navbar -->


<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
            </form>

            <!-- Topbar Search -->
            {{-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form> --}}

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


                <div class="topbar-divider d-none d-sm-block"></div>


                <div class="dropdown mt-2">
                    <li class="nav-item dropdown no-arrow">
                        <span type="button" class="d-flex align-items-center" id="dropdownUser"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Str::of(Auth::user()->name)->words('2', '') }}</span>
                            <img class="img-profile rounded-circle" src="{{ asset('css/profile (1).svg') }}"
                                width="35" class="me-1" />
                            <i class="fas fa-caret-down fa-fw me-2"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="dropdownUser">
                            <small
                                class="dropdown-item-text text-muted font-weight-bold">{{ Auth::user()->email }}</small>

                            <a class="dropdown-item" href="{{ url('profile-admin') }}">My Profil <i
                                    class="fas fa-share"></i></a>
                            <form action="{{ url('logout') }}" method="GET">
                                @csrf
                                <button class="dropdown-item text-danger">Logout <i class="fas fa-share"></i></button>
                            </form>
                        </div>
                    </li>
                </div>
            </ul>

        </nav>

        {{-- <header class="topbar" data-navbarbg="skin6">
<div class="container">
    <div class="row">
        <div class="col col-sm-11 ">
            <div class="card mt-2 " style="left:11.5rem ">

                <nav class="navbar navbar-expand-lg navbar-light navbar-default navbar-fixed-top" id="navbarMain">

                    <ul class="navbar-nav ms-auto">
                        <div class="container-fluid">
                            <form class="d-flex me-4">
                                <input class="form-control me-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success btn-sm" type="submit">Search</button>
                            </form>
                        </div>

                        <div class="dropdown mt-2">
                            <span type="button" class="d-flex align-items-center" id="dropdownUser"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
                                    src="{{ asset('css/profile (1).svg') }}" width="35"
                                    class="me-1" />
                                <span class="mx-1 fw-bold me">{{ Str::of(Auth::user()->name)->words('2', '') }}</span>
                                <i class="fas fa-caret-down fa-fw me-2"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="dropdownUser">
                                <small
                                    class="dropdown-item-text text-muted font-weight-bold">{{ Auth::user()->email }}</small>

                                <a class="dropdown-item" href="{{ url('profile-admin') }}">My Profil <i
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
</header> --}}
