<?php

// Stripe Settings
return [
    // Stripe Secret Key
    'secret' => env('STRIPE_SECRET', ''),
    // Stripe Connect Client ID
    'client_id' => env('STRIPE_CLIENT_ID', ''),

];