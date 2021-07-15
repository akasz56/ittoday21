<?php

namespace App\Http\Controllers;

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

    public function deletetrf($namafile)
    {
        if (Storage::disk('local')->exists('trf/' . $namafile)) {
            Storage::delete('trf/' . $namafile);
        }
        return back();
    }

    public function deletektm($namafile)
    {
        if (Storage::disk('local')->exists('ktm/' . $namafile)) {
            Storage::delete('ktm/' . $namafile);
        }
        return back();
    }

    public function deleteskma($namafile)
    {
        if (Storage::disk('local')->exists('skma/' . $namafile)) {
            Storage::delete('skma/' . $namafile);
        }
        return back();
    }
}
