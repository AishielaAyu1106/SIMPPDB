{{-- <!DOCTYPE html>
<html>

<head>
    <title>cetak data pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 align='center'>Pengumuman</h1>
    <h4 align='center'>Penerimaan Peserta Didik Baru SMAN 1 Bengalon</h4>
    <table class="table1" align='center'>

        <tr>

            <th>No</th>
            <th>Nama</th>
            <th>Nomor Pendaftaran</th>
            <th>Jalur Pendaftaran</th>
            <th>Status</th>
        </tr>
        @foreach ($cetakdata as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_lengkap }}</td>
            <td>{{ $item->Nomor_Pendaftaran }}</td>
            <td>{{ $item->Jalur_pendaftaran }}</td>
            <td>{{ $item->status }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html> --}}
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




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href={{ asset('vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{ asset('css/sb-admin-2.min.css') }} rel="stylesheet">
    <link href={{ asset('css/cetak_data_pendaftar.css') }} rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href={{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }} rel="stylesheet">
</head>

<body id="page-top">

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div id="invoice">
                    <div class="toolbar hidden-print">
                        {{-- <div class="text-end">
                            <button type="button" class="btn btn-dark"><i class="fa fa-print"></i> Print</button>
                            <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as
                                PDF</button>
                        </div> --}}
                        <hr>

                    </div>
                    {{-- <a href="#">
                        <img src="{{ url('css/Logo SMAN 1 Bengalon.PNG') }}" alt="itk" class="d-block w-50 m-auto p-2">
                    </a> --}}
                    <div class="invoice overflow-auto">
                        <div style="min-width: 600px">
                            <header>
                                <div class="row">
                                    <div class="col">
                                        <a href="javascript:;">
                                            <img src="assets/images/logo-icon.png" width="80" alt="">
                                        </a>
                                        <a> <img src="https://i.pinimg.com/originals/e9/46/d3/e946d375dcc9a8dd88a61828e65d45c0.png"
                                                alt="" width="100"></a>
                                    </div>

                                    <div class="col company-details">
                                        <h2 class="name">
                                            <a class="text-dark" target="_blank" href="javascript:;">
                                                SMAN 1 Bengalon
                                            </a>
                                        </h2>
                                        <div>Jl. Rw. Indah, Sepaso, Kec. Bengalon, Kabupaten Kutai Timur, Kalimantan
                                            Timur 75618</div>
                                        {{-- <div>(123) 456-789</div> --}}
                                        <div>smansabengalon@gmail.com</div>
                                    </div>
                                </div>
                            </header>
                            <main>
                                <div class="row contacts">
                                    <div class="col invoice-to">
                                        <div class="text-gray-light">
                                        </div>
                                        {{-- <h2 class="to">John Doe</h2>
                                        <div class="address">796 Silver Harbour, TX 79273, US</div>
                                        <div class="email"><a href="mailto:john@example.com">john@example.com</a>
                                        </div> --}}
                                    </div>
                                    <div class="col invoice-details" >
                                        <h1 class="invoice-id text-dark" >Data Pendaftaran Siswa</h1>
                                        {{-- <div class="date">Date of Invoice: 01/10/2018</div> --}}
                                        {{-- <div class="date">Due Date: 30/10/2018</div> --}}
                                    </div>
                                </div>
                                <table class="text-dark">
                                    <thead>
                                        <tr>


                                            <th>No</th>
                                            <th>Nama</th>
                                            {{-- <th>Nomor Pendaftaran</th> --}}
                                            <th>Jalur Pendaftaran</th>
                                            <th>Jenis kelamin</th>
                                            <th>NISN</th>
                                            <th>Sekolah Asal</th>
                                            <th>Tahun Lulus</th>
                                            <th>Nomor Hp</th>
                                            <th>Email</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($exportdata as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_lengkap }}</td>
                                                {{-- <td>{{ $item->Nomor_Pendaftaran }}</td> --}}
                                                <td>{{ $item->Jalur_pendaftaran }}</td>
                                                <td>{{ $item->Jenis_kelamin }}</td>
                                                <td>{{ $item->NISN }}</td>
                                                <td>{{ $item->Sekolah_asal }}</td>
                                                <td>{{ $item->Tahun_lulus }}</td>
                                                <td>{{ $item->nomor_hp_siswa }}</td>
                                                <td>{{ $item->email_siswa }}</td>
                                            </tr>
                                        @endforeach

                                        </tfoot>
                                </table>
                                {{-- <div class="thanks">Thank you!</div> --}}
                                <div class="notices">
                                    <div>Note:</div>
                                    <div class="notice"> Data ini adalah resmi dari SMAN 1 Bengalon</div>
                                </div>
                            </main>
                            <footer>
                            </footer>
                        </div>
                        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                        <div></div>
                    </div>
                </div>
            </div>
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


    <script src={{ asset('vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ asset('vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset('js/sb-admin-2.min.js') }}></script>

    <!-- Page level plugins -->
    <script src={{ asset('vendor/datatables/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}></script>

    <!-- Page level custom scripts -->
    <script src={{ asset('js/demo/datatables-demo.js') }}></script>
</body>

</html>





























{{-- @endsection --}}
