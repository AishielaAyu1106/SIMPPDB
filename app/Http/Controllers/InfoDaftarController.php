<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infodaftar;
use Illuminate\Support\Facades\Auth;

class InfoDaftarController extends Controller
{
    public function index(Request $request)
    {
        $infodaftar = Infodaftar::all();
        return view('Dashboard.Admin.Informasi-Pendaftaran', compact('infodaftar'));
    }

    public function store(Request $request)
    {
        $infodaftar = $request->validate([
            'syarat_usia' => ['required'],
            'ijazah' => ['required'],
            'surat' => ['required'],
            'surat_lainnya' => ['required']
        ]);
        // $id = Infodaftar::select('id');
        // $infodaftar = Infodaftar::whereId($id)->first();
        // dd($cariForm->id);
        // $rekap = Rekap::where('user_id', Auth::user()->id)->first();
        // if ($infodaftar) {
        //     $infodaftar->update($request->all());
        // } else {
            Infodaftar::create($infodaftar);
        // }
        // return back()->with('success', 'Pendaftaran Telah Dilakukan');

        // Infodaftar::create($infodaftar);
        // dd("");
        return redirect('/info-pendaftaran');
    }

    public function showInfo()
    {
        $lihatinfo = Infodaftar::all();
        // dd($lihatinfo);
        return view('Dashboard.Admin.informasi-pendaftaran-show', compact('lihatinfo'));
    }

    public function deleteinfo($id)
    {
        $hapusinfo = Infodaftar::find($id);
        // dd($hapusinfo);
        $hapusinfo->delete();
        return redirect('/info-pendaftaran');
    }
}
