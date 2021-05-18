<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leader;
use App\Models\Amember;
use App\Models\Bmember;
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
        // if ( Carbon::now('Asia/Jakarta') < Carbon::parse('01-08-2021','Asia/Jakarta') ) {
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
        // dd($request->comp);

        // Jenis Lomba yg diikuti - enum - hack/ux/bistik
        switch ($request->comp) {
            case "hack":
                $jenis = 'hack';
                break;
            case "ux":
                if ( Carbon::now('Asia/Jakarta') < Carbon::parse('11-07-2021','Asia/Jakarta') ) {
                    $jenis = 'ux_1'; } else { $jenis = 'ux_2'; } break;
            case "busy":
                if ( Carbon::now('Asia/Jakarta') < Carbon::parse('11-07-2021','Asia/Jakarta') ) {
                    $jenis = 'busy_1'; } else { $jenis = 'busy_2'; } break;
            default:
                return back()->with('fail', 'Kompetisi Tidak tersedia, Mohon kontak Contact Person');
                break;
        }

        // Validate Form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jenis_lomba' => $jenis,
        ]);

        Leader::create([
            'name' => $request->name . ' Leader Name',
        ]);

        Amember::create([
            'name' => $request->name . ' Member 1 Name',
        ]);

        Bmember::create([
            'name' => $request->name . ' Member 2 Name',
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