<?php

namespace App;
use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class AgendaSessions extends Model
{

    use Searchable;

  protected $fillable = [
        'session_title',
        'session_description',
        'category_id',
        'start_time',
        'end_time',
        'extra_category'
    ];
    
     public function speakers(){

        	return $this->belongsToMany('App\Speakers', 'sessionspeakers','session_id', 'speaker_id')
        	   ->withTimestamps();
   		
    }

    public function tracks(){

            return $this->belongsToMany('App\Tracks', 'sessiontracks','session_id', 'track_id')
               ->withTimestamps();
    }       

 public function toSearchableArray()
    {
        $extra_data = [];
       /*$extra_data['speakers'] = array_map(function ($data) {
            return $data['full_name'];
        }
        , $this->speakers->toArray());*/

        $extra_data['speakers'] = $this->speakers->pluck('full_name','id');
        $extra_data['tracks'] = $this->tracks->pluck('id');
        $extra_data['event'] = $this->tracks->pluck('event_id');

         $extra_data['start_timestamp'] = strtotime($this->start_time['year'].'-'.$this->start_time['month'].'-'.$this->start_time['day'].' '.$this->start_time['time']); //$this->start_time['time'];
         $extra_data['end_timestamp'] = strtotime($this->end_time['year'].'-'.$this->end_time['month'].'-'.$this->end_time['day'].' '.$this->end_time['time']);

        return array_merge($this->toArray(), $extra_data);
    }   


    public function getStartTimeAttribute($value){
        $dt = Carbon::parse($value);

        $dateData['year'] = $dt->year;
        $dateData['month'] = $dt->month;
        $dateData['month_name'] = $dt->format('F');
        $dateData['day'] =  $dt->day;
        $dateData['time'] = $dt->hour.':'.sprintf("%02d", $dt->minute);
        return $dateData;
    }

    public function getEndTimeAttribute($value){
        $dt = Carbon::parse($value);

        $dateData['year'] = $dt->year;
        $dateData['month'] = $dt->month;
        $dateData['month_name'] = $dt->format('F');
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
