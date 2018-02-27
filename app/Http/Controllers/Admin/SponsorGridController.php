<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Grids;

class SponsorGridController extends Controller
{
	public function listGridContent($gridId){

		$grid = Grids::find($gridId);

		return $sponsor = $grid->sponsors()
					// ->orderBy('speaker_grids.order_number','ASC')
		             ->get();

	}

	public function addToGrid(Request $request, $gridId){

		$grid = Grids::find($gridId);
		$sponsor = $grid->sponsors()
		             ->get();

	return $grid->sponsors()->attach($request->sponsor_id,['category_id' => $request->category_id]);	       


		
	}

	public function showGridItem($gridId, $sponsorId){
		$grid = Grids::find($gridId);
	
		return $grid->sponsors()->find($sponsorId);
	}


	public function editGridItem(Request $request, $gridId, $sponsorId){

		$grid = Grids::find($gridId);

		$sponsor = $grid->sponsors()->find($sponsorId);

		
		 foreach ($request->all() as $field => $value) {
    		if(isset($sponsor->pivot->$field) || is_null($sponsor->pivot->$field)){
    		
				$sponsor->pivot->$field = $value;

    		}
    		
    	}

    	$sponsor->pivot->save();

	}

	public function removeFromGrid($gridId, $sponsorId){
		$grid = Grids::find($gridId);
		return $grid->sponsors()->detach($sponsorId);

	}
}
