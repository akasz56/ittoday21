<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminNotif extends Mailable
{
    use Queueable, SerializesModels;

    public $hari;
    public $jam;
    public $bundlename;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->hari = $data['hari'];
        $this->jam = $data['jam'];
        $this->bundlename = $data['bundlename'];
        $this->url = $data['url'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.AdminNotif')->subject($this->hari . ', jam ' . $this->jam . ' - Payment');
    }
}
