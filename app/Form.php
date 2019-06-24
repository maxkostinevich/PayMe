<?php

namespace App;

use function GuzzleHttp\Psr7\str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use SoftDeletes;

    // Owner of the form
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    // Return formatted amount
    public function amountFormatted()
    {
        return number_format($this->amount / 100, 2, '.', ',');
    }

    public function amountFormattedWithCurrency()
    {
        return $this->amountFormatted() . ' ' . strtoupper($this->currency);
    }
}
