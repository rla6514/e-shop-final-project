<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public function beer()
    {
        return $this->belongsTo('App\Beer');
    }
}
