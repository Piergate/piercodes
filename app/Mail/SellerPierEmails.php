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
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($list)
    {
        $this->list = $list;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $this->list
        return $this->withSwiftMessage(function ($message) {
            $message->getHeaders()
            ->addTextHeader('MIME-Version', '1.0');
            // ->addTextHeader('Content-type', 'text/html')
            // ->setContentType('text/html')
            // ->addTextHeader('charset', 'iso-8859-1');
        })
            ->from('support@sellerpier.com')
            ->markdown('email.Sellerpier');
    }
}
