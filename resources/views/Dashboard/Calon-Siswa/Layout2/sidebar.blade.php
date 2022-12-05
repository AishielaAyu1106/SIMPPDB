<div id="wrapper">
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" style="background-color:rgb(255, 243, 245)">


    {{-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html" >
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
            <img src="{{ url('css/Logo SMAN 1 Bengalon.PNG') }}" alt="itk" class="d-block w-50 m-auto p-2">
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a> --}}

<!-- Sidebar - Brand -->
    <a href="#">
        <img src="{{ url('css/Logo SMAN 1 Bengalon.png') }}" alt="smansabengalon" class="d-block w-50 m-auto p-2">
    </a>

    <h6 class="text-center">Sistem Informasi PPDB</h6>
    <h6 class="text-center ">SMAN 1 Bengalon</h6>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item " >
        <a class="nav-link {{ Request::is('dashboard-siswa') ? 'active' : '' }}" href="/dashboard-siswa">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">

    </div>

    <!-- Nav Item - Pages Collapse Menu -->


    <li class="nav-item">
        <a class="nav-link {{ Request::is('pengumuman-siswa') ? 'active' : '' }}" href="/pengumuman-siswa">
            <i class="fas fa-fw fa-save"></i>
            <span>Pengumuman</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('formulir-pendaftaran-siswa') ? 'active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-file"></i>
            <span>Formulir Pendaftaran</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Utilities:</h6> --}}
                <a class="collapse-item" href="/formulir-pendaftaran-siswa/formulir?id=Afirmasi">Afirmasi</a>
                <a class="collapse-item" href="/formulir-pendaftaran-siswa/formulir?id=Prestasi">Prestasi</a>
                <a class="collapse-item" href="/formulir-pendaftaran-siswa/formulir?id=Zonasi">Zonasi</a>
                {{-- <a class="collapse-item" href="utilities-other.html">Other</a> --}}
            </div>
        </div>
    </li>
    {{-- <div class="btn-group">
        <a class="nav-link dropdown-toggle {{ Request::is('formulir-pendaftaran-siswa') ? 'active' : '' }}"
            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            href="">
            <span data-feather="file-text" class="align-text-bottom"></span>

        </a>
        <div class="dropdown-menu">
            <a href="/formulir-pendaftaran-siswa/formulir?id=Afirmasi" class="dropdown-item"
                aria-labelledby="dropdownMenuButton">Afirmasi</a>
            <a href="/formulir-pendaftaran-siswa/formulir?id=Prestasi" class="dropdown-item"
                aria-labelledby="dropdownMenuButton">Prestasi</a>
            <a href="/formulir-pendaftaran-siswa/formulir?id=Zonasi" class="dropdown-item"
                aria-labelledby="dropdownMenuButton">Zonasi</a>

        </div>
    </div> --}}

    <li class="nav-item">
        <a class="nav-link {{ Request::is('rekap-nilai-siswa') ? 'active' : '' }}" href="/rekap-nilai-siswa/formulir">
            <i class="fas fa-fw fa-clipboard"></i>
            <span> Rekap Nilai</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('download-panduan-siswa') ? 'active' : '' }}" href="/download-panduan-siswa">
            <i class="fas fa-fw fa-folder"></i>
            <span> Download Panduan</span></a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link {{ Request::is('rekap-nilai-admin') ? 'active' : '' }}" href="/rekap-nilai-admin">
            <i class="fas fa-fw fa-list"></i>
            <span> Rekap Nilai</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('pengumuman') ? 'active' : '' }}" href="/pengumuman">
            <i class="fas fa-fw fa-folder"></i>
            <span> Pengumuman</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('data-admin') ? 'active' : '' }}" href="/data-admin">
            <i class="fas fa-fw fa-user"></i>
            <span> Manajemen User</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('upload-panduan') ? 'active' : '' }}" href="/upload-panduan">
            <i class="fas fa-fw fa-file"></i>
            <span> Upload Panduan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('info-pendaftaran') ? 'active' : '' }}" href="/info-pendaftaran">
            <i class="fas fa-fw fa-list"></i>
            <span> Informasi Pendaftaran</span></a>
    </li> --}}


    {{-- <li class="nav-item">
        <a class="nav-link collapsed " href="/jadwal-pendaftaran" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Jadwal Pendaftaran</span>
        </a> --}}
        {{-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div> --}}
    {{-- </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Addons
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> --}}

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item active">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

{{-- <nav id="sidebarMenu" class=" col-lg-2 d-md-block sidebar collapse" style="background-color:rgb(255, 243, 245)">
    <nav id="sidebar">
        <a href="#">
            <img src="{{ url('css/Logo SMAN 1 Bengalon.PNG') }}" alt="itk" class="d-block w-50 m-auto p-2">
        </a>

        <h6 class="text-center">Sistem Informasi PPDB</h6>
        <h6 class="text-center ">SMAN 1 Bengalon</h6>
    </nav>
    <div class="position-sticky pt-20">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('jadwal-pendaftaran') ? 'active' : '' }}"
                        href="/jadwal-pendaftaran">
                        <span data-feather="clipboard" class="align-text-bottom"></span>
                        Jadwal Pendaftaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kuota-kelas') ? 'active' : '' }}" href="/kuota-kelas">
                        <span data-feather="save" class="align-text-bottom"></span>
                        Kuota Kelas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('data-pendaftar') ? 'active' : '' }}" href="/data-pendaftar">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Data Pendaftaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('rekap-nilai-admin') ? 'active' : '' }}" href="/rekap-nilai-admin">
                        <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                        Rekap Nilai
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pengumuman') ? 'active' : '' }}" href="/pengumuman">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Pengumuman
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('data-admin') ? 'active' : '' }}" href="/data-admin">
                        <span data-feather="save" class="align-text-bottom"></span>
                        Manajemen User
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::is('upload-panduan') ? 'active' : '' }}" href="/upload-panduan">
                        <span data-feather="upload" class="align-text-bottom"></span>
                        Upload Panduan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('info-pendaftaran') ? 'active' : '' }}" href="/info-pendaftaran">
                        <span data-feather="clipboard" class="align-text-bottom"></span>
                        Informasi Pendaftaran
                    </a>
                </li>
            </ul>

            </li>
            </ul>
        </div>
</nav> --}}
