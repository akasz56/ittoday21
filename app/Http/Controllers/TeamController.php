<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    function index(){
        return view('dashboard');
    }

    public function rulebook($id) {
        if(Storage::exists('rulebook/'. $id .'.pdf')){
            return Storage::disk('local')->download('rulebook/'. $id .'.pdf');
        }
        return back();
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