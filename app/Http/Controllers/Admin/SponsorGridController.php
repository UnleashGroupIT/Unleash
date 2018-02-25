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

	public function showGridItem($gridId, $speakerId){
		$grid = Grids::find($gridId);
	
		return $grid->sponsors()->find($sponsorId);
	}


	/*public function editGridItem(Request $request, $gridId, $speakerId){

		$grid = Grids::find($gridId);

		$speaker = $grid->speakers()->find($speakerId);

		
		 foreach ($request->all() as $field => $value) {
    		if(isset($speaker->pivot->$field) || is_null($speaker->pivot->$field)){
    		
				$speaker->pivot->$field = $value;

    		}
    		
    	}

    	$speaker->pivot->save();

	}*/

	public function removeFromGrid($gridId, $sponsorId){
		$grid = Grids::find($gridId);
		return $grid->sponsors()->detach($sponsorId);

	}
}
