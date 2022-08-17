<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
    <div class="position-sticky pt-10">
        <span class="logo text-center">
            <img src="{{asset('css/Logo SMAN 1 Bengalon.PNG')}}" alt="" width="100">
            <h4>SIM PPDB</h4>
        </span>
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('pengumuman')? 'active' : ''}}" href="/pengumuman">
            <span data-feather="file" class="align-text-bottom"></span>
            Pengumuman
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('data-pendaftar') ? 'active' : ''}}" href="/data-pendaftar">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Data Pendaftar
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('data-admin') ? 'active' : ''}}" href="/data-admin">
            <span data-feather="save" class="align-text-bottom"></span>
            Data Admin
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('rekap-nilai') ? 'active' : ''}}" href="/rekap-nilai">
            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
            Rekap Nilai
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('upload-panduan') ? 'active' : ''}}" href="/upload-panduan">
            <span data-feather="upload" class="align-text-bottom"></span>
            Upload Panduan
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Request::is('jadwal-pendaftaran') ? 'active' : ''}}" href="/jadwal-pendaftaran">
              <span data-feather="clipboard" class="align-text-bottom"></span>
              Jadwal Pendaftaran
            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link {{Request::is('info-pendaftaran') ? 'active' : ''}}" href="/info-pendaftaran">
              <span data-feather="clipboard" class="align-text-bottom"></span>
              Informasi Pendaftaran
            </a>
          </li>
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
