<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

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
        return view('Dashboard.Admin.Jadwal', compact('jadwal', 'afirmasi','zonasi','prestasi'));
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
}
