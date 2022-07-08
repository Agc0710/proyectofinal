<?php

namespace App\Mail;

use App\Shirt;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShirtReport extends Mailable
{
    private $shirt;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Shirt $shirt)
    {
        $this->shirt = $shirt;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('shirts.mail.report',[
            'shirt' => $this->shirt
        ]);
    }
}
