<?php

namespace App\Jobs;

use Mail;
use Illuminate\Bus\Queueable;
use App\Mail\SellerPierEmails;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendSellerPierMaill implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $list;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($list)
    {
        $this->list = $list;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $send = new SellerPierEmails($this->list);
        Mail::to($this->list)->send($send);

    }
}
