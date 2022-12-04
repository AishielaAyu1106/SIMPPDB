<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ManajemenUserController extends Controller
{

    public function manajemenuser(){

        return view('Dashboard.admin.manajemen-user-index2', [
            'user' => User::where('role', 'admin')->get()
        ]);
    }

    public function manajemenusercreate()
    {
        $role = User::where('role', Auth::user()->role)->get();
        return view('Dashboard.Admin.manajemen-user-create', compact('role'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255|unique:users,name',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5',
            'role' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        // $user->role()->sync($request->role);
        // dd('berhasil');
        return redirect('/data-admin')->with('success', 'User '.$user->name.' berhasil ditambahkan!');
    }

    public function edit($id)
    {

        $user = User::find($id);

        return view('Dashboard.Admin.manajemen-user-edit', compact('user'));
    }

    public function update(Request $request, $id){

        $user = User::find($id);
        $request->validate([
            'name' => 'required|max:255|unique:users,name,'.$user->id.'id',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id.'id',
            'role' => 'required'
        ]);

        // $user->roles()->sync($request->roles);

        if($request->filled('password')){
            $request->validate([
                'password' => 'min:5',
            ]);
            $user->password = Hash::make($request->password);
            $user->save();
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ]);

        return redirect('/data-admin')->with('warning', 'Data user '.$user->name.' berhasil diubah!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return back()->with('danger', 'User berhasil dihapus');

    }
}
