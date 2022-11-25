<?php

namespace App\Http\Controllers;
use App\Models\Form;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profilesiswa()
    {
        $profile = Form::all();
        return view('Dashboard.Calon-Siswa.profile_siswa', compact('dashboardData'));
    }
}
