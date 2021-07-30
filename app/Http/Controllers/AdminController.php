<?php

namespace App\Http\Controllers;

use App\Models\Amember;
use App\Models\Bmember;
use App\Models\Leader;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function downloadProp($namafile)
    {
        if (Storage::disk('local')->exists('proposal/' . $namafile)) {
            return Storage::disk('local')->download('proposal/' . $namafile);
        } else {
            // They called me a madman
            echo "<div style='height: 100%; display: flex; ";
            echo "justify-content: center; align-items: center; flex-direction: column; ";
            echo "font-family: monospace; ";
            echo "border: 1px solid black; font-size: 10em;'>";
            echo "Filenya Gaada <br>";
            echo ":(";
            echo "</div>";
        }
    }

    public function downloadtrf($namafile)
    {
        if (Storage::disk('local')->exists('trf/' . $namafile)) {
            return Storage::disk('local')->download('trf/' . $namafile);
        } else {
            // They called me a madman
            echo "<div style='height: 100%; display: flex; ";
            echo "justify-content: center; align-items: center; flex-direction: column; ";
            echo "font-family: monospace; ";
            echo "border: 1px solid black; font-size: 10em;'>";
            echo "Filenya Gaada <br>";
            echo ":(";
            echo "</div>";
        }
    }

    public function downloadktm($namafile)
    {
        if (Storage::disk('local')->exists('ktm/' . $namafile)) {
            return Storage::disk('local')->download('ktm/' . $namafile);
        } else {
            // They called me a madman
            echo "<div style='height: 100%; display: flex; ";
            echo "justify-content: center; align-items: center; flex-direction: column; ";
            echo "font-family: monospace; ";
            echo "border: 1px solid black; font-size: 10em;'>";
            echo "Filenya Gaada <br>";
            echo ":(";
            echo "</div>";
        }
    }

    public function downloadskma($namafile)
    {
        if (Storage::disk('local')->exists('skma/' . $namafile)) {
            return Storage::disk('local')->download('skma/' . $namafile);
        } else {
            // They called me a madman
            echo "<div style='height: 100%; display: flex; ";
            echo "justify-content: center; align-items: center; flex-direction: column; ";
            echo "font-family: monospace; ";
            echo "border: 1px solid black; font-size: 10em;'>";
            echo "Filenya Gaada <br>";
            echo ":(";
            echo "</div>";
        }
    }

    public function getCompData()
    {
        $users = User::all()->where('verified_bayar', 'done')->sortBy('jenis_lomba');
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $response['data'] = array();

        $i = 1;
        foreach ($users as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            if ($user->jenis_lomba == "hack") {
                $response['data'][$i] = $this->getHacktoday($user);
                $i++;
            } else {
                $response['data'][$i] = $this->getITUX($user);
                $i++;
            }
        }
        return response()->json($response);
    }

    public function getHacktoday($datatim)
    {
        $arr['lomba'] = 'HackToday';
        $arr['id'] = $datatim->id;
        $arr['nama_tim'] = $datatim->name;
        $arr['email_tim'] = $datatim->email;
        
        $arr['nama_ketua'] = Leader::find($arr['id'])->name;
        $arr['email_ketua'] = Leader::find($arr['id'])->email;
        
        $arr['nama_member1'] = Amember::find($arr['id'])->name;
        $arr['email_member1'] = Amember::find($arr['id'])->email;
        
        $arr['nama_member2'] = Bmember::find($arr['id'])->name;
        $arr['email_member2'] = Bmember::find($arr['id'])->email;
        
        return $arr;
    }

    public function getITUX($datatim)
    {
        if ($datatim->jenis_lomba == "ux_1" || $datatim->jenis_lomba == "ux_2") {
            $arr['lomba'] = 'UXToday';
        } else {
            $arr['lomba'] = 'Bistik';
        }
        $arr['id'] = $datatim->id;
        $arr['nama_tim'] = $datatim->name;
        $arr['email_tim'] = $datatim->email;

        $arr['nama_ketua'] = Leader::find($arr['id'])->name;
        $arr['nomor_hp_ketua'] = Leader::find($arr['id'])->phone;
        $arr['nomor_wa_ketua'] = Leader::find($arr['id'])->whatsapp;
        $arr['idline_ketua'] = Leader::find($arr['id'])->idline;

        $arr['nama_member1'] = Amember::find($arr['id'])->name;
        $arr['nomor_hp_member1'] = Amember::find($arr['id'])->phone;
        $arr['nomor_wa_member1'] = Amember::find($arr['id'])->whatsapp;
        $arr['idline_member1'] = Amember::find($arr['id'])->idline;

        $arr['nama_member2'] = Bmember::find($arr['id'])->name;
        $arr['nomor_hp_member2'] = Bmember::find($arr['id'])->phone;
        $arr['nomor_wa_member2'] = Bmember::find($arr['id'])->whatsapp;
        $arr['idline_member2'] = Bmember::find($arr['id'])->idline;
        return $arr;
    }
}
