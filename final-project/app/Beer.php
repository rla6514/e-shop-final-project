<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    public function carts()
    {
        return $this->hasMany('App\Cart');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
