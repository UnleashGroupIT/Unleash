<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Grids extends Model
{



    public function gridtype()
    {
        return $this->hasOne('App\GridType');
    }

    public function events(){
                
            return $this->belongsToMany('App\Events', 'grids', 'id' , 'event_id');
        }

    public function speakers(){
            	
        	return $this->belongsToMany('App\Speakers', 'speaker_grids','grid_id', 'speaker_id')
        	   ->withPivot('custom_bio', 'custom_link', 'custom_image', 'custom_title', 'custom_company', 'order_number')
        	   ->withTimestamps();
   		}

    public function sponsors(){
                
            return $this->belongsToMany('App\Sponsors', 'sponsor_grids','grid_id', 'sponsor_id')
               ->withPivot('category_id', 'alacarte', 'alacarte_text', 'custom_bio', 'custom_link', 'custom_image', 'custom_order')
               ->withTimestamps();
        }


}
