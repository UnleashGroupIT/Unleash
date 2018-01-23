<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
	public function getSection($event_id, $page_id){

            $data = Sections::where('event_id', $event_id)
               ->where('page_id',$page_id)
               ->orderBy('section_number', 'asc')
               ->get();

            return $data;
	}

		
}
