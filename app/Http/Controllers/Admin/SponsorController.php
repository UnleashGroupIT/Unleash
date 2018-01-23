<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sponsors;

class SponsorController extends Controller
{
   //List all sponsors
    public function getSponsors(Request $request){
    	return Sponsors::all();
    }
    //store a sponsor
    public function storeSponsor(Request $request){
    	
    	if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
   			 $img_url = $request->file('logo')->store('sponsors');
	    } else {
	    	$img_url = '';
	    }
    	   
            	   
    	Sponsors::create([
			'company_name' => $request->company_name,
			'website' => $request->website ?? null, 
			'short_bio' => $request->bio ?? null, 
			'logo_url' => $logo, 
			'facebook' => $request->facebook ?? null, 
			'twitter' => $request->twitter ?? null, 
			'linkedin' => $request->linkedin ?? null

    		]);

    }
    //show a specific sponsor by id
    public function showSponsor($sponsorId){
    	return Sponsors::find($sponsorId);

    }

    //edit a specific sponsor
    public function editSponsor(Request $request, $sponsorId){

    	$sponsor = Sponsors::find($sponsorId);

    	foreach ($request->all() as $field => $value) {
    		if(isset($sponsor->$field) || is_null($sponsor->$field)){
				$sponsor->$field = $value;

    		}
    		
    	}

    	$sponsor->save();

    	return $sponsor;


    }

    //delete a specific speaker
    public function deleteSpeaker($sponsorId){
    		return Sponsors::destroy($sponsorId);

    }  


/*public function addSlug(Request $request){

  $clean_str = function($string) {

    $specialis_karekterek = array('Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ő'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ű'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ő'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'ű'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f');
    $string = strtolower(strtr($string, $specialis_karekterek));
    $string = preg_replace("/[^a-z0-9-_\.]/i", '.', trim($string));

    return $string;
};



        $sponsors = Sponsors::all();

        foreach ($sponsors as $sponsor) {
            if(isset($sponsor->company_name)){

                $clean = htmlspecialchars($clean_str($sponsor->company_name));
                $sponsor->slug = $clean;

                $sponsor->save();

            }
            
        }

        


    }*/

}
