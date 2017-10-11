<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracks extends Model
{


     public function speakergrid(){

        return $this->hasMany('App\Sessions');
    }
}
