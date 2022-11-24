<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Form;
use App\Models\kuota_kelas;
use App\Models\SiswaKelas;
use App\Models\Rekap;
use App\Models\Pengumuman;
use App\Models\Panduan;
use App\Models\User;
use App\Models\Auth;

class AdminController extends Controller
{
    // public function dashboardadmin()
    // {

    //     return ('oke');
        // return view('Dashboard.Admin.main');
    // }

    public function datapendaftarDashboard()
    {
        $dashboardData = Form::all();
        // return view('Dashboard.Admin.table', compact('dashboardData'));
        return view('Dashboard.Admin.main2', compact('dashboardData'));
    }

    public function cetakdata()
    {
        $cetakdata = Form::All();
        return view('Dashboard.Admin.cetak-data-pendaftaran', compact('cetakdata'));
    }

    public function kategori()
    {
        $jadwal = Jadwal::all();
        $afirmasi = Jadwal::where('Jalur_pendaftaran', 'Afirmasi')->first();
        $zonasi = Jadwal::where('Jalur_pendaftaran', 'zonasi')->first();
        $prestasi = Jadwal::where('Jalur_pendaftaran', 'prestasi')->first();
        return view('Dashboard.Admin.Jadwal2', compact('jadwal', 'afirmasi', 'zonasi', 'prestasi'));
    }

    public function updateData(Request $request)
    {
        // dd('sukses ');
        $getID = Jadwal::where('Jalur_pendaftaran', $request->Jalur_pendaftaran)->first();
        $getID->tanggal_awal = $request->tanggal_awal;
        $getID->tanggal_akhir = $request->tanggal_akhir;
        $getID->save();
        return back()->with('Berhasil Diubah');
    }

    public function store(Request $request)
    {
        $jadwal = $request->validate([
            'Jalur_pendaftaran' => 'required',
            'tanggal_awal' => 'required',
            'tanggal_akhir' => 'required',
        ]);

        Jadwal::create($jadwal);
        return redirect('/jadwal-pendaftaran');
    }

    public function destroy($id)
    {
        $item = Jadwal::find($id);
        $item->delete();
        return redirect('/jadwal-pendaftaran');
    }



    // data pendaftaran

    public function dataPendaftar()
    {
        $data = Form::all();
        return view('Dashboard.Admin.data-pendaftar', compact('data'));
    }

    public function showData(Request $request, $id)
    {

        $lihatdata = Form::find($id);
        return view('Dashboard.Admin.data-pendaftar-tolak-terima', compact('lihatdata'));
    }

    public function kelas($id)
    {
        $kelas = kuota_kelas::all();
        foreach ($kelas as $item) {
            $jumlahSiswa = SiswaKelas::where('kuota_kelas_id', $item->id)->count();
            $siswaKelas[] = [
                'id' => $item->id,
                'nama_kelas' => $item->Nama_Kelas,
                'kuota' => $item->Kuota_kelas,
                'siswa_kuota' => $item->Kuota_kelas - $jumlahSiswa
            ];
        }
        // dd($kelas);
        // $kuota_kelas =
        return view('Dashboard.Admin.kelas-pendaftar', compact('siswaKelas'));
    }

    public function Kuota($data)
    {
        // $KuotaKelas = kuota_kelas::where('');

    }

    public function hapusdata($id)
    {
        $form = Form::find($id);
        $form->delete();
        return redirect('/data-pendaftar');
    }

    public function rekapAdmin()
    {
        $Afirmasi = Rekap::select('rekaps.*', 'forms.Jalur_pendaftaran', 'users.name')
            ->join('users', 'users.id', '=', 'rekaps.user_id')
            ->join('forms', 'forms.id', '=', 'rekaps.form_id')
            ->where('forms.Jalur_pendaftaran', 'Afirmasi')->get()->map(function($raw)
            {
                $raw->total = $raw->mtk + $raw->ipa + $raw->ips + $raw->basing;
                return $raw;
            })->sortBy([
                ['total', 'desc'], //desc = descending Besar ke Kecil
            ]);

            $Prestasi = Rekap::select('rekaps.*', 'forms.Jalur_pendaftaran', 'users.name')
            ->join('users', 'users.id', '=', 'rekaps.user_id')
            ->join('forms', 'forms.id', '=', 'rekaps.form_id')
            ->where('forms.Jalur_pendaftaran', 'Afirmasi')->get()->map(function($raw)
            {
                $raw->total = $raw->mtk + $raw->ipa + $raw->ips + $raw->basing;
                return $raw;
            })->sortBy([
                ['total', 'desc'], //desc = descending Besar ke Kecil
            ]);

            $Zonasi = Rekap::select('rekaps.*', 'forms.Jalur_pendaftaran', 'users.name')
            ->join('users', 'users.id', '=', 'rekaps.user_id')
            ->join('forms', 'forms.id', '=', 'rekaps.form_id')
            ->where('forms.Jalur_pendaftaran', 'Afirmasi')->get()->map(function($raw)
            {
                $raw->total = $raw->mtk + $raw->ipa + $raw->ips + $raw->basing;
                return $raw;
            })->sortBy([
                ['total', 'desc'], //desc = descending Besar ke Kecil
            ]);

        return view('Dashboard.Admin.rekap-nilai-admin', compact('Afirmasi', 'Prestasi', 'Zonasi'));
    }

    public function hapusrekapadmin($id)
    {
        $rekap = Rekap::Find($id);
        $rekap->delete();
        return redirect('/rekap-nilai-admin');
    }

    public function pengumuman(Request $request)
    {
        $pengumumanDiterima = Pengumuman::join('forms','forms.id','pengumuman.form_id')->where('forms.status','Berkas Diterima')->get();
        $pengumumanDitolak = Pengumuman::join('forms','forms.id','pengumuman.form_id')->where('forms.status','Berkas Ditolak')->get();

        return view('Dashboard.Admin.pengumuman', compact('pengumumanDiterima','pengumumanDitolak'));
    }


    public function pengumumanditerima(Request $request)
    {
        $siswa = Form::findOrFail($request->id);
        $pengumumanditerima = SiswaKelas::create([
            "kuota_kelas_id" => $request->kuota_kelas_id,
            "user_id" => $siswa->user_id
        ]);

        // dd($siswa);
        Pengumuman::create([
            'nama_lengkap' => $siswa->nama_lengkap,
            'Jalur_pendaftaran' => $siswa->Jalur_pendaftaran,
            'kelas' => $request->kuota_kelas_id,
            'form_id' => $siswa->id
        ]);
        return redirect()->route('pengumuman');
    }

    public function statusBerkas(Request $request, $id)
    {
        $status = Form::find($id);
        $status->status = $request->status;
        $status->Save();

        // dd('BERHASIL');
        if ($status->status == "Berkas Diterima") {
            return redirect()->route('kelas', $id);
        } else {
            Pengumuman::create([
                'nama_lengkap' => $status->nama_lengkap,
                'Jalur_pendaftaran' => $status->Jalur_pendaftaran,
                'kelas' => null,
                'form_id' => $status->id
            ]);
            // return redirect('/pengumuman-admin-diterima');
            return redirect()->route('pengumuman');
        }
        // return redirect('/status-berkas');
    }

    public function editPengumuman($id)
    {
        $editPengumuman = Form::where('id',$id)->first();
        // dd($editPengumuman);
        return view('Dashboard.Admin.pengumuman-edit', compact('editPengumuman'));

    }

    public function updatePengumuman(Request $request, $id)
    {
        // DD($id);
        $editPengumuman = Form::find($id);
        $editPengumuman->status = $request->status;
        $editPengumuman->save();
            return redirect('/pengumuman');
    }

    public function deletePengumuman($id)
    {
        $hapuskelas = Form::find($id);
        $hapuskelas->delete();
        return redirect('/pengumuman');
    }

    public function profileAdmin(Request $request)
    {
        $profile = User::All();
        return view('Dashboard.Admin.profile-admin', compact('profile'));
    }



    public function panduanpendaftaran(){
        $panduandaftar = Panduan::all();
        return view('Dashboard.Admin.upload-panduan', compact('panduandaftar'));
    }


    // UPLOAD PANDUAN

    public function uploadpanduan(Request $request)
    {
        $panduandaftar = $request->validate([
            'nama_berkas' => ['required'],
            'upload_panduan' => ['file']
        ]);
        // dd($request->all());

        if ($request->file('upload_panduan')) {
            $panduandaftar['upload_panduan'] = $request->file('upload_panduan')->store('panduan');
        }

        Panduan::create($panduandaftar);
        return redirect('/upload-panduan');
    }

    public function showpanduan($id)
    {
        $lihatpanduan = Panduan::find($id);
        return view('Dashboard.Admin.lihat-upload-berkas', compact('lihatpanduan'));
    }

    public function deletepanduan($id)
    {
        $hapuspanduan = Panduan::find($id);
        $hapuspanduan->delete();
        return redirect('/upload-panduan');
    }


    // Manajemen User
    // public function manajemenuser()
    // {
    //     $manajemenuser =
    // }
}
