<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // Payment form
    public function form()
    {
        return $this->belongsTo('App\Form');
    }

    // Payment receiver
    public function user()
    {
        return $this->belongsTo('App\User');
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

    // Return formatted fee
    public function feeFormatted()
    {
        return number_format($this->application_fee_amount / 100, 2, '.', ',');
    }

    public function feeFormattedWithCurrency()
    {
        return $this->feeFormatted() . ' ' . strtoupper($this->currency);
    }

    // Return net earnings
    public function netFormatted()
    {
        return number_format(($this->amount - $this->application_fee_amount) / 100, 2, '.', ',');
    }

    public function netFormattedWithCurrency()
    {
        return $this->netFormatted() . ' ' . strtoupper($this->currency);
    }
}
