<?php

namespace App\Http\Controllers;

use App\Mail\AdminNotif;
use App\Mail\PayPending;
use App\Models\Bundle;
use App\Models\Event;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    public function index()
    {
        return view('ticket.index');
    }

    public function ticketActions($uuid)
    {
        $order = Ticket::where('ticketID', $uuid)->first();
        // Order Not Found
        if (!$order) return redirect()->route('ticket.index')->with('404ticket', 'Ticket not Found');
        // CekStock
        if (!$this->cekStock($order)) return redirect()->route('ticket.index')->with('404ticket', 'We are sorry, one of the ticket you ordered ran out of stock');
        // Order has no payMethod
        if (!isset($order->payMethod)) return $this->payMethod($order);
        // Order has not paid
        if (!isset($order->payStatus)) return $this->payVerif($order);
        // Order has not verified
        if ($order->payStatus != "done") return $this->payVerif($order);
        // Order done
        return $this->showTicket($order);
    }

    public function bundle()
    {
        return view('ticket.bundle', [
            'stock' => $this->getStock(),
        ]);
    }

    public function orderBundle(Request $request)
    {
        $bundle = $this->getBundle($request->type, $request->event1, $request->event2);
        
        if (isset($bundle['error'])) {
            return back()->withInput()->with('bundle_error', $bundle['error']);
        }

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $uuid = Str::uuid();

        $ticket = Ticket::create([
            'name' => $request->nama,
            'ticketID' => $uuid,
            'email' => $request->email,
            'phone' => $request->phone,
            'whatsapp' => (isset($request->whatsapp)) ? $request->whatsapp : null,
            'bundleID' => (isset($bundle['BundleID'])) ? $bundle['BundleID']->id : null,
            'event1ID' => $bundle['Event1ID']->id,
            'event2ID' => $bundle['Event2ID']->id,
            'event3ID' => (isset($bundle['Event3ID'])) ? $bundle['Event3ID']->id : null,
            'event4ID' => (isset($bundle['Event4ID'])) ? $bundle['Event4ID']->id : null,
            'event5ID' => (isset($bundle['Event5ID'])) ? $bundle['Event5ID']->id : null,
        ]);
        Mail::to($ticket->email)->queue(new PayPending(
            [
                'name' => $ticket->name,
                'url' => $this->TicketURL($ticket->ticketID),
                'bundlename' => (isset($ticket->bundle)) ? $ticket->bundle->name : 'Bundle 2',
            ]
        ));
        return redirect()->route('ticket.ticket', ['uuid' => $uuid]);
    }

    public function payMethod($order)
    {
        return view('ticket.paymethod', [
            'viewModel' => $this->viewModel($order),
            'payMethod' => $this->getPayMethod('acas'),
        ]);
    }

    public function payMethodPost(Request $request)
    {
        $request->validate([
            'orderid' => 'required',
            'payment' => 'required',
        ]);
        $order = Ticket::where('ticketID', '=', $request->orderid)->first();
        $order->payMethod = $this->getPayMethod($request->payment)->pay;
        $order->save();
        return redirect()->route('ticket.ticket', ['uuid' => $order->ticketID]);
    }

    public function payVerif($order)
    {
        return view('ticket.payverif', [
            'viewModel' => $this->viewModel($order),
            'viewModelPay' => $this->viewModelPay($order),
            'payMethod' => $this->getPayMethod($order->payMethod),
        ]);
    }

    public function payConfirm(Request $request)
    {
        $request->validate([
            'orderid' => 'required',
            'nama' => 'required',
            'proof' => 'required|mimes:jpeg,jpg,png',
        ]);
        $order = Ticket::where('ticketID', '=', $request->orderid)->first();

        if ($request->hasFile('proof') && $request->file('proof')->isValid()) {
            $namafile = $order->ticketID . '.' . $request->file('proof')->getClientOriginalExtension();
            $request->file('proof')->storeAs('bukti', $namafile);
            $order->payName = $request->nama;
            $order->payFile = $namafile;
            $order->payStatus = "pending";
            $order->save();
            $bundlename = ($order->bundle == null) ? 'Bundle 2' : $order->bundle->name;
            $this->notifyAdmin($order->payMethod, $bundlename, $order->ticketID);
            return redirect()->route('ticket.ticket', ['uuid' => $order->ticketID])->with('success', 'Message');
        }
        return redirect()->route('ticket.ticket', ['uuid' => $order->ticketID])->with('fail', 'Message');
    }

    public function showTicket($order)
    {
        return view('ticket.show', [
            'paid' => 1,
            'viewModel' => $this->viewModel($order),
        ]);
    }


    // ---------------------------------------------------------------- Methods 

    public function getBundle($bundlename, $Event1 = null, $Event2 = null)
    {
        switch ($bundlename) {
            case 'bundletwo':
                if ($Event1 == $Event2) {
                    $bundle['error'] = 'You can\'t buy 2 tickets for the same Ilkommunity';
                    break;
                }
                $bundle['Event1ID'] = Event::find($Event1);
                $bundle['Event2ID'] = Event::find($Event2);
                break;

            case 'bundlefour':
                $bundle['BundleID'] = Bundle::find(5);
                $bundle['Event1ID'] = Event::find(1);
                $bundle['Event2ID'] = Event::find(2);
                $bundle['Event3ID'] = Event::find(3);
                $bundle['Event4ID'] = Event::find(4);
                break;

            case 'bundlefive':
                $bundle['BundleID'] = Bundle::find(6);
                $bundle['Event1ID'] = Event::find(1);
                $bundle['Event2ID'] = Event::find(2);
                $bundle['Event3ID'] = Event::find(3);
                $bundle['Event4ID'] = Event::find(4);
                $bundle['Event5ID'] = Event::find(5);
                break;

            case 'bundleux':
                $bundle['BundleID'] = Bundle::find(7);
                $bundle['Event1ID'] = Event::find(3);
                $bundle['Event2ID'] = Event::find(6);
                break;

            default:
                $bundle['error'] = 'an Error Occured, please try again later';
                break;
        }
        return $bundle;
    }

    public function notifyAdmin($bank, $bundlename, $uuid)
    {
        $data = [
            'hari' => Carbon::now()->locale('id')->dayName,
            'jam' => Carbon::now()->timezone('Asia/Jakarta')->hour,
            'bundlename' => $bundlename,
            'url' => 'acas.ittoday.id/infoticket.php?id=' . $uuid,
        ];
        switch ($bank) {
            case 'bni':
            case 'dana':
            case 'ovo':
                Mail::to('indo14nurfath@apps.ipb.ac.id')->queue(new AdminNotif($data));
                // Mail::to(dillah?)->queue(new AdminNotif($data));
                break;
            case 'bca':
            case 'gopay':
                Mail::to('indo14nurfath@apps.ipb.ac.id')->queue(new AdminNotif($data));
                // Mail::to(farhan?)->queue(new AdminNotif($data));
                break;
            default:
                break;
        }
        return true;
    }

    public function getPayMethod($payMethod)
    {
        switch ($payMethod) {
            case 'bni':
                return (object) array(
                    'pay' => 'bni',
                    'number' => '1168834234',
                    'name' => 'Nisma Karmiahtun Fadilah',
                );
            case 'bca':
                return (object) array(
                    'pay' => 'bca',
                    'number' => '3740828311',
                    'name' => 'Farhan Fathurrahman',
                );
            case 'gopay':
                return (object) array(
                    'pay' => 'gopay',
                    'number' => '08112662361',
                    'name' => 'Farhan Fathurrahman',
                );
            case 'dana':
                return (object) array(
                    'pay' => 'dana',
                    'number' => '0895412796514',
                    'name' => 'Nisma Karmiahtun Fadilah',
                );
            case 'ovo':
                return (object) array(
                    'pay' => 'ovo',
                    'number' => '081287406989',
                    'name' => 'Nisma Karmiahtun Fadilah',
                );
            case 'acas':
                # AllViews
                return (object) array(
                    'bni' => [
                        'number' => '1168834234',
                        'name' => 'Nisma Karmiahtun Fadilah',
                    ],
                    'bca' => [
                        'number' => '3740828311',
                        'name' => 'Farhan Fathurrahman',
                    ],
                    'gopay' => [
                        'number' => '08112662361',
                        'name' => 'Farhan Fathurrahman',
                    ],
                    'dana' => [
                        'number' => '0895412796514',
                        'name' => 'Nisma Karmiahtun Fadilah',
                    ],
                    'ovo' => [
                        'number' => '081287406989',
                        'name' => 'Nisma Karmiahtun Fadilah',
                    ],
                );
            default:
                # NotFound...
                return (object) array(
                    'pay' => null,
                    'number' => null,
                    'name' => null,
                );
        }
    }

    public function viewModel($order)
    {
        $eventsIncluded = (object) array(
            'event1' => $order->event1,
            'event2' => $order->event2,
            'event3' => (isset($order->event3)) ? $order->event3 : null,
            'event4' => (isset($order->event4)) ? $order->event4 : null,
            'event5' => (isset($order->event5)) ? $order->event5 : null,
        );
        return (object) array(
            'ticketID' => $order->ticketID,
            'name' => $order->name,
            'email' => $order->email,
            'phone' => $order->phone,
            'whatsapp' => (isset($order->whatsapp)) ? $order->whatsapp : '-',
            'bundleName' => (isset($order->bundle)) ? $order->bundle->name : 'Bundle 2',
            'price' => (isset($order->bundle)) ? $order->bundle->price : 38000,
            'eventsIncluded' => $eventsIncluded,
        );
    }

    public function viewModelPay($order)
    {
        switch ($order->payStatus) {
            case 'done':
                $payStatus = 2;
                break;
            case 'pending':
                $payStatus = 1;
                break;
            default:
                $payStatus = 0;
                break;
        }
        return (object) array(
            'payMethod' => (isset($order->payMethod)) ? $order->payMethod : '-',
            'payStatus' => $payStatus,
        );
    }

    public function cekStock($order)
    {
        if ($order->bundleID) {
            return $order->bundle->stock;
        } else {
            if ($order->bundle1->stock <= 0) {
                return false;
            } elseif ($order->bundle2->stock <= 0) {
                return false;
            }
            return true;
        }
    }

    public function getStock()
    {
        $bundle = Bundle::all();
        return (object) array(
            'daming' => $bundle[0]->stock,
            'gary' => $bundle[1]->stock,
            'ux' => $bundle[2]->stock,
            'devtalks' => $bundle[3]->stock,
            'ilkbundle' => $bundle[4]->stock,
            'ilkintbundle' => $bundle[5]->stock,
            'uxbundle' => $bundle[6]->stock,
        );
    }

    public function TicketURL($uuid)
    {
        return Url('/') . '/ticket' . '/' . $uuid;
    }
}
