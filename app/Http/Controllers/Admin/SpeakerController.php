<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Speakers;
use App\SpeakerGrid;

class SpeakerController extends Controller
{
	//List all speakers
    public function getSpeakers(Request $request){
        $speakerIds = [];

         $speakers = (new Speakers)->newQuery();

        if ($request->has('exlude')){

            $grid = SpeakerGrid::where('grid_id',$request->exlude)->get();
            foreach ($grid as $key => $value) {
               array_push($speakerIds, $value->speaker_id);
            }
            $speakers->whereNotIn('id', $speakerIds);

        }

         if ($request->has('search')){
            $speakers->where('full_name','like', '%'.$request->search.'%');
        }        
       
        return $speakers->get();

    	
    }
    //store a speaker
    public function storeSpeaker(Request $request){

       
    	
    	if ($request->hasFile('speaker_img') && $request->file('speaker_img')->isValid()) {
   			 $img_url = 'storage/'.$request->file('speaker_img')->store('speakers');
	    } else {
	    	$img_url = '';
	    }
    	   
    $created =	Speakers::create([
		'first_name' => $request->first_name,
		'last_name' => $request->last_name, 
		'full_name' => $request->first_name.' '.$request->last_name, 
		'job_title' => $request->job_title ?? null, 
		'bio' => $request->bio ?? null, 
		'company' => $request->company ?? null, 
		'img_url' => $img_url, 
		'facebook' => $request->facebook ?? null, 
		'twitter' => $request->twitter ?? null, 
		'linkedin' => $request->linkedin ?? null, 
		'website' => $request->website ?? null, 
		'blog_url' => $request->blog ?? null

    		]);

    return $created;

    }
    
    //show a specific speaker by id
    public function showSpeaker($speakerId){
    	return Speakers::find($speakerId);

    }

    //edit a specific speaker
    public function editSpeaker(Request $request, $speakerId){

    	$speaker = Speakers::find($speakerId);

    	foreach ($request->all() as $field => $value) {
    		if(isset($speaker->$field) || is_null($speaker->$field)){
				$speaker->$field = $value;

    		}
    		
    	}

    	$speaker->save();

    	return $speaker;


    }

    //delete a specific speaker
    public function deleteSpeaker($speakerId){
    		return Speakers::destroy($speakerId);

    }  


}
