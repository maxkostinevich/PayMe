<?php

// Stripe Settings
return [
    // Stripe Publishable Key
    'publishable_key' => env('STRIPE_PUBLISHABLE_KEY', ''),
    // Stripe Secret Key
    'secret' => env('STRIPE_SECRET', ''),
    // Stripe Connect Client ID
    'client_id' => env('STRIPE_CLIENT_ID', ''),

];