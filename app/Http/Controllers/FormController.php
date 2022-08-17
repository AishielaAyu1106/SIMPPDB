<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index()
    {
        return view('Dashboard.Calon-Siswa.formulir-pendaftaran', [
            'forms' => Form::all()
        ]);
    }

    public function form(){
        return view('Dashboard.Calon-Siswa.tambah_formulir');
    }

    public function store(Request $request)
    {
        // return $request->file('fcakta')->store('berkas');
        $form = $request -> validate([
            'Nomor_Pendaftaran'  => ['required'],
            'Jalur_pendaftaran'  => ['required'],
            'nama_lengkap'  => ['required'],
            'Jenis_kelamin'  => ['required'],
            'NISN'  => ['required','size:8'],
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
            'NIK_ayah'  => ['required','size:16'],
            'pekerjaan_ayah'  => ['required'],
            'nomor_hp_ayah'  => ['required','max:13'],
            'nama_ibu'  => ['required'],
            'tempat_lahir_ibu'  => ['required'],
            'tanggal_lahir_ibu'  => ['required'],
            'NIK_ibu'  => ['required','size:16'],
            'pekerjaan_ibu'  => ['required'],
            'nomor_hp_ibu'  => ['required','max:13'],
            'p_agama'  => ['required'],
            'ppkn'  => ['required'],
            'B_indo'  => ['required'],
            'mtk'  => ['required'],
            'ipa'  => ['required'],
            'ips'  => ['required'],
            'basing'  => ['required'],
            'fcakta' => ['file', 'required'],
            'SKLasli' => ['file' , 'required'],
            'fcSTTB' => ['file' , 'required'],
            'fcRaport' => ['file' , 'required'],
            'suratnarkoba' => ['file' , 'required'],
            'Foto' => ['file' , 'required'],
            'fcKIP' => ['file'],
            'fcKPS' => ['file'],
            'fcPKH' => ['file']
        ]);

        if($request->file('fcakta')) {
            $form['fcakta'] = $request->file('fcakta')->store('berkas');
        }

        if($request->file('SKLasli')) {
            $form['SKLasli'] = $request->file('SKLasli')->store('berkas');
        }

        if($request->file('fcSTTB')) {
            $form['fcSTTB'] = $request->file('fcSTTB')->store('berkas');
        }

        if($request->file('fcRaport')) {
            $form['fcRaport'] = $request->file('fcRaport')->store('berkas');
        }

        if($request->file('suratnarkoba')) {
            $form['suratnarkoba'] = $request->file('suratnarkoba')->store('berkas');
        }

        if($request->file('Foto')) {
            $form['Foto'] = $request->file('Foto')->store('berkas');
        }

        if($request->file('fcKIP')) {
            $form['fcKIP'] = $request->file('fcKIP')->store('berkas');
        }

        if($request->file('fcKPS')) {
            $form['fcKPS'] = $request->file('fcKPS')->store('berkas');
        }

        if($request->file('fcPKH')) {
            $form['fcPKH'] = $request->file('fcPKH')->store('berkas');
        }

        Form::create($form);
        return redirect('/formulir-pendaftaran-siswa')->with('success', 'Pendaftaran Telah Dilakukan');
        // dd ('sukses');
    }

    public function destroy($id)
    {
        $form=Form::find($id);
        $form->delete();
        return redirect('/formulir-pendaftaran-siswa');
    }

    public function show($id)
    {
        $lihat = Form::find($id);
        return view('Dashboard.Calon-Siswa.lihat-formulir', [
            'lihat' => $lihat
        ]);

        // return $lihat;
    }

    public function edit($id)
    {
        $edit = Form::find($id);
        return view('Dashboard.Calon-Siswa.edit-formulir', compact('edit'));
        // return $edit;
    }

    public function update(Request $request, Form $form, $id)
    {
        $edit = Form::find($id);
        $edit->update($request->all());
        return redirect('/formulir-pendaftaran-siswa')->with('success', 'Pendaftaran Telah Dilakukan');
    }
}