<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PengumumanMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pengumuman;
    /**
     * Create a new message instance.
     *
     * @return void
     */



     public function __construct($pengumuman)
    {
        $this->pengumuman = $pengumuman;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from pengumumanPPDB.com')
                    ->view('Dashboard.Admin.Emails.pengumumanMail');
        // return $this->view('view.name');
    }
}
