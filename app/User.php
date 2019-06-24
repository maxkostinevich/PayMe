<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // User forms
    public function forms()
    {
        return $this->hasMany('App\Form');
    }

    // Payments
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    // Get user payments stats
    public function getStats()
    {
        $stats = [];
        // Calculate total sales
        $stats['totalSales'] = $this->payments()->notRefunded()->get()->groupBy('currency')->map(function ($item) {
            return $item->sum(function ($payment) {
                return $payment->amount;
            });
        })->map(function ($amount, $currency) {
            // convert all earnings to USD
            $reverse_rates = cache('currency_rates');
            return $amount * $reverse_rates[$currency];
        })->sum();

        // Calculate net earnings
        $stats['netEarnings'] = $this->payments()->notRefunded()->get()->groupBy('currency')->map(function ($item) {
            return $item->sum(function ($payment) {
                return $payment->amount - $payment->application_fee_amount;
            });
        })->map(function ($amount, $currency) {
            // convert all earnings to USD
            $reverse_rates = cache('currency_rates');
            return $amount * $reverse_rates[$currency];
        })->sum();

        // Calculate sales and payments in last 30 days
        $date = Carbon::today()->subDays(30);
        $stats['salesLast30Days'] = $this->payments()->notRefunded()->where('created_at', '>=', $date)->get()->groupBy('currency')->map(function ($item) {
            return $item->sum(function ($payment) {
                return $payment->amount - $payment->application_fee_amount;
            });
        })->map(function ($amount, $currency) {
            // convert all earnings to USD
            $reverse_rates = cache('currency_rates');
            return $amount * $reverse_rates[$currency];
        })->sum();

        // Payments quantity in last 30 days;
        $stats['paymentsLast30Days'] = $this->payments()->notRefunded()->where('created_at', '>=', $date)->count();

        return $stats;
    }
}
