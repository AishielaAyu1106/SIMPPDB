<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ManajemenUserController extends Controller
{

    public function manajemenuser(){

        return view('Dashboard.admin.manajemen-user-index', [
            'users' => User::all()
        ]);
    }

    public function manajemenusercreate()
    {
        return view('Dashboard.admin.manajemen-user-create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255|unique:users,name',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5',
            'roles' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->roles()->sync($request->roles);

        return redirect('')->with('success', 'User '.$user->name.' berhasil ditambahkan!');
    }
}
