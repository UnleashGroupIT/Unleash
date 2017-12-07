<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\GridController;
use App\Events;

class SpeakerPageController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth');
    }
    
      /* -- UI Function --*/   

   public function speakerUI(Request $request){
   	 $request->request->add(['category' => 1]);
   	
     $grids = new GridController;
     $speakerGrids =  $grids->getGrids($request);

     $events = Events::all();

    return view('admin.pages.speakers', [
    						  'grids' => $speakerGrids,
                  'events' => $events
							 
							]);
   //return view('speakers');
   }

   public function sponsorUI(Request $request){
     $request->request->add(['category' => 2]);
    
     $grids = new GridController;
     $EntityGrids =  $grids->getGrids($request);

     $events = Events::all();

    return view('admin.pages.sponsors', [
                  'grids' => $EntityGrids,
                  'events' => $events
               
              ]);
   //return view('speakers');
   }   

   public function axiostest(){

       return view('axiostest'); 
   }


}
