<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SellerPierEmails extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    protected $list;
    protected $headers;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($list, $headers)
    {
        $this->list = $list;
        $this->headers = $headers;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $this->list
            return $this->from('support@sellerpier.com')
            ->getHeaders()
            ->addTextHeader($this->headers)
            ->markdown('email.Sellerpier');
    }
}
