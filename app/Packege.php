<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packege extends Model
{   
    public $table = "packeges";

    protected $fillable = [
        'tracker', 'sender_id', 'rec_id'
    ];

    public function sender() 
    {
        return $this->belongsTo('App\Sender', 'sender_id', 'id');
    }

    public function recipient() 
    {
        return $this->belongsTo('App\Recipient', 'rec_id', 'id');
    }

    public function history() 
    {
        return $this->HasMany('App\History', 'id');
    }
}
