<?php

namespace App\Http\Controllers;
use App\Mail\PengumumanMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class PengumumanMailController extends Controller
{
    public function index(){

        $pengumuman = [
        'title' => 'Mail from pengumumanPPDB.com',
        'body' => 'This is for testing email using smtp'
        ];

Mail::to('11181006@student.itk.ac.id')->send(new \App\Mail\PengumumanMail($pengumuman));

        dd("Email sudah terkirim.");

        }
}
