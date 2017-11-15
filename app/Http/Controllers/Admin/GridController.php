<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Grids;
use App\Events;

class GridController extends Controller
{


	//List all the grids
	//With optional filters (eg. event or category)
	//(category: speakers / sponsors)
    public function getGrids(Request $request){
       
         $grid = (new Grids)->newQuery();

        if ($request->has('category')){
            $grid->where('grid_type', $request->category);

        }

         if (!empty($request->HRNEventCode)){
            $grid->where('event_id', $request->HRNEventCode);

        }        
       
        return $grid->with('events')->get();
    	
    }
    
    //store a grid (again.. there are filters)
    public function storeGrid(Request $request){


        if(!empty($request->eventId)){
            $event_id = Events::where('event_code', $request->eventId)->get();
            
        }
        
        if(isset($event_id[0]->id)){

            $grid = Grids::create([
                'event_id' => $event_id[0]->id,
                'grid_name' => $request->grid_name, 
                'grid_type' => $request->type

                ]);

            return $grid;

        }


    }
    //show a specific grid by id
    public function showGrid($gridId){

            return Grids::find($gridId);
    }

    //edit a specific grid
    public function editGrid(Request $request, $gridId){
        $grid = Grids::find($gridId);

        foreach ($request->all() as $field => $value) {
            if(isset($grid->$field)){
                $grid->$field = $value;

            }
            
        }

        $grid->save();

        return $grid;


    

    }

    //delete a specific grid
    public function deleteGrid($gridId){
        return Grids::destroy($gridId);

    }    

}
