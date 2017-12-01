<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Tracks extends Model
{

 use Searchable;

    public function event(){

    	return $this->belongsTo('App\Events');
    }
}
