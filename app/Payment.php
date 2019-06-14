<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // Payment receiver
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
