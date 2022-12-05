<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class changeController extends Controller
{
    public function edit()
    {
        return view('password_edit.edit');
    }

    public function update(Request $request)
    {

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed'

        ]);

        $user = User::find(Auth::user()->id);

        if ($user) {
            if (Hash::check($request['old_password'], $user->password)) {
                $user->password = Hash::make($request['password']);
                $user->save();
                Alert::success("Password <br>", 'Berhasil Di Update!');
                return redirect()->back();
            } else {
                Alert::error("Password <br>", 'Password tidak sesuai');
                return redirect()->back();
            }
        }
    }


    public function profile()
    {
        return view('dashboard.profile.index');
    }

    public function profileUpdate(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required|string'
        ]);

        $user = User::find(Auth::user()->id);
        $user->update($validasi);
        Alert::success("{$validasi['name']} <br>", 'Nama Berhasil Di Update');
        return redirect()->route('profile');
    }

    public function profileEdit()
    {
        return view('dashboard.profile.edit');
    }
}
