<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\EventDates;

class Events extends Model
{
    public function getFirstDayAttribute($value){
    	$dt = Carbon::parse($value);

        $date['textFormat'] = $dt->format('l, j F Y');
        $date['numberFormat'] = $dt->format('Y-m-j');
    	return $date;
    }

    public function getSecondDayAttribute($value){
    	$dt = Carbon::parse($value);

        $date['textFormat'] = $dt->format('l, j F Y');
        $date['numberFormat'] = $dt->format('Y-m-j');
    	return $date;
    } 

    public function event_dates()
    {
       return $this->hasMany(EventDates::class);
    }   
}
