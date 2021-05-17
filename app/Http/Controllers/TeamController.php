<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function rulebook($id) {
        
        switch ($id) {
            case 'hack':
                if(Storage::exists('rulebook/hacktoday.pdf')){
                    return Storage::disk('local')->download('rulebook/HackToday.pdf');
                }
            case 'ux':
                if(Storage::exists('rulebook/uxtoday.pdf')){
                    return Storage::disk('local')->download('rulebook/UXToday.pdf');
                }
            case 'busy':
                if(Storage::exists('rulebook/itbusiness.pdf')){
                    return Storage::disk('local')->download('rulebook/ITBusiness.pdf');
                }
            default:
                return back();
        }
    }

    public function uploadTrf(Request $request){
        // init, belom bayar, show upload trf form
        // proses upload
        
        if($request->hasFile('trf') && $request->file('trf')->isValid()){
            $namafile = Auth::user()->id . '.' . $request->file('proposal')->extension();
            $request->file('trf')->storeAs('trf', $namafile);
            return back()->with('success', 'File uploaded Successfully');
        }
        return back()->with('fail', 'Error?????');
    }


    public function uploadProposal(Request $request){
        
        // dd( $request->file('proposal')->getClientOriginalName() );
        
        if($request->hasFile('proposal') && $request->file('proposal')->isValid()){
            // harusnya nama filenya = namatim-namaproposal
            $namafile = Auth::user()->id . '-' . Auth::user()->name . '-' . $request->file('proposal')->getClientOriginalName();
            $request->file('proposal')->storeAs('proposal', $namafile);
            return back()->with('success', 'File uploaded Successfully');
        }
        return back()->with('fail', 'Error?????');
    }
}
