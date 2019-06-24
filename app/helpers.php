<?php

// Calculate application fee (in cents) for the payment
function get_payment_fee($amount)
{
    // Get 5% + 50 cents
    $fee = $amount * 0.05 + 50;
    $fee = round($fee);
    return $fee;
}

function amountFormatted($amount)
{
    return number_format($amount / 100, 2, '.', ',');
}

function amountFormattedWithCurrency($amount, $currency = 'usd')
{
    return amountFormatted($amount) . ' ' . strtoupper($currency);
}