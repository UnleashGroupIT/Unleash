<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grids;
use App\Speakers;


class SpeakersController extends Controller
{


    public function index(Request $request){

     $SpeakerGridId = 1;
     $site = '404.blade.php';   

     if ($request->is('amsterdam') || $request->is('amsterdam/*')) {
         $SpeakerGridId = 2;
 
         $site = 'amsterdam.pages.speakers';
     }      
     
      if ($request->is('london') || $request->is('london/*')) {
         $SpeakerGridId = 8;

         $site = 'london.pages.speakers';    
     }   

      if ($request->is('america') || $request->is('america/*')) {
         $SpeakerGridId = 1;

         $site = 'lasvegas.pages.speakers';
     }   


        $speakerGrids = $this->listGridContent($SpeakerGridId);

            return view($site, [
                  'speakers' => $speakerGrids,
                 
                ]);

    }


	public function listGridContent($gridId){

		$grid = Grids::find($gridId);

		return $speaker = $grid->speakers()
					 ->orderBy('speaker_grids.order_number','ASC')
		             ->get();

	}



    public function speaker(Request $request, $speakerId = ''){

     $site = '404.blade.php';   

     if ($request->is('amsterdam') || $request->is('amsterdam/*')) {
 
 
         $site = 'amsterdam.pages.speaker';
     }      
     
      if ($request->is('london') || $request->is('london/*')) {


         $site = 'london.pages.speaker';    
     }   

      if ($request->is('america') || $request->is('america/*')) {


         $site = 'lasvegas.pages.speaker';
     }          
	 


    	$speakerTemp = Speakers::where('slug',$speakerId)->get();
        $speaker = $speakerTemp[0];

	 if ($request->header() !== null){
		 $headerData = $request->header();
		 if(isset($headerData['referer'][0]) && $headerData['referer'][0] != null){
			 
			 $speaker->referer = $headerData['referer'][0];
		 }
	 }		
		
    	    return view($site, [
    			  'speaker' => $speaker,
    			 

    			]);
    } 

}
