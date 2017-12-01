<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Scout\Searchable;

class AgendaSessions extends Model
{

   use Searchable;

     public function speakers(){

        	return $this->belongsToMany('App\Speakers', 'sessionspeakers','session_id', 'speaker_id')
        	   ->withTimestamps();
   		
    }

    public function tracks(){

        return $this->belongsTo('App\Tracks', 'tracks_id');
    }    



   /* public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['speakers'] = $this->speakers['full_name'];

        return $array;
    }*/

    public function toSearchableArray()
    {
        $extra_data = [];
       /*$extra_data['speakers'] = array_map(function ($data) {
            return $data['full_name'];
        }
        , $this->speakers->toArray());*/

        $extra_data['speakers'] = $this->speakers;

        $extra_data['track_name'] = $this->tracks->track_name; 

         $extra_data['start_timestamp'] = $this->start_time['time'];
         $extra_data['end_timestamp'] = $this->end_time['time'];

        return array_merge($this->toArray(), $extra_data);
    }   


    public function getStartTimeAttribute($value){
    	$dt = Carbon::parse($value);

    	$dateData['year'] = $dt->year;
    	$dateData['month'] = $dt->month;
    	$dateData['day'] =  $dt->day;
    	$dateData['time'] = $dt->hour.':'.sprintf("%02d", $dt->minute);
    	return $dateData;
    }

    public function getEndTimeAttribute($value){
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

    public function apply(Builder $builder, Model $model)
    {
        $builder->OrderBy('start_time', 'ASC');
    }	

	    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('start_time', function (Builder $builder) {
            $builder->OrderBy('start_time', 'ASC');
        });
    }
}
