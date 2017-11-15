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
}
