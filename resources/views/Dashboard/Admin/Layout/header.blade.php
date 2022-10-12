<!-- Navbar -->
<div class="card mb-4 sm-lg-4">
    <div class="card-body ">
        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbarMain">
            <ul class="navbar-nav ms-auto">
                <div class="dropdown">
                    <span type="button" class="d-flex align-items-center" id="dropdownUser" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> <img
                            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" width="35" class="me-1" />
                        <span class="mx-1 fw-bold"></span> <i class="fas fa-caret-down fa-fw"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="dropdownUser">
                        <small class="dropdown-item-text text-muted font-weight-bold">{{ Auth::user()->email }}</small>

                        {{-- <a class="dropdown-item" href="{{url('profile-siswa/'.$main->id)}}">My Profil <i --}}
                        <a class="dropdown-item" href="{{url('profile-admin')}}">My Profil <i
                                class="fas fa-share"></i></a>
                        <form action="{{ url('logout') }}" method="GET">
                            @csrf
                            <button class="dropdown-item text-danger">Logout <i class="fas fa-share"></i></button>
                        </form>
                    </div>
                </div>
            </ul>
        </nav>
    </div>
</div>
