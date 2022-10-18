<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Jadwal;
use App\Models\Rekap;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
        return view('Dashboard.Calon-Siswa.main');
    }

    public function index()
    {
        if(Auth::user()->role == "calon-siswa"){
            $forms = Form::where('user_id',Auth::id())->get();
        }else {
            $forms =  Form::all();
        }

        return view('Dashboard.Calon-Siswa.formulir-pendaftaran',compact('forms'));
    }

    public function afirmasi(Request $request)
    {

        $cekData = Form::whereYear('created_at',date('Y'))->where('user_id',Auth::user()->id)->first();

        if($cekData){
            return back();
        }else{
            $validasi = Jadwal::where('Jalur_pendaftaran',$request->id)->first();
            return view('Dashboard.Calon-Siswa.tambah_formulir',compact('validasi'));
        }


    }


    public function store(Request $request)
    {
        // dd($request->all());
        // return $request->file('fcakta')->store('public/berkas');
        $form = $request->validate([
            'Nomor_Pendaftaran'  => ['required'],
            'Jalur_pendaftaran'  => ['required'],
            'nama_lengkap'  => ['required'],
            'Jenis_kelamin'  => ['required'],
            'NISN'  => ['required', 'size:8'],
            'tempat_lahir_siswa'  => ['required'],
            'tanggal_lahir_siswa'  => ['required'],
            'agama_siswa'  => ['required'],
            'Sekolah_asal' => ['required'],
            'Tahun_lulus' => ['required'],
            'dusun'  => ['required'],
            'Rt'  => ['required'],
            'rw'  => ['required'],
            'kelurahan_desa'  => ['required'],
            'kode_pos'  => ['required'],
            'kecamatan'  => ['required'],
            'kabupaten_kota'  => ['required'],
            'provinsi'  => ['required'],
            'nomor_hp_siswa'  => ['required', 'max:13'],
            'email_siswa'  => ['required', 'email:dns'],
            'nama_ayah'  => ['required'],
            'tempat_lahir_ayah'  => ['required'],
            'tanggal_lahir_ayah'  => ['required'],
            'NIK_ayah'  => ['required', 'size:16'],
            'pekerjaan_ayah'  => ['required'],
            'nomor_hp_ayah'  => ['required', 'max:13'],
            'nama_ibu'  => ['required'],
            'tempat_lahir_ibu'  => ['required'],
            'tanggal_lahir_ibu'  => ['required'],
            'NIK_ibu'  => ['required', 'size:16'],
            'pekerjaan_ibu'  => ['required'],
            'nomor_hp_ibu'  => ['required', 'max:13'],
            'fcakta' => ['file', 'required'],
            'SKLasli' => ['file', 'required'],
            'fcSTTB' => ['file', 'required'],
            'fcRaport' => ['file', 'required'],
            'suratnarkoba' => ['file', 'required'],
            'Foto' => ['file'],
            'fcKIP' => ['file'],
            'fcKPS' => ['file'],
            'fcPKH' => ['file'],
            'jenis_prestasi'  => ['required'],
            'tingkat'  => ['required'],
            'nama_prestasi'  => ['required'],
            'tahun'  => ['required'],
            'penyelenggara'  => ['required'],
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

        Form::create($form + ['user_id' => Auth::user()->id]);
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
        return view('Dashboard.Calon-Siswa.edit-formulir', compact('edit'));

    }

    public function update(Request $request, Form $form, $id)
    {
        $edit = Form::find($id);
        $edit->update($request->all());
        return redirect('/formulir-pendaftaran-siswa')->with('success', 'Pendaftaran Telah Dilakukan');
    }



    // REKAP NILAI SISWA

    public function rekap()
    {
        $rekap = Rekap::where('user_id', Auth::user()->id)->first();
        return view('Dashboard.Calon-Siswa.rekap-nilai', compact('rekap'));
    }

    public function tambahRekap(Request $request)
    {
        $rekap = $request->validate([
            'mtk'  => ['required'],
            'ipa'  => ['required'],
            'ips'  => ['required'],
            'basing'  => ['required'],
        ]);

        $rekap = Rekap::where('user_id', Auth::user()->id)->first();
        if($rekap){
            $rekap->update($request->all());
        }else{
            Rekap::create($request->all() + ['user_id' => Auth::user()->id]);
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

}
