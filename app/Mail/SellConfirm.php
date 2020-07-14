<?php

namespace App\Mail;

use App\Sell;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SellConfirm extends Mailable
{
    use Queueable, SerializesModels;
    
    public $sell;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Sell $sell)
    {
        $this->sell=$sell;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sells.confirm');
    }
}
