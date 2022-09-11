<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-10">
        <span class="logo text-center">
            <img src="{{ asset('css/Logo SMAN 1 Bengalon.PNG') }}" alt="" width="100">
            <h4>SIM PPDB</h4>
        </span>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard-siswa') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard-siswa">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pengumuman-siswa') ? 'active' : '' }}" href="/pengumuman-siswa">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Pengumuman
                </a>
            </li>
            {{-- baru --}}
            {{-- <li>
            <button class="nav-link" href="#">Formulir Pendaftaran</button>
            <ul class="dropdown-menu">
                <a href="#">Afirmasi</a>
            </ul>
        </li> --}}
            {{-- lama --}}

            <!-- Example single danger button -->
            <div class="btn-group">
                <a class="nav-link dropdown-toggle {{ Request::is('formulir-pendaftaran-siswa') ? 'active' : '' }}"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    href="">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Formulir Pendaftaran
                </a>
                {{-- <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Action
                </button> --}}
                <div class="dropdown-menu">
                    <a href="/formulir-pendaftaran-siswa/formulir?id=Afirmasi" class="dropdown-item"
                        aria-labelledby="dropdownMenuButton">Afirmasi</a>
                    <a href="/formulir-pendaftaran-siswa/formulir?id=Prestasi" class="dropdown-item"
                        aria-labelledby="dropdownMenuButton">Prestasi</a>
                    <a href="/formulir-pendaftaran-siswa/formulir?id=Zonasi" class="dropdown-item"
                        aria-labelledby="dropdownMenuButton">Zonasi</a>

                </div>
            </div>







            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('formulir-pendaftaran-siswa') ? 'active' : '' }}"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    href="">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Formulir Pendaftaran
                </a>
                <ul class="sub-menu"> --}}
                    {{-- @if (date('Y-m-d H:i:s') > $afirmasi->tanggal_awal && date('Y-m-d H:i:s') < $afirmasi->tanggal_akhir) --}}
                    {{-- <a href="/formulir-pendaftaran-siswa/formulir?id=Afirmasi" class="dropdown-item"
                        aria-labelledby="dropdownMenuButton">Afirmasi</a>
                    <a href="/formulir-pendaftaran-siswa/formulir?id=Prestasi" class="dropdown-item"
                        aria-labelledby="dropdownMenuButton">Prestasi</a>
                    <a href="/formulir-pendaftaran-siswa/formulir?id=Zonasi" class="dropdown-item"
                        aria-labelledby="dropdownMenuButton">Zonasi</a> --}}
                    {{-- @endif --}}

                {{-- </ul>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link {{ Request::is('cetak-bukti-siswa') ? 'active' : '' }}" href="/cetak-bukti-siswa">
                    <span data-feather="save" class="align-text-bottom"></span>
                    Cetak Bukti Pendaftaran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('rekap-nilai-siswa') ? 'active' : '' }}" href="/rekap-nilai-siswa/formulir">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Rekap Nilai
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('download-panduan-siswa') ? 'active' : '' }}"
                    href="/download-panduan-siswa">
                    <span data-feather="download" class="align-text-bottom"></span>
                    Download Panduan
                </a>
            </li>
            {{-- <li class="nav-item">
            <a class="nav-link {{Request::is('info-pendaftaran') ? 'active' : ''}}" href="/info-pendaftaran">
              <span data-feather="clipboard" class="align-text-bottom"></span>
              Informasi Pendaftaran
            </a>
          </li> --}}
        </ul>

        {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Saved reports</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Year-end sale
          </a> --}}
        </li>
        </ul>
    </div>
</nav>
