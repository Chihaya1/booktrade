<?php

namespace App\Mail;

use App\Deposit;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DepositConfirm extends Mailable
{
    use Queueable, SerializesModels;

    public $deposit;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(deposit $deposit)
    {
        $this->deposit=$deposit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.deposits.depositconfirm');
    }
}
