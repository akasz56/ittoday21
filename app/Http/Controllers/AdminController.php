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

    public function getCompDataAll()
    {
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $response['hack'] = $this->getCompDataHack();
        $response['ux'] = $this->getCompDataUX();
        $response['bistik'] = $this->getCompDataBistik();

        return response()->json($response);
    }

    public function getCompDataHack()
    {
        $done = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'hack')->sortBy('id');
        $pending = User::all()->where('verified_bayar', 'pending')->where('jenis_lomba', '=', 'hack')->sortBy('id');
        $response['data'] = array();

        $i = 1;
        foreach ($pending as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            $response['data'][$i] = $this->getHacktoday($user, 'pending');
            $i++;
        }
        foreach ($done as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            $response['data'][$i] = $this->getHacktoday($user, 'confirmed');
            $i++;
        }
        return $response;
    }

    public function getCompDataUX()
    {
        $done1 = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'ux_1');
        $pending1 = User::all()->where('verified_bayar', 'pending')->where('jenis_lomba', '=', 'ux_1');
        $done2 = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'ux_2');
        $pending2 = User::all()->where('verified_bayar', 'pending')->where('jenis_lomba', '=', 'ux_2');
        $response['data'] = array();

        $i = 1;
        foreach ($pending1 as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            $response['data'][$i] = $this->getITUX($user, 'pending');
            $i++;
        }
        foreach ($pending2 as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            $response['data'][$i] = $this->getITUX($user, 'pending');
            $i++;
        }
        foreach ($done1 as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            $response['data'][$i] = $this->getITUX($user, 'confirmed');
            $i++;
        }
        foreach ($done2 as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            $response['data'][$i] = $this->getITUX($user, 'confirmed');
            $i++;
        }
        return $response;
    }

    public function getCompDataBistik()
    {
        $done1 = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'busy_1');
        $pending1 = User::all()->where('verified_bayar', 'pending')->where('jenis_lomba', '=', 'busy_1');
        $done2 = User::all()->where('verified_bayar', 'done')->where('jenis_lomba', '=', 'busy_2');
        $pending2 = User::all()->where('verified_bayar', 'pending')->where('jenis_lomba', '=', 'busy_2');
        $response['data'] = array();

        $i = 1;
        foreach ($pending1 as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            $response['data'][$i] = $this->getITUX($user, 'pending');
            $i++;
        }
        foreach ($pending2 as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            $response['data'][$i] = $this->getITUX($user, 'pending');
            $i++;
        }
        foreach ($done1 as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            $response['data'][$i] = $this->getITUX($user, 'confirmed');
            $i++;
        }
        foreach ($done2 as $user) {
            if ($user->file_lomba == "ini dummy")
                continue;
            $response['data'][$i] = $this->getITUX($user, 'confirmed');
            $i++;
        }
        return $response;
    }

    public function getHacktoday($datatim, $status_pembayaran)
    {
        $arr['status_pembayaran'] = $status_pembayaran;
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

    public function getITUX($datatim, $status_pembayaran)
    {
        $arr['status_pembayaran'] = $status_pembayaran;
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
