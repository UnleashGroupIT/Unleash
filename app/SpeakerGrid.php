<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpeakerGrid extends Model
{

      protected $fillable = [
      	'grid_id', 
      	'speaker_id', 
      	'order_number',
      	'custom_bio',
      	'custom_link',
      	'custom_image',
      	'custom_title',
      	'custom_company'
  ];  
}
