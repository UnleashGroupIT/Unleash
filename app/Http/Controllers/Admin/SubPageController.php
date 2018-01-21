<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\GridController;
use App\Events;
use App\User;
use App\Tracks;
use JavaScript;

class SubPageController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth');
    }
    
      /* -- UI Function --*/   

   public function speakerUI(Request $request, User $user){

      $this->authorize('AdminSubSiteAccess', $user);

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

   public function sponsorUI(Request $request, User $user){

    $this->authorize('AdminHiddenSiteAccess', $user);

    
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


   public function agendaUI(Request $request, User $user){

    $this->authorize('AdminHiddenSiteAccess', $user);

    

     $events = Events::all();
     $tracks = Tracks::where('event_id', \Config::get('unleash.admin.default_event_id'))->get();

     JavaScript::put([
        'default_event_id' => \Config::get('unleash.admin.default_event_id'),
        'default_event_code' => \Config::get('unleash.admin.default_event'),
        'default_day' => \Config::get('unleash.admin.default_agenda_day')
      ]);

    return view('admin.pages.agenda', [
                  
                  'events' => $events,
                  'AgendaTracks' =>$tracks
              ]);
   
   }   


   public function axiostest(){

       return view('axiostest'); 
   }


}
