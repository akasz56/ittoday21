<?php

namespace App\Http\Controllers;

use App\Mail\PayConfirm;
use App\Mail\PayFail;
use App\Models\Amember;
use App\Models\Bmember;
use App\Models\Bundle;
use App\Models\Event;
use App\Models\htcategory;
use App\Models\Leader;
use App\Models\Ticket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function downloadProp($namafile)
    {
        if (Storage::exists('proposal/' . $namafile)) {
            return Storage::download('proposal/' . $namafile);
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
        if (Storage::exists('trf/' . $namafile)) {
            return Storage::download('trf/' . $namafile);
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
        if (Storage::exists('ktm/' . $namafile)) {
            return Storage::download('ktm/' . $namafile);
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
        if (Storage::exists('skma/' . $namafile)) {
            return Storage::download('skma/' . $namafile);
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

    public function downloadbukti($namafile)
    {
        if (Storage::exists('bukti/' . $namafile)) {
            return Storage::download('bukti/' . $namafile);
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

    public function ticketAdminActions($uuid, $status)
    {
        $ticket = Ticket::where('ticketID', '=', $uuid)->first();
        if ($ticket->payStatus == $status) return redirect()->route('about');
        $ticket->payStatus = $status;
        $ticket->save();
        if ($status == "done") {
            Mail::to($ticket->email)->queue(new PayConfirm(
                [
                    'name' => $ticket->name,
                    'url' => $this->TicketURL($ticket->ticketID),
                    'bundlename' => (isset($ticket->bundle)) ? $ticket->bundle->name : 'Bundle 2',
                ]
            ));
            if ($ticket->bundleID) {
                $bundle = Bundle::find($ticket->bundleID);
                $bundle->stock--;
                $bundle->save();
            } else {
                $bundle1 = Bundle::find($ticket->event1)->first();
                $bundle1->stock--;
                $bundle1->save();
                $bundle2 = Bundle::find($ticket->event2)->first();
                $bundle2->stock--;
                $bundle2->save();
            }
            return redirect('/');
        } else {
            Mail::to($ticket->email)->queue(new PayFail(
                [
                    'name' => $ticket->name,
                    'url' => $this->TicketURL($ticket->ticketID),
                    'bundlename' => (isset($ticket->bundle)) ? $ticket->bundle->name : 'Bundle 2',
                ]
            ));
            return redirect('/')->route('about');
        }
    }

    // REST API ittoday
    // - get tim belom bayar                        getUnpaidTeam()
    // - get tim udah bayar belom lengkap data      getUnfinishedTeamData()
    // - get paid tim member emails                 getTeamEmails()
    // - get paid tim member no hp, wa, idline      getTeamContacts()
    // - get hacktoday team categories              getHTCategories()
    // - get all tickets                            getAllTickets()
    // - get ticket                                 getTicket()

    public function getUnpaidTeam()
    {
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

    public function getUnfinishedTeamData()
    {
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

    public function getHTCategories()
    {
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();

        $data = htcategory::all()->where('category', '=', 'Undergrad');
        $i = 0;
        foreach ($data as $datum) {
            $team = User::find($datum->team_id);
            $response['data']['Undergrad'][$i] = $this->getEmail($team);
            $response['data']['Undergrad'][$i]['univ'] = $this->getUniv($datum->team_id);
            $i++;
        }

        $data = htcategory::all()->where('category', '=', 'Student');
        $i = 0;
        foreach ($data as $datum) {
            $team = User::find($datum->team_id);
            $response['data']['Student'][$i] = $this->getEmail($team);
            $i++;
        }

        $data = htcategory::all()->where('category', '=', 'Public');
        $i = 0;
        foreach ($data as $datum) {
            $team = User::find($datum->team_id);
            $response['data']['Public'][$i] = $this->getEmail($team);
            $i++;
        }

        return response()->json($response);
    }

    public function getAllTickets()
    {
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $i = 0;
        foreach (Ticket::All()->sortByDesc('updated_at') as $ticket) {
            $response['data'][$i] = (object) array(
                'ticketID' => $ticket->ticketID,
                'bundle' => (isset($ticket->bundle)) ? $ticket->bundle->name : $this->whatEvents($ticket),
                'nama' => $ticket->name,
                'metodePembayaran' => (isset($ticket->payMethod)) ? $ticket->payMethod : '-',
                'statusPembayaran' => (isset($ticket->payStatus)) ? $ticket->payStatus : '-',
                'lastUpdated' => Carbon::parse($ticket->updated_at)->toDateTimeString(),
            );
            $i++;
        }
        return response()->json($response);
    }

    public function getTicket($uuid)
    {
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $ticket = Ticket::where('ticketID', '=', $uuid)->first();
        $response['data'] = (object) array(
            'ticketID' => $ticket->ticketID,
            'bundle' => (isset($ticket->bundle)) ? $ticket->bundle->name : 'Bundle 2',
            'pembeli' => (object) array(
                'nama' => $ticket->name,
                'email' => $ticket->email,
                'phone' => $ticket->phone,
                'whatsapp' => (isset($ticket->whatsapp)) ? $ticket->whatsapp : '-',
            ),
            'pembayaran' => (object) array(
                'metode' => (isset($ticket->payMethod)) ? $ticket->payMethod : '-',
                'nama' => (isset($ticket->payName)) ? $ticket->payName : '-',
                'file' => (isset($ticket->payFile)) ? Url('/') . '/acasdl/bukti/' . $ticket->payFile : '-',
                'status' => (isset($ticket->payStatus)) ? $ticket->payStatus : '-',
            ),
        );
        return response()->json($response);
    }

    public function getTicketCategorized()
    {
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $events = Event::All();
        $tickets = Ticket::Where('payStatus', 'done')->get()->sortBy('bundleID');

        foreach ($events as $event) {
            $response['data'][$event->id]['name'] = $event->name;
            $response['data'][$event->id]['data'] = $this->ticketCategorized($tickets, $event->id);
        }
        
        return response()->json($response);
    }
    
    public function getTicketByEvents($id)
    {
        $response['tanggal'] = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $tickets = Ticket::Where('payStatus', 'done')->get()->sortBy('bundleID');

        $response['name'] = Event::find($id)->name;
        $response['data'] = $this->ticketCategorized($tickets, $id);

        return response()->json($response);
    }

    // ---------------------------------------------------------------- Methods 
    public function getEmail($datatim)
    {
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

    public function getUniv($team_id)
    {
        $leader = Leader::find($team_id);
        $amem = Amember::find($team_id);
        $bmem = Bmember::find($team_id);
        if ($leader->institusi) {
            $univ = $leader->institusi;
        } else if ($amem->institusi) {
            $univ = $amem->institusi;
        } else if ($bmem->institusi) {
            $univ = $bmem->institusi;
        } else {
            $univ = 'belum ngisi (?)';
        }
        return $univ;
    }

    public function TicketURL($uuid)
    {
        return Url('/') . '/ticket' . '/' . $uuid;
    }

    public function whatEvents($ticket)
    {
        return Event::find($ticket->event1ID)->name . ' & ' . Event::find($ticket->event2ID)->name;
    }

    public function getTicketSummary(Ticket $t)
    {
        $arr['ticketID'] = $t->ticketID;
        $arr['bundle'] = (isset($t->bundle)) ? $t->bundle->name : 'Bundle 2';
        $arr['name'] = $t->name;
        $arr['email'] = $t->email;
        $arr['phone'] = $t->phone;
        $arr['whatsapp'] = $t->whatsapp;
        return $arr;
    }

    public function ticketCategorized($tickets, int $id)
    {
        $arr = array();
        switch ($id) {
            case 5:
                $i = 0;
                foreach ($tickets as $t) {
                    if ($t->bundleID == 6) {
                        $arr[$i] = $this->getTicketSummary($t);
                        $i++;
                    }
                }
                return $arr;

            case 1:
                $i = 0;
                foreach ($tickets as $t) {
                    switch ($t->bundleID) {
                        case null:
                            if (($t->event1ID == 1) || ($t->event2ID == 1)) {
                                $arr[$i] = $this->getTicketSummary($t);
                                $i++;
                            }
                            break;
                        case 5:
                            $arr[$i] = $this->getTicketSummary($t);
                            $i++;
                            break;
                        case 6:
                            $arr[$i] = $this->getTicketSummary($t);
                            $i++;
                            break;

                        default:
                            break;
                    }
                }
                return $arr;

            case 2:
                $i = 0;
                foreach ($tickets as $t) {
                    switch ($t->bundleID) {
                        case null:
                            if (($t->event1ID == 2) || ($t->event2ID == 2)) {
                                $arr[$i] = $this->getTicketSummary($t);
                                $i++;
                            }
                            break;
                        case 5:
                            $arr[$i] = $this->getTicketSummary($t);
                            $i++;
                            break;
                        case 6:
                            $arr[$i] = $this->getTicketSummary($t);
                            $i++;
                            break;

                        default:
                            break;
                    }
                }
                return $arr;

            case 4:
                $i = 0;
                foreach ($tickets as $t) {
                    switch ($t->bundleID) {
                        case null:
                            if (($t->event1ID == 4) || ($t->event2ID == 4)) {
                                $arr[$i] = $this->getTicketSummary($t);
                                $i++;
                            }
                            break;
                        case 5:
                            $arr[$i] = $this->getTicketSummary($t);
                            $i++;
                            break;
                        case 6:
                            $arr[$i] = $this->getTicketSummary($t);
                            $i++;
                            break;

                        default:
                            break;
                    }
                }
                return $arr;

            case 3:
                $i = 0;
                foreach ($tickets as $t) {
                    switch ($t->bundleID) {
                        case null:
                            if (($t->event1ID == 3) || ($t->event2ID == 3)) {
                                $arr[$i] = $this->getTicketSummary($t);
                                $i++;
                            }
                            break;
                        case 5:
                            $arr[$i] = $this->getTicketSummary($t);
                            $i++;
                            break;
                        case 6:
                            $arr[$i] = $this->getTicketSummary($t);
                            $i++;
                            break;
                        case 7:
                            $arr[$i] = $this->getTicketSummary($t);
                            $i++;
                            break;

                        default:
                            break;
                    }
                }
                return $arr;

            case 6:
                $i = 0;
                foreach ($tickets as $t) {
                    if ($t->bundleID == 7) {
                        $arr[$i] = $this->getTicketSummary($t);
                        $i++;
                    }
                }
                return $arr;
        }
    }
}
