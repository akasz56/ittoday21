<?php

namespace App\Http\Controllers;

use App\Models\Amember;
use App\Models\Bmember;
use App\Models\htcategory;
use App\Models\Leader;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        //------------ Close Registration
        $belomBayar = (Auth::user()->file_bayar) ? false : true;
        if ($belomBayar) {
            return view('auth.closereg')->with('message', 'Hello, whachu lookin for?');
        }
        
        //------------ Team id & Biodata
        $id = Auth::user()->id;
        $nama = Auth::user()->name;
        $leader = Auth::user()->leader;
        $amember = Auth::user()->amember;
        $bmember = Auth::user()->bmember;

        //------------ Biodata KTM Status
        $status_ktm = array();
        if      ($leader->status_ktm == "pending")      {$status_ktm[0] = 1; $message_ktm[0] = "ID Card / Student ID Card currently in verifying process";}
        else if ($leader->status_ktm == "done")         {$status_ktm[0] = 2; $message_ktm[0] = "ID Card / Student ID Card has been verified";}
        else if ($leader->status_ktm == "reupload")     {$status_ktm[0] = 0; $message_ktm[0] = "ID Card / Student ID Card is not verified, Please Reupload";}
        else                                            {$status_ktm[0] = 0; $message_ktm[0] = "";}

        if      ($amember->status_ktm == "pending")     {$status_ktm[1] = 1; $message_ktm[1] = "ID Card / Student ID Card currently in verifying process";}
        else if ($amember->status_ktm == "done")        {$status_ktm[1] = 2; $message_ktm[1] = "ID Card / Student ID Card has been verified";}
        else if ($amember->status_ktm == "reupload")    {$status_ktm[1] = 0; $message_ktm[1] = "ID Card / Student ID Card is not verified, Please Reupload";}
        else                                            {$status_ktm[1] = 0; $message_ktm[1] = "";}

        if      ($bmember->status_ktm == "pending")     {$status_ktm[2] = 1; $message_ktm[2] = "ID Card / Student ID Card currently in verifying process";}
        else if ($bmember->status_ktm == "done")        {$status_ktm[2] = 2; $message_ktm[2] = "ID Card / Student ID Card has been verified";}
        else if ($bmember->status_ktm == "reupload")    {$status_ktm[2] = 0; $message_ktm[2] = "ID Card / Student ID Card is not verified, Please Reupload";}
        else                                            {$status_ktm[2] = 0; $message_ktm[2] = "";}

        //------------ Biodata SKMA Status
        $status_skma = array();
        if      ($leader->status_skma == "pending")     {$status_skma[0] = 1; $message_skma[0] = "Certificate of Active Student currently in verifying process";}
        else if ($leader->status_skma == "done")        {$status_skma[0] = 2; $message_skma[0] = "Certificate of Active Student has been verified";}
        else if ($leader->status_skma == "reupload")    {$status_skma[0] = 0; $message_skma[0] = "Certificate of Active Student is not verified, Please Reupload";}
        else                                            {$status_skma[0] = 0; $message_skma[0] = "";}
        
        if      ($amember->status_skma == "pending")    {$status_skma[1] = 1; $message_skma[1] = "Certificate of Active Student currently in verifying process";}
        else if ($amember->status_skma == "done")       {$status_skma[1] = 2; $message_skma[1] = "Certificate of Active Student has been verified";}
        else if ($amember->status_skma == "reupload")   {$status_skma[1] = 0; $message_skma[1] = "Certificate of Active Student is not verified, Please Reupload";}
        else                                            {$status_skma[1] = 0; $message_skma[1] = "";}

        if      ($bmember->status_skma == "pending")    {$status_skma[2] = 1; $message_skma[2] = "Certificate of Active Student currently in verifying process";}
        else if ($bmember->status_skma == "done")       {$status_skma[2] = 2; $message_skma[2] = "Certificate of Active Student has been verified";}
        else if ($bmember->status_skma == "reupload")   {$status_skma[2] = 0; $message_skma[2] = "Certificate of Active Student is not verified, Please Reupload";}
        else                                            {$status_skma[2] = 0; $message_skma[2] = "";}

        //------------ Comp Info
        if      (Auth::user()->jenis_lomba == "hack")   {$jenis_lomba = "HackToday";}
        else if (Auth::user()->jenis_lomba == "ux_2" || Auth::user()->jenis_lomba == "ux_1")   {$jenis_lomba = "UXToday";}
        else if (Auth::user()->jenis_lomba == "busy_2" || Auth::user()->jenis_lomba == "busy_1") {$jenis_lomba = "IT Business";}

        //------------ Proposal Status
        if (Auth::user()->jenis_lomba == "hack") {
            $status_lomba = (htcategory::where('team_id', '=', $id)->first()) ? 1 : 0;
            $message_lomba = "";
        }
        else {
            $status_lomba = (Auth::user()->file_lomba) ? 1 : 0;
            $message_lomba = (Auth::user()->file_lomba) ? "Proposal has been uploaded" : "";
        }

        //------------ Return view
        return view('auth.dashboard', [
            // id tim
            'nama' => $nama,
            'id' => $id,
            'leader' => $leader,
            'amember' => $amember,
            'bmember' => $bmember,
            'status_ktm' => $status_ktm,
            'status_skma' => $status_skma,
            'message_ktm' => $message_ktm,
            'message_skma' => $message_skma,
            // lomba
            'jenis_lomba' => $jenis_lomba,
            'status_lomba' => $status_lomba,
            'message_lomba' => $message_lomba,
        ]);
    }
    
    public function rulebook($id)
    {
        switch ($id) {
            case 'hack':
                if (Storage::exists('rulebook/HackToday.pdf')) {
                    return Storage::download('rulebook/HackToday.pdf');
                }
            case 'ux':
                if (Storage::exists('rulebook/UXToday.pdf')) {
                    return Storage::download('rulebook/UXToday.pdf');
                }
            case 'busy':
                if (Storage::exists('rulebook/ITBusiness.pdf')) {
                    return Storage::download('rulebook/ITBusiness.pdf');
                }
            default:
                return back();
        }
    }
    
    public function uploadtrf(Request $request)
    {
        $request->validate(['trf' => 'image',]);
        $user = User::find(Auth::user()->id);


        if ($request->hasFile('trf') && $request->file('trf')->isValid()) {
            $namafile = Auth::user()->id . '-trf.' . $request->file('trf')->extension();
            $request->file('trf')->storeAs('trf', $namafile);

            $user->bank = $request->nama;
            $user->verified_bayar = "pending";
            $user->file_bayar = $namafile;
            $user->save();

            return back()->with('success.trf', 'File uploaded Successfully');
        }
        return back()->with('fail.trf', 'Error occured during file upload, Please try again');
    }

    public function uploadprop(Request $request)
    {
        $request->validate(['proposal' => 'required|mimes:pdf|max:10240']);
        $user = User::find(Auth::user()->id);


        if ($request->hasFile('proposal') && $request->file('proposal')->isValid()) {
            $namafile = Auth::user()->id . '-proposal.' . $request->file('proposal')->getClientOriginalExtension();
            $request->file('proposal')->storeAs('proposal', $namafile);

            $user->file_lomba = $namafile;
            $user->save();

            return back()->with('success.prop', 'Proposal file uploaded Successfully');
        }
        return back()->with('fail.prop', 'Error occured during proposal file upload, Please try again');
    }

    public function uploadlead(Request $request)
    {
        $leader = Leader::find(Auth::user()->id);

        if ($request->nama) {$leader->name = $request->nama;}                   // nama
        if ($request->nim) {$leader->nim = $request->nim;}                      // nim
        if ($request->institusi) {$leader->institusi = $request->institusi;}    // institusi
        if ($request->prov) {$leader->prov = $request->prov;}                   // prov
        if ($request->kota) {$leader->kota = $request->kota;}                   // kota
        if ($request->idline) {$leader->idline = $request->idline;}             // idline
        if ($request->email) {$leader->email = $request->email;}                // email
        if ($request->phone) {$leader->phone = $request->phone;}                // phone
        if ($request->whatsapp) {$leader->whatsapp = $request->whatsapp;}       // whatsapp
        $leader->save();

        // File Upload KTM
        if ($request->ktm) {
            $request->validate(['ktm' => 'required|mimes:jpeg,jpg,png,pdf',]);

            if ($request->hasFile('ktm') && $request->file('ktm')->isValid()) {
                $namafile = Auth::user()->id . '-leader-ktm.' . $request->file('ktm')->getClientOriginalExtension();
                $request->file('ktm')->storeAs('ktm', $namafile);
    
                $leader->status_ktm = "pending";
                $leader->ktm = $namafile;
                $leader->save();
            } else {
                return back()->with('fail.bio', 'Error occured during Leader ID Card / Student ID Card file upload, Please try again');
            }
        }

        // File Upload SKMA
        if ($request->skma) {
            $request->validate(['skma' => 'required|mimes:jpeg,jpg,png,pdf',]);

            if ($request->hasFile('skma') && $request->file('skma')->isValid()) {
                $namafile = Auth::user()->id . '-leader-skma.'. $request->file('skma')->getClientOriginalExtension();
                $request->file('skma')->storeAs('skma', $namafile);
    
                $leader->status_skma = "pending";
                $leader->skma = $namafile;
                $leader->save();
            } else {
                return back()->with('fail.bio', 'Error occured during Leader Certificate of Active Student file upload, Please try again');
            }
        }

        return back()->with('success.bio', 'Leader Biodata Updated Successfully');
    }

    public function uploadamem(Request $request)
    {
        $amember = Amember::find(Auth::user()->id);

        if ($request->nama) {$amember->name = $request->nama;}                   // nama
        if ($request->nim) {$amember->nim = $request->nim;}                      // nim
        if ($request->institusi) {$amember->institusi = $request->institusi;}    // institusi
        if ($request->prov) {$amember->prov = $request->prov;}                   // prov
        if ($request->kota) {$amember->kota = $request->kota;}                   // kota
        if ($request->idline) {$amember->idline = $request->idline;}             // idline
        if ($request->email) {$amember->email = $request->email;}                // email
        if ($request->phone) {$amember->phone = $request->phone;}                // phone
        if ($request->whatsapp) {$amember->whatsapp = $request->whatsapp;}       // whatsapp
        $amember->save();

        // File Upload KTM
        if ($request->ktm) {
            $request->validate(['ktm' => 'required|mimes:jpeg,jpg,png,pdf',]);

            if ($request->hasFile('ktm') && $request->file('ktm')->isValid()) {
                $namafile = Auth::user()->id . '-amem-ktm.' . $request->file('ktm')->getClientOriginalExtension();
                $request->file('ktm')->storeAs('ktm', $namafile);
    
                $amember->status_ktm = "pending";
                $amember->ktm = $namafile;
                $amember->save();
            } else {
                return back()->with('fail.bio', 'Error occured during Member 1 ID Card / Student ID Card file upload, Please try again');
            }
        }

        // File Upload SKMA
        if ($request->skma) {
            $request->validate(['skma' => 'required|mimes:jpeg,jpg,png,pdf',]);

            if ($request->hasFile('skma') && $request->file('skma')->isValid()) {
                $namafile = Auth::user()->id . '-amem-skma.'. $request->file('skma')->getClientOriginalExtension();
                $request->file('skma')->storeAs('skma', $namafile);
    
                $amember->status_skma = "pending";
                $amember->skma = $namafile;
                $amember->save();
            } else {
                return back()->with('fail.bio', 'Error occured during Member 1 Certificate of Active Student file upload, Please try again');
            }
        }

        return back()->with('success.bio', 'Member 1 Biodata Updated Successfully');
    }

    public function uploadbmem(Request $request)
    {
        $bmember = Bmember::find(Auth::user()->id);

        if ($request->nama) {$bmember->name = $request->nama;}                   // nama
        if ($request->nim) {$bmember->nim = $request->nim;}                      // nim
        if ($request->institusi) {$bmember->institusi = $request->institusi;}    // institusi
        if ($request->prov) {$bmember->prov = $request->prov;}                   // prov
        if ($request->kota) {$bmember->kota = $request->kota;}                   // kota
        if ($request->idline) {$bmember->idline = $request->idline;}             // idline
        if ($request->email) {$bmember->email = $request->email;}                // email
        if ($request->phone) {$bmember->phone = $request->phone;}                // phone
        if ($request->whatsapp) {$bmember->whatsapp = $request->whatsapp;}       // whatsapp
        $bmember->save();

        // File Upload KTM
        if ($request->ktm) {
            $request->validate(['ktm' => 'required|mimes:jpeg,jpg,png,pdf',]);

            if ($request->hasFile('ktm') && $request->file('ktm')->isValid()) {
                $namafile = Auth::user()->id . '-bmem-ktm.' . $request->file('ktm')->getClientOriginalExtension();
                $request->file('ktm')->storeAs('ktm', $namafile);
    
                $bmember->status_ktm = "pending";
                $bmember->ktm = $namafile;
                $bmember->save();
            } else {
                return back()->with('fail.bio', 'Error occured during Member 2 ID Card / Student ID Card file upload, Please try again');
            }
        }

        // File Upload SKMA
        if ($request->skma) {
            $request->validate(['skma' => 'required|mimes:jpeg,jpg,png,pdf',]);

            if ($request->hasFile('skma') && $request->file('skma')->isValid()) {
                $namafile = Auth::user()->id . '-bmem-skma.'. $request->file('skma')->getClientOriginalExtension();
                $request->file('skma')->storeAs('skma', $namafile);
    
                $bmember->status_skma = "pending";
                $bmember->skma = $namafile;
                $bmember->save();
            } else {
                return back()->with('fail.bio', 'Error occured during Member 2 Certificate of Active Student file upload, Please try again');
            }
        }

        return back()->with('success.bio', 'Member 2 Biodata Updated Successfully');
    }

    public function HacktodayCategory(Request $request) {
        $request->validate([
            'userid' => 'required',
            'category' => 'required',
        ]);

        $done = htcategory::Create([
            'team_id' => $request->userid,
            'category' => $request->category,
        ]);

        if ($done) {
            return back()->with('success.category', 'Category Confirmed');
        }
        return back()->with('fail.category', 'Error occured during Category Confirmation, Please try again'); 
    }
}
