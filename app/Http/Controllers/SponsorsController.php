<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grids;

class SponsorsController extends Controller
{

  /*
   Categories:
    1 - Diamond Plus
    2 - Diamond
    3 - Emerald
    4 - Platinum
    5 - Gold
    6 - Silver
    7 - Exibitors
    8 - Startup

    10 - A La Carte Only
  */

		public function listGridContent($gridId){

		$grid = Grids::find($gridId);

		return $sponsor = $grid->sponsors()
					 ->orderBy('sponsor_grids.custom_order','ASC')
					 ->orderBy('sponsors.company_name','ASC')
		             ->get();

	}

    public function index(Request $request){

     $SponsorGridId = 1;
     $site = '404.blade.php';   

     if ($request->is('amsterdam') || $request->is('amsterdam/*')) {
         $SponsorGridId = 4;
 
         $site = 'amsterdam.pages.sponsors';
     }      
     
      if ($request->is('london') || $request->is('london/*')) {
         $SponsorGridId = 1;

         $site = 'london.pages.sponsors';    
     }   

      if ($request->is('america') || $request->is('america/*')) {
         $SponsorGridId = 1;

         $site = 'lasvegas.pages.sponsors';
     }   


        $sponsorGrids = $this->listGridContent($SponsorGridId);

            return view($site, [
                  'sponsors' => $sponsorGrids,
                 
                ]);

    }	
	
	

    public function sponsor(){

    	return view('amsterdam.pages.sponsor');
    }    

}
