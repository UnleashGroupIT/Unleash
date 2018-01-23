<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tracks;
use App\Events;

class TrackController extends Controller
{
   //List all Tracks
    public function getTracks(Request $request){
        
        //TODO: Need filter by event
    	return Tracks::all();
    }
    //store a Track
    public function storeTrack(Request $request){
    	
    	if(!empty($request->eventId)){
    		$event_id = Events::where('event_code', $request->eventId)->get();
    		
    	}
        
        if(isset($event_id[0]->id)){

	    	//Get the current latest track for the order
	    	$currentLast = Tracks::orderBy('id','desc')->first();

	    	if(!isset($currentLast) || $currentLast == null){
	    		$order_num = 1;
	    	} else {
	    		$order_num = $currentLast->id + 1;
	    	}

	    	$track = Tracks::create([
				'event_id' => $event_id[0]->id,
				'track_name' => $request->track_name, 
				'description' => $request->description ?? null, 
				'color_class' => $request->color_class ?? null, 
				'main_color' => $request->main_color ?? null, 
				'url' => $request->url ?? null, 
				'room' => $request->room ?? null, 
				'level' => $request->level ?? null, 
				'track_status' => 1, 
				'order' => $order_num,

	    		]);

	    	return $track;

        }


    }
    //show a specific track by id
    public function showTrack($trackId){
    	return Tracks::find($trackId);

    }

    //edit a track
    public function editTrack(Request $request, $trackId){

    	$track = Tracks::find($trackId);

    	foreach ($request->all() as $field => $value) {
    		if(isset($track->$field) || is_null($track->$field)){
				$track->$field = $value;

    		}
    		
    	}

    	$track->save();

    	return $track;


    }

    //delete a track
    public function deleteTrack($trackId){
    		return Tracks::destroy($trackId);

    }    
}
