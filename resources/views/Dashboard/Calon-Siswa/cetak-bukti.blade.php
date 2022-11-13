<!DOCTYPE html>
<html>

<head>
<title>Bukti Pendaftaran</title>
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
    <h2 class="text-center" align='center'>Bukti Pendaftaran</h2>
    {{-- <h4>Design table 1</h4> --}}
    <table class="table1" align='center'>
        {{-- @foreach ($cetakbukti as $item) --}}
        <tr>
        <tr>

            <td><span contenteditable>No. Pendaftaran</span></td>
            <td>{{ $cetakbukti->Nomor_Pendaftaran }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Jalur Pendaftaran</span></td>
            <td>{{ $cetakbukti->Jalur_pendaftaran }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Nama Lengkap</span></td>
            <td>{{ $cetakbukti->nama_lengkap }}</td>
        </tr>

        <tr>
            <td><span contenteditable>N I S N</span></td>
            <td>{{ $cetakbukti->NISN }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Jenis Kelamin</span></td>
            <td>{{ $cetakbukti->Jenis_kelamin }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Tempat Lahir</span></td>
            <td>{{ $cetakbukti->tempat_lahir_siswa }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Tanggal lahir</span></td>
            <td>{{ $cetakbukti->tanggal_lahir_siswa }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Agama</span></td>
            <td>{{ $cetakbukti->agama_siswa }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Sekolah Asal</span></td>
            <td>{{ $cetakbukti->Sekolah_asal }}</td>
        </tr>

        <tr>
            <td><span contenteditable>tahun Lulus</span></td>
            <td>{{ $cetakbukti->Tahun_lulus }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Nomor HP</span></td>
            <td>{{ $cetakbukti->nomor_hp_siswa }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Email</span></td>
            <td>{{ $cetakbukti->email_siswa }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Dusun</span></td>
            <td>{{ $cetakbukti->dusun }}</td>
        </tr>

        <tr>
            <td><span contenteditable>RT</span></td>
            <td>{{ $cetakbukti->Rt }}</td>
        </tr>

        <tr>
            <td><span contenteditable>RW</span></td>
            <td>{{ $cetakbukti->rw }}</td>
        </tr>

        <tr>
            <td><span contenteditable>kelurahan/Desa</span></td>
            <td>{{ $cetakbukti->kelurahan_desa }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Kecamatan</span></td>
            <td>{{ $cetakbukti->kecamatan }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Kabupaten/Kota</span></td>
            <td>{{ $cetakbukti->kabupaten_kota }}</td>
        </tr>

        <tr>
            <td><span contenteditable>provinsi</span></td>
            <td>{{ $cetakbukti->provinsi }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Nama Ayah</span></td>
            <td>{{ $cetakbukti->nama_ayah }} </td>
        </tr>

        <tr>
            <td><span contenteditable>Nomor HP Ayah</span></td>
            <td>{{ $cetakbukti->nomor_hp_ayah }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Nama Ibu</span></td>
            <td>{{ $cetakbukti->nama_ibu }}</td>
        </tr>

        <tr>
            <td><span contenteditable>Nomor HP Ibu</span></td>
            <td>{{ $cetakbukti->nomor_hp_ibu }}</td>
        </tr>
        </tr>
        {{-- @endforeach --}}


    </table>
</body>

</html>
