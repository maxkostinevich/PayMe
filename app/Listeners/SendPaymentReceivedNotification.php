<?php

namespace App\Listeners;

use App\Events\PaymentCreated;
use App\Notifications\PaymentReceivedNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Notification;

// Send Payment Received to the Seller
class SendPaymentReceivedNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param PaymentCreated $event
     * @return void
     */
    public function handle(PaymentCreated $event)
    {
        Notification::send($event->payment->user, new PaymentReceivedNotification($event->payment));
    }
}
