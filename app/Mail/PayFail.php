<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PayFail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $url;
    public $bundlename;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->url = $data['url'];
        $this->bundlename = $data['bundlename'];
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.payfail')->subject('Please Reupload Payment');
    }
}
