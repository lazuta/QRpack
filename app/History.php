<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public $table = "history";

    protected $fillable = [
        'description', 'packege_id'
    ];

    public function packege() 
    {
        return $this->belongsTo('App\Packege', 'packege_id', 'id');
    }
}
