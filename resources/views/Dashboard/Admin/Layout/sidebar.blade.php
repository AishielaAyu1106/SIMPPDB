

<nav id="sidebarMenu" class=" col-lg-2 d-md-block sidebar collapse" style="background-color:rgb(255, 243, 245)">
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
</nav>
