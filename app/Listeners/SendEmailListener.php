<?php

namespace App\Listeners;

use App\Events\EventAccepted;
use App\Events\EventBooked;
use App\Services\SendMailService;

class SendEmailListener
{
    /**
     * Create the event listener.
     */
    public function __construct(public SendMailService $sendMailService)
    {
    }

    /**
     * Handle the event.
     */
    public function handle(EventBooked|EventAccepted $event)
    {
        $this->sendMailService->sendMail($event->booking);
    }
}
