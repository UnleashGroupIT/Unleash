<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\GridController;
use App\Events;
use App\User;
use App\Tracks;
use JavaScript;
use Carbon\Carbon;

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

    $this->authorize('AdminSubSiteAccess', $user);

    
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

      $this->authorize('AdminSubSiteAccess', $user);

    

     $events = Events::with('event_dates')->get();
     $tracks = Tracks::where('event_id', \Config::get('unleash.admin.default_event_id'))->get();

     $eventsData = [];
     foreach ($events as $event) {
       
       $eventDates = [];
       $eventDays = [];
       foreach ($event->event_dates as $edates) {
                $datesTMP = Carbon::parse($edates['event_date']);
               array_push($eventDates, $datesTMP); 
               array_push($eventDays, $datesTMP->day); 
       }


       $tmp = (object)array(
        'name' => $event->event_name,
        'id' => $event->id,
        'dates' => $eventDates,
        'year' => $eventDates[0]->year,
        'month' => $eventDates[0]->month,
        'days' => $eventDays,
      );
        array_push($eventsData, $tmp);
      
     }

     JavaScript::put([
        'default_event_id' => \Config::get('unleash.admin.default_event_id'),
        'default_event_code' => \Config::get('unleash.admin.default_event'),
        'default_day' => \Config::get('unleash.admin.default_agenda_day'),
        'eventdata' => $eventsData,
        'tracks' => $tracks,
        'froala_key' => env('FROALA_KEY', '')
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
