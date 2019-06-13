<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;

class StripeOAuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Stripe $stripe)
    {
        $this->middleware('auth');
    }

    public function oauth()
    {
        $url = \Stripe\OAuth::authorizeUrl([
            'scope' => 'read_only',
        ]);
        return redirect($url);
    }

    public function authenticate(Request $request)
    {
        $user = auth()->user();
        if ($request->get('code')) {
            // The user has been redirected back from Stripe with an authorization code.
            $code = $request->get('code');
            try {
                $response = \Stripe\OAuth::token([
                    'grant_type' => 'authorization_code',
                    'code' => $code,
                ]);
            } catch (\Stripe\Error\OAuth\OAuthBase $e) {
                exit("Error: " . $e->getMessage());
            }

            $user->stripe_account_id = $response->stripe_user_id;
            $user->save();

            return redirect()
                ->route('settings.edit')
                ->with('status', 'Your Stripe Account has been added successfully.');
        } elseif ($request->get('error')) {
            // The user was redirect back from the OAuth form with an error.
            $error = $request->get('error');
            $error_description = $request->get('error_description');
            return redirect()
                ->route('settings.edit')
                ->withErrors($error . ' : ' . $error_description);
        }
    }

    public function deactivate()
    {
        $user = auth()->user();
        try {
            \Stripe\OAuth::deauthorize([
                'stripe_user_id' => $user->stripe_account_id,
            ]);
        } catch (\Stripe\Error\OAuth\OAuthBase $e) {
            exit("Error: " . $e->getMessage());
        }
        $user->stripe_account_id = '';
        $user->save();
        return redirect()
            ->route('settings.edit')
            ->with('status', 'Your Stripe Account has been removed successfully.');
    }
}
