<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grids;
use App\Sponsors;

class MediaController extends Controller
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

     $SponsorGridId = 12;
	 $site = 'global.pages.press';    
     


        $sponsorGrids = $this->listGridContent($SponsorGridId);

            return view($site, [
                  'sponsors' => $sponsorGrids,
                 
                ]);

    }		

}
