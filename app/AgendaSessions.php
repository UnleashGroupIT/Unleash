<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class AgendaSessions extends Model
{

     public function speakers(){

        	return $this->belongsToMany('App\Speakers', 'sessionspeakers','session_id', 'speaker_id')
        	   ->withTimestamps();
   		
    }

    public function getStartTimeAttribute($value){
    	$dt = Carbon::parse($value);

    	$dateData['year'] = $dt->year;
    	$dateData['month'] = $dt->month;
    	$dateData['day'] =  $dt->day;
    	$dateData['time'] = $dt->hour.':'.sprintf("%02d", $dt->minute);
    	return $dateData;
    }

    public function getSessionTitleAttribute($value){
       
       $cleanText = html_entity_decode(\voku\helper\UTF8::cleanup($value));
        return $cleanText;
    }    

    public function getSessionDescriptionAttribute($value){
       
       $cleanText = html_entity_decode(strip_tags(\voku\helper\UTF8::cleanup($value)));
        return $cleanText;
    }        

}
