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

	/*public function addToGrid(Request $request, $gridId){

		$grid = Grids::find($gridId);
		$sponsor = $grid->sponsors()
					 //->orderBy('speaker_grids.order_number','desc')
		             ->get();
		if (!empty($speaker[0]->pivot->order_number)){
			$order = $speaker[0]->pivot->order_number +1;
		} else {
			$order = 1;
		}   

	return $grid->sponsors()->attach($request->sponsor_id,['order_number' => $order]);	       


		
	}*/

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

	/*public function removeFromGrid($gridId, $speakerId){
		$grid = Grids::find($gridId);
		return $grid->speakers()->detach($speakerId);

	}*/
}
