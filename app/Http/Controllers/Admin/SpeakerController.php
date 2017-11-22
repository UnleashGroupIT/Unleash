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

    
/*public function addSlug(Request $request){

  $clean_str = function($string) {

    $specialis_karekterek = array('Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ő'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ű'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ő'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'ű'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f');
    $string = strtolower(strtr($string, $specialis_karekterek));
    $string = preg_replace("/[^a-z0-9-_\.]/i", '.', trim($string));

    return $string;
};



        $speakers = Speakers::all();

        foreach ($speakers as $speaker) {
            if(isset($speaker->full_name)){

                $clean = htmlspecialchars($clean_str($speaker->full_name));
                $speaker->slug = $clean;

                $speaker->save();

            }
            
        }

        


    }*/
   

    //delete a specific speaker
    public function deleteSpeaker($speakerId){
    		return Speakers::destroy($speakerId);

    }  


}
