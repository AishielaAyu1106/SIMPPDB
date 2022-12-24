<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Jadwal;
use App\Models\Rekap;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Panduan;
use App\Models\Pengumuman;
use App\Models\Infodaftar;
use Avatar;
use DB;
use Illuminate\Support\Facades\Date;

class FormController extends Controller
{
    // public function dashboardSiswa()
    // {
    //     $main = User::all();
    //     return view ('Dashboard.Calon-Siswa.main', compact('main'));
    // }

    public function dashboardsiswa()
    {
        $dashboardsiswa = Jadwal::All();
        $item = Infodaftar::All();
        $dashboardsiswaAfirmasi = Jadwal::where('Jalur_pendaftaran','Afirmasi')->first();
        $dashboardsiswaPrestasi = Jadwal::where('Jalur_pendaftaran','Prestasi')->first();
        $dashboardsiswaZonasi = Jadwal::where('Jalur_pendaftaran','Zonasi')->first();
        // dd($dashboardsiswaAfirmasi);
        return view('Dashboard.Calon-Siswa.main', compact('dashboardsiswa', 'item', 'dashboardsiswaAfirmasi', 'dashboardsiswaPrestasi', 'dashboardsiswaZonasi'));
    }

    public function index()
    {
        if (Auth::user()->role == "calon-siswa") {
            $forms = Form::where('user_id', Auth::id())->get();
        } else {
            $forms =  Form::all();
        }

        return view('Dashboard.Calon-Siswa.formulir-pendaftaran', compact('forms'));
    }

    public function afirmasi(Request $request)
    {

        $cekData = Form::whereYear('created_at', date('Y'))->where('user_id', Auth::user()->id)->first();

        if ($cekData) {
            return redirect('/formulir-pendaftaran-siswa');

        } else {
            $validasi = Jadwal::where('Jalur_pendaftaran', $request->id)->first();
            return view('Dashboard.Calon-Siswa.tambah_formulir', compact('validasi'));
        }
    }



    public function store(Request $request)
    {
        $form = $request->validate([
            'Nomor_Pendaftaran'  => [''],
            'Jalur_pendaftaran'  => [''],
            'nama_lengkap'  => ['required'],
            'Jenis_kelamin'  => ['required'],
            'NISN'  => ['required'],
            'tempat_lahir_siswa'  => ['required'],
            'tanggal_lahir_siswa'  => ['required'],
            'agama_siswa'  => ['required'],
            'Sekolah_asal' => ['required'],
            'Tahun_lulus' => ['required', 'max:4'],
            'dusun'  => ['required'],
            'Rt'  => ['required'],
            'rw'  => ['required'],
            'kelurahan_desa'  => ['required'],
            'kode_pos'  => ['required'],
            'kecamatan'  => ['required'],
            'kabupaten_kota'  => ['required'],
            'provinsi'  => ['required'],
            'nomor_hp_siswa'  => ['required'],
            'email_siswa'  => ['required'],
            'nama_ayah'  => ['required'],
            'tempat_lahir_ayah'  => ['required'],
            'tanggal_lahir_ayah'  => ['required'],
            'NIK_ayah'  => ['required'],
            'pekerjaan_ayah'  => ['required'],
            'nomor_hp_ayah'  => ['required'],
            'nama_ibu'  => ['required'],
            'tempat_lahir_ibu'  => ['required'],
            'tanggal_lahir_ibu'  => ['required'],
            'NIK_ibu'  => ['required'],
            'pekerjaan_ibu'  => ['required'],
            'nomor_hp_ibu'  => ['required'],
            'fcakta' => ['file','required'],
            'SKLasli' => ['file','required'],
            'fcSTTB' => ['file','required'],
            'fcRaport' => ['file','required'],
            'suratnarkoba' => ['file','required'],
            'Foto' => ['file','required'],
            'fcKIP' => ['file','required'],
            'fcKPS' => ['file','required'],
            'fcPKH' => ['file','required'],
            'jenis_prestasi'  => [''],
            'tingkat'  => [''],
            'nama_prestasi'  => [''],
            'tahun'  => [''],
            'penyelenggara'  => [''],
            'piagam' => ['file']
        ]);
        if ($request->file('fcakta')) {
            $form['fcakta'] = $request->file('fcakta')->store('berkas');
        }

        if ($request->file('SKLasli')) {
            $form['SKLasli'] = $request->file('SKLasli')->store('berkas');
        }

        if ($request->file('fcSTTB')) {
            $form['fcSTTB'] = $request->file('fcSTTB')->store('berkas');
        }

        if ($request->file('fcRaport')) {
            $form['fcRaport'] = $request->file('fcRaport')->store('berkas');
        }

        if ($request->file('suratnarkoba')) {
            $form['suratnarkoba'] = $request->file('suratnarkoba')->store('berkas');
        }

        if ($request->file('Foto')) {
            $form['Foto'] = $request->file('Foto')->store('berkas');
        }

        if ($request->file('fcKIP')) {
            $form['fcKIP'] = $request->file('fcKIP')->store('berkas');
        }

        if ($request->file('fcKPS')) {
            $form['fcKPS'] = $request->file('fcKPS')->store('berkas');
        }

        if ($request->file('fcPKH')) {
            $form['fcPKH'] = $request->file('fcPKH')->store('berkas');
        }
        if ($request->file('piagam')) {
            $form['piagam'] = $request->file('piagam')->store('berkas');
        }


        $latestOrder = User::orderBy('created_at', 'DESC')->first();
        $Nomor_Pendaftaran = '' . str_pad($latestOrder->id ??0 + 1, 3, "0", STR_PAD_LEFT);
        $Jalur_pendaftaran =
        // dd($Nomor_Pendaftaran);

        Form::create($form + ['user_id' => Auth::user()->id, 'Nomor_Pendaftaran' => $Nomor_Pendaftaran]);
        return redirect('/formulir-pendaftaran-siswa')->with('success', 'Pendaftaran Telah Dilakukan');
    }

    public function destroy($id)
    {
        $form = Form::find($id);
        $form->delete();
        return redirect('/formulir-pendaftaran-siswa')->with('success', 'Berhasil Menghapus');
    }

    public function show($id)
    {
        $lihat = Form::find($id);
        return view('Dashboard.Calon-Siswa.lihat-formulir', [
            'lihat' => $lihat
        ]);
    }

    public function edit($id)
    {
        $edit = Form::find($id);

        // $edit = Form::where('status','!=',"Sedang diproses")->first();
        return view('Dashboard.Calon-Siswa.edit-formulir', compact('edit'));
    }

    public function update(Request $request, Form $form, $id)
    {
        // dd($request->all());
        $edit = Form::find($id);
        // $edit->Nomor_Pendaftaran = $request->Nomor_Pendaftaran;
        // $edit->Jalur_pendaftaran = $request->Jalur_pendaftaran;
        $edit->nama_lengkap = $request->nama_lengkap;
        $edit->Jenis_kelamin = $request->Jenis_kelamin;
        $edit->NISN = $request->NISN;
        $edit->tempat_lahir_siswa = $request->tempat_lahir_siswa;
        $edit->tanggal_lahir_siswa = $request->tanggal_lahir_siswa;
        $edit->agama_siswa = $request->agama_siswa;
        $edit->Sekolah_asal = $request->Sekolah_asal;
        // $edit->status = $request->status;
        $edit->save();
        // $edit->update($request->all());
        return redirect('/formulir-pendaftaran-siswa')->with('success', 'Pendaftaran Telah Dilakukan');
    }

    public function cetakbukti()
    {
        $cetakbukti = Form::where('user_id', Auth::id())->first();
        return view('Dashboard.Calon-Siswa.cetak-bukti', compact('cetakbukti'));
    }





    // REKAP NILAI SISWA

    public function rekap()
    {

        $rekap = Rekap::where('user_id', Auth::user()->id)->first();

        $cariForm = Form::where('user_id', Auth::id())->latest()->first();
        // $rekapstatus = Form::where('status','!=','Sedang diproses')->first();
        // dd($cariForm, Auth::id());
        if($cariForm){
            $jadwal = Jadwal::where('Jalur_pendaftaran', $cariForm->Jalur_pendaftaran)->first();
        } else {
            $jadwal = null;
        }
        return view('Dashboard.Calon-Siswa.rekap-nilai', compact('rekap', 'jadwal', 'cariForm'));
    }

    public function tambahRekap(Request $request)
    {
        $rekap = $request->validate([
            'mtk'  => ['required'],
            'ipa'  => ['required'],
            'ips'  => ['required'],
            'basing'  => ['required'],
        ]);
        $cariForm = Form::where('user_id', Auth::id())->latest()->first();
        // dd($cariForm->id);
        $rekap = Rekap::where('user_id', Auth::user()->id)->first();
        if ($rekap) {

            $rekap->update($request->all() + ['form_id' => $cariForm->id]);
        } else {
            Rekap::create($request->all() + ['user_id' => Auth::user()->id, 'form_id' => $cariForm->id]);
        }
        return back()->with('success', 'Pendaftaran Telah Dilakukan');
    }

    public function lihatRekap(Request $request)
    {
        $submit = Rekap::all();
        return view('Dashboard.Calon-Siswa.rekap-nilai-tambah', compact('submit'));
    }

    public function showRekap($id)
    {
        $showrekap = Rekap::find($id);

        return view(
            'Dashboard.Calon-Siswa.lihat-rekap-siswa',
            compact('showrekap')
        );
    }

    public function editRekap($id)
    {
        $editRekap = Rekap::find($id);
        return view('Dashboard.Calon-Siswa.edit-rekap-siswa', compact('editRekap'));
    }

    public function updateRekap(Request $request, $id)
    {
        $edit = Rekap::find($id);
        $edit->update($request->all());
        return redirect('/rekap-nilai-siswa')->with('success', 'Pendaftaran Telah Dilakukan');
    }

    public function hapusRekap($id)
    {
        $hapus = Rekap::find($id);
        $hapus->delete();
        return redirect('/rekap-nilai-siswa');
    }


    // PROFILE SISWA



    public function profileSiswa(Request $request)
    {
        $profile = Form::All();
        return view('Dashboard.Calon-Siswa.profile_siswa', compact('profile'));
    }

    // public function profilelihat($id)
    // {
    //     $lihatprofile = Form::find($id);
    //     return view('Dashboard.Calon-Siswa.edit-profile-siswa', [
    //         'profilelihat' => $lihatprofile
    //     ]);


    // }

    public function editProfile($id)
    {
        $editProfile = Form::find($id);
        return view('Dashboard.Calon-Siswa.edit-profile-siswa', compact('editProfile'));
    }

    public function PegumumanSiswa(Request $request)
    {
        $pengumumansiswa = Pengumuman::join('forms','forms.id','pengumuman.form_id')->where('forms.status','Berkas DIterima')->first();
        // $kelaspengumuman = ;
        return view('Dashboard.Calon-Siswa.pengumuman', compact('pengumumansiswa'));
    }

    // Download Panduan

    public function downloadpanduan(Request $request)
    {
        $downloadpanduan = Panduan::all();
        return view('Dashboard.Calon-Siswa.download-panduan', compact('downloadpanduan'));
    }

}
