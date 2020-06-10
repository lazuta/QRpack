<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    protected $fillable = [
        'name', 'city', 'country', 'street', 'phone', 'index'
    ];

    public function packeg() 
    {
        return $this->HasMany('App\Packege', 'id');
    }
}
