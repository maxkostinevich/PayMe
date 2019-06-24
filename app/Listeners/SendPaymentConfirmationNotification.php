<?php

namespace App\Listeners;

use App\Events\PaymentCreated;
use App\Notifications\PaymentConfirmedNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Notification;

// Send Payment Confirmation to the Customer
class SendPaymentConfirmationNotification implements ShouldQueue
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
        Notification::route('mail', $event->payment->customer_email)
            ->notify(new PaymentConfirmedNotification($event->payment));
    }
}
