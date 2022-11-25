<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">




    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link href={{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{asset("css/sb-admin-2.min.css")}} rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href={{asset("vendor/datatables/dataTables.bootstrap4.min.css")}} rel="stylesheet">
</head>

<body id="page-top">



    {{-- <div class="container-fluid"> --}}
        {{-- <div class="row"> --}}
            @include('Dashboard.Calon-Siswa.Layout2.sidebar')
            @include('Dashboard.Calon-Siswa.Layout2.header')

            {{-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> --}}
                @yield('container')
            {{-- </main> --}}
        </div>
    </div>





    <script src="{{ asset('bootstrap/assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="{{ asset('bootstrap/dashboard/dashboard.js') }}"></script>
    <script src="https://kit.fontawesome.com/c2ff6e34d8.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.delete-data-swift-allert-example').bind('submit', function(e) {
            var form = this;

            e.preventDefault(); // <--- prevent form from submitting

            swal({
                title: "Apakah anda yakin?",
                text: "Data anda akan terhapus!",
                icon: "warning",
                buttons: [
                    'Tidak, Kembali',
                    'Ya, Hapus'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Sukses',
                        text: 'Data anda telah terhapus!',
                        icon: 'success'
                    }).then(function() {
                        form.submit(); // <--- submit form programmatically
                    });
                } else {
                    swal("Dibatalkan", "Data anda tersimpan :)", "error");
                }
            })
        });
    </script>
    @stack('scripts')

    <script>
        $('.submit-button-swift-allert-example').bind('submit', function(e) {
                    var form = this;
                    // e.preventDefault(); // <--- prevent form from submitting

                    swal({
                        title: "Success",
                        text: "Data anda berhasil disimpan!",
                        icon: "success",
                        button: "Oke!",
                    }).then(function() {
                        form.submit(); // <--- submit form programmatically
                    });
                });
    </script>
    @stack('scripts')

    <script>
        $('.update-data-swift-allert-example').bind('submit', function(e) {
            var form = this;

            e.preventDefault(); // <--- prevent form from submitting

            swal({
                title: "Apakah anda yakin?",
                text: "Data anda akan di update!",
                icon: "warning",
                buttons: [
                    'Tidak, Kembali',
                    'Ya, Update'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Sukses',
                        text: 'Data anda berhasil di update!',
                        icon: 'success'
                    }).then(function() {
                        form.submit(); // <--- submit form programmatically
                    });
                } else {
                    swal("Dibatalkan", "Data Anda Tersimpan :)", "error");
                }
            })
        });
    </script>
    @stack('scripts')

    <script>
        $('.tolak-data-swift-allert-example').bind('submit', function(e) {
            var form = this;

            e.preventDefault(); // <--- prevent form from submitting

            swal({
                title: "Apakah anda yakin?",
                text: "Berkas calon siswa akan ditolak!",
                icon: "warning",
                buttons: [
                    'Tidak, Kembali',
                    'Ya, Tolak'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Sukses',
                        text: 'Data berhasil ditolak!',
                        icon: 'success'
                    }).then(function() {
                        form.submit(); // <--- submit form programmatically
                    });
                } else {
                    swal("Dibatalkan", "Data anda tersimpan :)", "error");
                }
            })
        });
    </script>
    @stack('scripts')


    <script src={{asset("vendor/jquery/jquery.min.js")}}></script>
    <script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{asset("vendor/jquery-easing/jquery.easing.min.js")}}></script>

    <!-- Custom scripts for all pages-->
    <script src={{asset("js/sb-admin-2.min.js")}}></script>

    <!-- Page level plugins -->
    <script src={{asset("vendor/datatables/jquery.dataTables.min.js")}}></script>
    <script src={{asset("vendor/datatables/dataTables.bootstrap4.min.js")}}></script>

    <!-- Page level custom scripts -->
    <script src={{asset("js/demo/datatables-demo.js")}}></script>
</body>

</html>























{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div> --}}

{{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
