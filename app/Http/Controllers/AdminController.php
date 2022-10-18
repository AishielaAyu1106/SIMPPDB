<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Form;
use App\Models\kuota_kelas;
use App\Models\SiswaKelas;
use App\Models\Rekap;
use App\Models\Pengumuman;

 class AdminController extends Controller
{
    // public function jadwal()
    // {
    //     $jadwal = Jadwal::all();
    //     return view('Dashboard.Admin.Jadwal-pendaftaran', compact('jadwal'))
    //         ->with('i', (request()->input('page', 1)- 1) * 5);

    // }

    public function kategori()
    {
        $jadwal = Jadwal::all();
        $afirmasi = Jadwal::where('Jalur_pendaftaran', 'Afirmasi')->first();
        $zonasi = Jadwal::where('Jalur_pendaftaran', 'zonasi')->first();
        $prestasi = Jadwal::where('Jalur_pendaftaran', 'prestasi')->first();
        return view('Dashboard.Admin.Jadwal', compact('jadwal', 'afirmasi', 'zonasi', 'prestasi'));
    }

    public function updateData(Request $request)
    {
        // dd($request->all());
        // return ("helo");
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
        return redirect('/jadwal-pendaftaran')->with('success', 'Pendaftaran Telah Dilakukan');

        // $jadwal = jadwal::create([
        //     'kategori_pendaftaran' => $request->kategori_pendaftaran,
        //     'tanggal_awal' => $request->tanggal_awal,
        //     'tanggal_akhir' => $request->tanggal_akhir,
        // ]);

        // return redirect()->route('lihatjadwal')
        //     ->with('success', 'Jadwal Berhasil Ditambahkan');

        // Jadwal::create($jadwal);
        // return redirect('/jadwal-pendaftaran-tambah')->with('success', 'Pendaftaran Telah Dilakukan');
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

    public function showData($id)
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
        return view('Dashboard.Admin.kelas-pendaftar',compact('siswaKelas'));
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

    public function rekapAdmin(){
        $rekap = Rekap::all();
        return view('Dashboard.Admin.rekap-nilai-admin', compact('rekap'));
    }

    public function pengumuman(Request $request){
        $tambahkelas = Pengumuman::all();
        return view('Dashboard.Admin.pengumuman', compact('tambahkelas'));
    }


    public function pengumumanditerima(Request $request){
        $siswa = Form::findOrFail($request->id);
        $pengumumanditerima = SiswaKelas::create([
            "kuota_kelas_id" => $request->kuota_kelas_id,
            "user_id" => $siswa->user_id
        ]);
        Pengumuman::create([
            'nama_lengkap' => $siswa->nama_lengkap,
            'Jalur_pendaftaran' =>$siswa->Jalur_pendaftaran,
            'kelas' => $request->Nama_Kelas
        ]);
        return redirect()->route('pengumuman');
    }

    public function pengumumanditolak(){
        $pengumumanditolak = Pengumuman::all();
        return view('Dashboard.Admin.pengumuman', compact('pengumumanditolak'));
    }

    public function statusBerkas(Request $request, $id){
        $status = Form::find($id);
        // $this->request[validate(
        //     'status'->[]
        // )]
        // dd($request->all());
        $status->status = $request->status;
        $status->Save();
        // dd('BERHASIL');
        if($status->status == "Terima berkas"){
            return redirect()->route('kelas',$id);
        }else{
            return redirect()->route('pengumumanditolak');
        }
        // return redirect('/status-berkas');
    }


}
