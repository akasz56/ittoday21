<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leader;
use App\Models\Amember;
use App\Models\Bmember;
use App\Mail\ForgotPass;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function indexRegister()
    {
        if (Carbon::now('Asia/Jakarta') < Carbon::parse('09-08-2021', 'Asia/Jakarta')) {
            return view('auth.register');
        }
        return view('auth.closereg');
    }
    public function indexLogin()
    {
        return view('auth.login');
    }
    public function indexForgot()
    {
        return view('auth.forgot');
    }
    public function indexReset(Request $request, User $user, $token)
    {
        if (!$request->hasValidSignature()) {
            return redirect("/");
        }
        $cek = DB::table('reset_tokens')->where('id', $user->id)->first();
        if ($cek->use == null)
            return view('auth.reset', ['id' => $user->id, 'token' => $token]);
        return redirect('/');
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
            return back()->with('fail', 'Email belum terdaftar');
        }

        if (Auth::attempt($request->only('email', 'password'), $remember)) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('fail', 'Password Salah');
        }
    }






    public function register(Request $request)
    {
        switch ($request->comp) {
            case "hack":
                $jenis = 'hack';
                break;
            case "ux":
                if (Carbon::now('Asia/Jakarta') < Carbon::parse('11-07-2021', 'Asia/Jakarta')) {
                    $jenis = 'ux_1';
                } else {
                    $jenis = 'ux_2';
                }
                break;
            case "busy":
                if (Carbon::now('Asia/Jakarta') < Carbon::parse('11-07-2021', 'Asia/Jakarta')) {
                    $jenis = 'busy_1';
                } else {
                    $jenis = 'busy_2';
                }
                break;
            default:
                return back()->with('fail', 'Competition Unavailable, Please Contact us through Contact Person');
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
        Amember::create();
        Bmember::create();

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('fail', 'Error during login attempt, Please Contact us through Contact Person');
        }
    }






    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }






    public function forgot(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        // dd('checkpoint user found');
        if ($user) {

            $token = Str::random(50);
            DB::table('reset_tokens')
                ->updateOrInsert(
                    ['id' => $user->id],
                    ['token' => $token, 'created_at' => Carbon::now('Asia/Jakarta'), 'updated_at' => Carbon::now('Asia/Jakarta'), 'use' => null]
                );
            // dd('checkpoint token');

            $url = URL::temporarySignedRoute(
                'resetpass',
                now()->addMinutes(30),
                ['user' => $user->id, 'token' => $token]
            );
            // dd('checkpoint url made');

            Mail::to($request->email)->queue(new ForgotPass(['url' => $url, 'name' => $user->name]));
            // dd('checkpoint email sent');
            return back()->with('success', 'Email for Reset Password has been sent, please check your inbox or your spam inbox');
        }
        return back()->with('fail', 'Email has not been registered yet');
    }






    public function reset(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
            'token' => 'required',
            'id' => 'required',
        ]);

        $id = $request->id;
        $token = $request->token;
        $check = DB::table('reset_tokens')->where('id', $id)->where('token', $token)->first();
        $user = User::find($id);

        if ($check && $user) {
            $date = Carbon::parse($check->created_at)->addMinutes(30);
            $now = Carbon::now('Asia/Jakarta');
            $gre = $now->lessThanOrEqualTo($date);
            if ($check->use == null && $gre) {
                // return [$user, $check->created_at, $date, $now, $gre];
                $password = Hash::make($request->password);
                $user->password = $password;
                $user->save();
                DB::table('reset_tokens')->where('id', $id)->where('token', $token)->update(['use' => true]);
                return redirect()->route('login');
            }
        }
        return redirect('/');
    }
}
