<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function register() {
        return view('auth.register');
    }

    function check(Request $request) {
        $request->validate([
            'email'=>'required|email',
            'password' => 'required|min:6',
        ]);

        Auth::attempt($request->only('email','password'));

        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('dashboard');
        }else{
            return back()->with('fail','Invalid Login Details');
        }
        
        //---------

        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('dashboard');
        // }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);

        //---------

        // $request->validate([
        //     'email'=>'required|email',
        //     'password' => 'required|min:6',
        // ]);

        // $user = User::where('email', '=', $request->email)->first();
        // if($user){
        //     if(Hash::check($request->password, $user->password)){
        //         $request->session()->put('LoggedUser',$user->id);
        //         return redirect('/');
        //     }
        //     else{
        //         return back()->with('fail','Wrong Password');
        //     }
        // }
        // else{
        //     return back()->with('fail','Email is not Registered');
        // }
    }

    function create(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        Auth::attempt($request->only('email','password'));

        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('dashboard');
        }else{
            return back()->with('fail','Something went wrong with registration');
        }
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $query = $user->save();

        // if($query){
        //     return back()->with('success','You have been successfully Registered');
        // }else{
        //     return back()->with('fail','Something went wrong with registration');
        // }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}