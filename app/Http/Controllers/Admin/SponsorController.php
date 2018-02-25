<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sponsors;
use App\SponsorGrid;

class SponsorController extends Controller
{
   //List all sponsors
    public function getSponsors(Request $request){
    	//return Sponsors::all();

        $sponsorIds = [];

         $sponsors = (new Sponsors)->newQuery();

        if ($request->has('exlude')){

            $grid = SponsorGrid::where('grid_id',$request->exlude)->get();
            foreach ($grid as $key => $value) {
               array_push($sponsorIds, $value->sponsor_id);
            }
            $sponsors->whereNotIn('id', $sponsorIds);

        }

         if ($request->has('search')){
            $sponsors->where('company_name','like', '%'.$request->search.'%');
        }        
       
       // return $sponsors->get();
        return $sponsors->paginate(30);        
    }
    //store a sponsor
    public function storeSponsor(Request $request){
    	
      $fullName = $request->company;

           if(isset($fullName)){

                $slug = htmlspecialchars(Controller::clrSTR($fullName));

            }       

        
        if ($request->hasFile('sponsor_img') && $request->file('sponsor_img')->isValid()) {

            switch ($request->file('sponsor_img')->getMimeType()) {
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


               $img_url = 'storage/public/'.$request->file('sponsor_img')->storeAs(
                'public/sponsors/colored', $slug.$extension
                );

             $img_url = $slug.$extension;
        } else {
            $img_url = '';
        }       
    
            	   
    	Sponsors::create([
			'company_name' => $request->company,
			'website' => $request->website ?? null, 
			'short_bio' => $request->bio ?? null, 
			'logo_url' => $img_url, 
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

        if ($request->hasFile('sponsor_img') && $request->file('sponsor_img')->isValid()) {

            switch ($request->file('sponsor_img')->getMimeType()) {
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


               $img_url = 'storage/public/'.$request->file('sponsor_img')->storeAs(
                'public/sponsors/colored', $sponsor->slug.$extension
                );

             $sponsor->logo_url = $sponsor->slug.$extension;
        }       

     $changable = [
        'slug',
        'short_bio',
        'company_name',
        'logo_url',
        'facebook',
        'twitter',
        'linkedin',
        'website',
];
        foreach ($request->all() as $field => $value) {
          
            if(in_array($field, $changable) && $sponsor->$field != $value){
                
                $sponsor->$field = $value;

            }


            
        }




        $sponsor->save();

        return $sponsor;


    }

    //delete a specific sponsor
    public function deleteSponsors($sponsorId){
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
