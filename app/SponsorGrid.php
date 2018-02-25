<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorGrid extends Model
{
      protected $fillable = [
      	'grid_id', 
      	'sponsor_id', 
      	'alacarte',
      	'alacarte_text',      	
      	'custom_bio',
      	'custom_link',
      	'custom_image',
  ];  
}
