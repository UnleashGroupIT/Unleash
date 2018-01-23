<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{

      protected $fillable = [
      	'prefix', 
      	'first_name', 
      	'last_name',
      	'full_name',
      	'slug',
      	'job_title',
      	'bio',
      	'company',
      	'img_url',
      	'facebook',
      	'twitter',
      	'linkedin',
      	'website',
      	'blog_url'
  ];  

}
