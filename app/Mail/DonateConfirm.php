<?php

namespace App\Mail;

use App\Donate;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DonateConfirm extends Mailable
{
    use Queueable, SerializesModels;
    
    public $donate;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Donate $donate)
    {
        $this->donate=$donate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.donates.donationconfirm');
    }
}
