<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grids;
use App\Sponsors;

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
         $SponsorGridId = 5;

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
	
	

    public function sponsor(Request $request, $sponsorId = ''){

     $site = '404.blade.php';   

     if ($request->is('amsterdam') || $request->is('amsterdam/*')) {
 
 
         $site = 'amsterdam.pages.sponsor';
     }      
     
      if ($request->is('london') || $request->is('london/*')) {


         $site = 'london.pages.sponsor';    
     }   

      if ($request->is('america') || $request->is('america/*')) {


         $site = 'lasvegas.pages.sponsor';
     }          
     


        $sponsorTemp = Sponsors::where('slug',$sponsorId)->get();
        $sponsor = $sponsorTemp[0];
         
     if ($request->header() !== null){
         $headerData = $request->header();
         if(isset($headerData['referer'][0]) && $headerData['referer'][0] != null){
             
             $sponsor->referer = $headerData['referer'][0];
         }
     }      
        
            return view($site, [
                  'sponsor' => $sponsor,
                 

                ]);
    }  

}
