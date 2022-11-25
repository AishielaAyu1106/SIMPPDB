<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kuota_kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = kuota_kelas::all();

        return view("Dashboard.Admin.kuota_kelas2.index", compact("kelas"));
    }

    public function destroy(kuota_kelas $kuota_kela)
    {
        $kuota_kela->delete();

        return redirect()->back();
    }

    public function create()
    {
        $Kelas = kuota_kelas::all();
        return view('Dashboard.Admin.kuota_kelas2.create', compact('Kelas'));
    }

    public function edit(kuota_kelas $kuota_kela)
    {
        return view('Dashboard.Admin.kuota_kelas2.edit', compact('kuota_kela'));
    }

    public function store(Request $request){
        $tambahkuota = $request->validate([
            'Nama_Kelas' => 'required',
            'Kuota_kelas' => 'required',
        ]);
        kuota_kelas::create($tambahkuota);
        return redirect('/kuota-kelas');
        // return redirect('/kuota-kelas')->with('success', 'Pendaftaran Telah Dilakukan');
    }

    public function update(Request $request, kuota_kelas $kuota_kela)
    {
        $kuota_kela->Nama_kelas = $request->Nama_Kelas;
        $kuota_kela->Kuota_kelas = $request->Kuota_kelas;
        $kuota_kela->save();

        return redirect()->route("kuota-kelas2.index");
    }

    // public function Kelaslihat()
    // {
    //     $Kelaslihat = kuota_kelas::find();
    //     return view('Dashboard.Admin.tambah-kelas-kuota',compact('Kelaslihat'));
    // }
}
