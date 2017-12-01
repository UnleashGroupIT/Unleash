<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracks;
use App\AgendaSessions;
use JavaScript;

class AgendaController extends Controller
{
  public function index(){

	   $tracks = Tracks::where('event_id',1)
                       ->where('track_status',1)
                       ->pluck('track_name', 'order')
                      ->all();
  
     JavaScript::put([
        'trackData' => $tracks,
        
    ]);
      
         return view('amsterdam.pages.agenda', [
                    'tracks' => $tracks
                 
                ]);

    	
    	  // return view('amsterdam.pages.agenda');

  }

  public function getSessions(Request $request, $trackId){

  	$sessions = Tracks::where('id',$trackId)->with('event', 'sessions.speakers')
												->OrderBy('event.start_time')->get();

  	return $sessions;

  }
}
