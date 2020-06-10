<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    protected $fillable = [
        'name', 'city', 'country', 'street'
    ];

    public function packeg() 
    {
        return $this->HasMany('App\Packege', 'id');
    }
}
