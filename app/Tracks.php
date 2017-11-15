<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AgendaSessions;

class Tracks extends Model
{


     public function sessions(){

        return $this->hasMany('App\AgendaSessions');
    }

    public function event(){

    	return $this->belongsTo('App\Events');
    }
}
