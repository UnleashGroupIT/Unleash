<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grids;
use App\Sponsors;
use App\Http\Controllers\SponsorsController;

class StartupsController extends Controller
{
	public function index(){
		$spn = new SponsorsController;
		
        $sponsorGrids = $spn->listGridContent(10);

            return view('global.pages.startup', [
                  'sponsors' => $sponsorGrids,
                 
                ]);

	}
}
