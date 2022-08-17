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
        return view('Dashboard.Admin.Jadwal',compact('jadwal'));
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

        // return redirect()->route('jadwal-pendaftaran.index')
        //     ->with('success', 'Jadwal Berhasil Ditambahkan');

        // Jadwal::create($jadwal);
        // return redirect('/jadwal-pendaftaran-tambah')->with('success', 'Pendaftaran Telah Dilakukan');
    }

}
