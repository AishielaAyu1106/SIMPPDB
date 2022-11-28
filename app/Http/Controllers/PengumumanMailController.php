<?php

namespace App\Http\Controllers;

use App\Mail\PengumumanMail;
use App\Models\Form;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class PengumumanMailController extends Controller
{
    public function index()
    {

        $pengumuman = [
            'title' => 'Mail from PengumumanPPDB.com',
            'body' => 'This is for testing email using smtp'
        ];
        $data = Form::join('users','users.id','forms.user_id')->where('forms.status', '!=', 'Sedang Diproses')->get();
        // dd($data);
        foreach ($data as $item) {
            // dd('sukses');
            Mail::to($item->email)->send(new \App\Mail\PengumumanMail($pengumuman));
        }
        return back()->with('success','Email Berhasil Dikirim');
    }
}
