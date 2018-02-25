<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsors extends Model
{

      protected $fillable = [
      	'company_name',
      	'slug',
      	'short_bio',
      	'logo_url',
      	'facebook',
      	'twitter',
      	'linkedin',
      	'website',
  ];  

        public function solutions(){

        	return $this->hasMany('App\SponsorSolutions');
   		}

        public function contacts(){

        	return $this->hasMany('App\SponsorContacts');
   		}

        public function sponsorgrid(){

        	return $this->belongsToMany('App\SponsorGrid');
   		}  		
}
