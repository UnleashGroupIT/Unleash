<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AgendaSessions;

class Tracks extends Model
{


    public function event(){

    	return $this->belongsTo('App\Events');
    }
}
