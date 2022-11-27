<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infodaftar;
use Illuminate\Support\Facades\Auth;

class InfoDaftarController extends Controller
{
    public function index(Request $request)
    {
        $Infodaftar = Infodaftar::find(1);
        if($Infodaftar){
            $Infodaftar = Infodaftar::where('id', $Infodaftar->id)->first();
        } else {
            $Infodaftar = null;
        }

        return view('Dashboard.Admin.Informasi-Pendaftaran', compact('Infodaftar'));
    }

    public function store(Request $request)
    {
        $Infodaftar = $request->validate([
            'syarat_usia' => ['required'],
            'ijazah' => ['required'],
            'surat' => ['required'],
            'surat_lainnya' => ['required']
        ]);

        $Infodaftar = Infodaftar::where('id', 1)->first();
        if ($Infodaftar) {

            $Infodaftar->syarat_usia = $request->syarat_usia;
            $Infodaftar->ijazah = $request->ijazah;
            $Infodaftar->surat = $request->surat;
            $Infodaftar->surat_lainnya = $request->surat_lainnya;

            $Infodaftar->save();
        } else {
            Infodaftar::create(
                ['id' => 1,
                'syarat_usia' => $request->syarat_usia,
                'ijazah' => $request->ijazah,
                'surat' => $request->surat,
                'surat_lainnya' => $request->surat_lainnya,

                ]

            );
        }

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
