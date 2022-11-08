<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManajemenUserController extends Controller
{
    public function manajemenuser(){

        return view('Dashboard.admin.manajemen-user-index', [
            'users' => User::all()
        ]);
    }

    // public function create(){

    //     $roles = Role::all();

    //     return view('user.admin.manajemen_user.create', [
    //         'roles' => $roles
    //     ]);
    // }
}
