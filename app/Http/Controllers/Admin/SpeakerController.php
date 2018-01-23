<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Speakers;
use App\SpeakerGrid;
use Illuminate\Support\Facades\Storage;

class SpeakerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

         if ($request->has('limit')){
            $limit = $request->limit;
        }else {
            $limit = 30;
        }             
       
       // return $speakers->get();
        return $speakers->paginate($limit);
    	
    }
    //store a speaker
    public function storeSpeaker(Request $request){

       $fullName = $request->first_name.' '.$request->last_name;

           if(isset($fullName)){

                $slug = htmlspecialchars(Controller::clrSTR($fullName));

            }       

    	
        if ($request->hasFile('speaker_img') && $request->file('speaker_img')->isValid()) {

            switch ($request->file('speaker_img')->getMimeType()) {
                case 'image/jpeg':
                   $extension = '.jpg';
                    break;
                case 'image/png':
                    $extension = '.png';
                    break;                
                default:
                     $extension = '.jpg';
                    break;
            }


               $img_url = 'storage/public/'.$request->file('speaker_img')->storeAs(
                'public/speakers', $slug.$extension
                );

             $img_url = $slug.$extension;
        } else {
            $img_url = '';
        }       
    
    	   
    $created =	Speakers::create([
		'first_name' => $request->first_name,
		'last_name' => $request->last_name, 
		'full_name' => $fullName, 
        'slug' => $slug,
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

        if ($request->hasFile('speaker_img') && $request->file('speaker_img')->isValid()) {

            switch ($request->file('speaker_img')->getMimeType()) {
                case 'image/jpeg':
                   $extension = '.jpg';
                    break;
                case 'image/png':
                    $extension = '.png';
                    break;                
                default:
                     $extension = '.jpg';
                    break;
            }


               $img_url = 'storage/public/'.$request->file('speaker_img')->storeAs(
                'public/speakers', $speaker->slug.$extension
                );

             $speaker->img_url = $speaker->slug.$extension;
        }       
    

     $changable = [
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
    	foreach ($request->all() as $field => $value) {
          
    		if(in_array($field, $changable) && $speaker->$field != $value){
                
				$speaker->$field = $value;

                if(($field == "first_name") || ($field == "last_name")){
                   $speaker->full_name = $request->first_name.' '.$request->last_name;
                }

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
