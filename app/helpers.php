<?php

// Calculate application fee (in cents) for the payment
function get_payment_fee($amount)
{
    // Get 5% + 50 cents
    $fee = $amount * 0.05 + 50;
    $fee = round($fee);
    return $fee;
}