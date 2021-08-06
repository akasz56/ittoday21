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

    // REST API ittoday
    // - get tim belom bayar                        getUnpaidTeam()
    // - get tim udah bayar belom lengkap data      getUnfinishedTeamData()
    // - get paid tim member emails                 getTeamEmails()
    // - get paid tim member no hp, wa, idline      getTeamContacts()

    public function getUnpaidTeam() {
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $response['status'] = 'Unpaid';
        $i = 0;
        $teams = User::all()->where('verified_bayar', '!=', 'done')->sortBy('jenis_lomba');
        foreach ($teams as $team) {
            if ($team->name == "contoh tim")
                continue;
            $response['data'][$i] = $this->getEmail($team);
            $i++;
        }
        return response()->json($response);        
    }
    
    public function getUnfinishedTeamData() {
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $response['status'] = 'Incomplete';
        $i = 0;
        $teams = User::all()->where('verified_bayar', '=', 'done')->where('verified_lomba', '!=', 'done')->sortBy('jenis_lomba');
        foreach ($teams as $team) {
            if ($team->name == "contoh tim")
                continue;
            $response['data'][$i] = $this->getEmail($team);
            $i++;
        }
        return response()->json($response);        
    }

    public function getTeamEmails()
    {
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();
        // hackComp
        $i = 0;
        $teams = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'hack')->sortBy('id');
        foreach ($teams as $team) {
            if ($team->name == "contoh tim")
                continue;
            $response['hack'][$i] = $this->getEmails($team);
            $i++;
        }
        // uxComp
        $i = 0;
        $teams = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'ux_1')->sortBy('id');
        $teams = $teams->merge(User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'ux_2')->sortBy('id'));
        foreach ($teams as $team) {
            if ($team->name == "contoh tim")
                continue;
            $response['ux'][$i] = $this->getEmails($team);
            $i++;
        }
        // busyComp
        $i = 0;
        $teams = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'busy_1')->sortBy('id');
        $teams = $teams->merge(User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'busy_2')->sortBy('id'));
        foreach ($teams as $team) {
            if ($team->name == "contoh tim")
                continue;
            $response['busy'][$i] = $this->getEmails($team);
            $i++;
        }
        
        return response()->json($response);
    }

    public function getTeamContacts()
    {
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();
        // hackComp
        $i = 0;
        $teams = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'hack')->sortBy('id');
        foreach ($teams as $team) {
            if ($team->name == "contoh tim")
                continue;
            $response['hack'][$i] = $this->getContacts($team);
            $i++;
        }
        // uxComp
        $i = 0;
        $teams = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'ux_1')->sortBy('id');
        $teams = $teams->merge(User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'ux_2')->sortBy('id'));
        foreach ($teams as $team) {
            if ($team->name == "contoh tim")
                continue;
            $response['ux'][$i] = $this->getContacts($team);
            $i++;
        }
        // busyComp
        $i = 0;
        $teams = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'busy_1')->sortBy('id');
        $teams = $teams->merge(User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'busy_2')->sortBy('id'));
        foreach ($teams as $team) {
            if ($team->name == "contoh tim")
                continue;
            $response['busy'][$i] = $this->getContacts($team);
            $i++;
        }
        
        return response()->json($response);
    }

    // Methods
    public function getEmail($datatim) {
        $arr['id'] = $datatim->id;
        if ($datatim->jenis_lomba == 'ux_1' || $datatim->jenis_lomba == 'ux_2') {
            $arr['lomba'] = 'UXToday';
        } else if ($datatim->jenis_lomba == 'busy_1' || $datatim->jenis_lomba == 'busy_2') {
            $arr['lomba'] = 'IT Business';
        } else {
            $arr['lomba'] = 'HackToday';
        }
        $arr['nama_tim'] = $datatim->name;
        $arr['email_tim'] = $datatim->email;

        return $arr;
    }

    public function getEmails($datatim)
    {
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

    public function getContacts($datatim)
    {
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
