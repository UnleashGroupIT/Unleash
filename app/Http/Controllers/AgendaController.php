<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracks;
use App\AgendaSessions;
use JavaScript;

class AgendaController extends Controller
{
  public function index(){
	  
	  //TODO: Sort Sessions by start time!!

	
	  
 	//$sessions = Tracks::where('id',1)
 	$sessions = Tracks::where('event_id',1)
 	                     ->where('track_status',1)
 	                     ->with('event', 'sessions.speakers')
						 ->get();   	
	$sessions->extra = 0;	
	
     JavaScript::put([
        'trackData' => $sessions,
        
    ]);
    	
    	   return view('amsterdam.pages.agenda', [
                  	'tracks' => $sessions
                 
                ]);

  }

  public function getSessions(Request $request, $trackId){

  	$sessions = Tracks::where('id',$trackId)->with('event', 'sessions.speakers')
												->OrderBy('event.start_time')->get();

  	return $sessions;

  }
}
