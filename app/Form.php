<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    // Owner of the form
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
