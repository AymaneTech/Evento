<?php

namespace App\Listeners;

use App\Events\EventAccepted;
use App\Events\EventBooked;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EventBooked|EventAccepted $event): void
    {

    }
}
