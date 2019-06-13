<?php

namespace App;

use function GuzzleHttp\Psr7\str;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    // Owner of the form
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Return formatted amount
    public function amountFormatted()
    {
        return $this->amount / 100;
    }

    public function amountFormattedWithCurrency()
    {
        return strtoupper($this->amount / 100 . ' ' . $this->currency);
    }
}
