<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    function index(){
        return view('dashboard');
    }

    function upload(Request $request){
        if($request->hasFile('proposal') && $request->file('proposal')->isValid()){
            $namafile = Auth::user()->id . '-' . Auth::user()->name . '.' . $request->file('proposal')->extension();
            $request->file('proposal')->storeAs('proposal', $namafile);
            return back()->with('status', 'File uploaded Successfully');
        }
        return back()->with('status', 'Error?????');
    }
}
