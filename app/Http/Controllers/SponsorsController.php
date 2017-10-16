<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grids;

class SponsorsController extends Controller
{

		public function listGridContent($gridId){

		$grid = Grids::find($gridId);

		return $sponsor = $grid->sponsors()
					 ->orderBy('sponsor_grids.custom_order','ASC')
					 ->orderBy('sponsors.company_name','ASC')
		             ->get();

	}

    public function index(Request $request){

     $SpeakerGridId = 1;
     $site = '404.blade.php';   

     if ($request->is('amsterdam') || $request->is('amsterdam/*')) {
         $SpeakerGridId = 1;
 
         $site = 'amsterdam.pages.sponsors';
     }      
     
      if ($request->is('london') || $request->is('london/*')) {
         $SpeakerGridId = 1;

         $site = 'london.pages.sponsors';    
     }   

      if ($request->is('lasvegas') || $request->is('lasvegas/*')) {
         $SpeakerGridId = 1;

         $site = 'lasvegas.pages.sponsors';
     }   


       // $speakerGrids = $this->listGridContent($SpeakerGridId);

      /*      return view($site, [
                  'speakers' => $speakerGrids,
                 
                ]);*/
      return view($site);
    }	
	
	

    public function sponsor(){

    	return view('amsterdam.pages.sponsor');
    }    

}
