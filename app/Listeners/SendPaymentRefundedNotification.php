<?php

namespace App\Listeners;

use App\Events\PaymentRefunded;
use App\Notifications\PaymentRefundedNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Notification;

// Send Payment Refunded to the Seller
class SendPaymentRefundedNotification implements ShouldQueue
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
    public function handle(PaymentRefunded $event)
    {
        Notification::route('mail', $event->payment->customer_email)
            ->notify(new PaymentRefundedNotification($event->payment));
    }
}
