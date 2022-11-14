<!DOCTYPE html>
<html>

<head>
    <title>cetak data pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        .table1 {
            font-family: sans-serif;
            font-size: 80%;
            color: #232323;
            border-collapse: collapse;
            width: 50%;
        }

        .table1,
        th,
        td {
            border: 1px solid #999;
            padding: 8px 20px;
        }
    </style>
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

</html>
