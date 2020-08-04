<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function beers()
    {
        return $this->hasMany('App\Beer');
    }
}
