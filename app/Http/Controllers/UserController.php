<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\Amember;
use App\Models\Bmember;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function indexLogin()
    {
        return view('auth.login');
    }

    public function indexRegister()
    {
        // if ( Carbon::now('Asia/Jakarta') > Carbon::parse('01-08-2021','Asia/Jakarta') ) {
        //     return view('auth.register');
        // }
        // return view('auth.closereg');
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if ($request->rememberme) {
            $remember = $request->rememberme;
        } else {
            $remember = false;
        }

        if (User::where('email', '=', $request->email)->first() === null) {
            return back()->with('fail','Email belum terdaftar');
        }

        Auth::attempt($request->only('email', 'password'), $remember);

        if (Auth::attempt($request->only('email', 'password'), $remember)) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('fail', 'Password Salah');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'comp' => 'required',
        ]);
        // Jenis Lomba yg diikuti - enum - hack/ux/bistik

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jenis_lomba' => $request->comp,
        ]);

        Leader::create([
            'name' => 'Leader Name',
        ]);

        Amember::create([
            'name' => 'Member 1 Name',
        ]);

        Bmember::create([
            'name' => 'Member 2 Name',
        ]);

        Auth::attempt($request->only('email', 'password'));

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('fail', 'Terjadi Kesalahan, Mohon kontak Contact Person');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}