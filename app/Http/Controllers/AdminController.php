<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Admin $admin)
    {
    }

    public function edit(Admin $admin)
    {
        return view('user.edit-profile', [
            'active' => 'kelola',
            'user' => $admin,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_pengguna' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);

        Admin::where('id', $id)->update($validatedData);
        return redirect('/profil');
    }

    public function destroy(Admin $admin)
    {

    }

    public function changePass()
    {
        return view('user.change-password', [
            'active' => 'kelola',
        ]);
    }

    public function change(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->old_password, Auth::guard('admin')->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        Admin::whereId(Auth::guard('admin')->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('/profil')->with("success", "Password Changed Successfully!");
    }
}
