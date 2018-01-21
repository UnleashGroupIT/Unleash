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

  public function search(Request $request){

     $facets = '';

     if ($request->filled('eventid')){
        $facets .= 'event:'.$request->eventid;
     } else {
         return response('Missing eventid', 400);
     }

      if ($request->filled('day')){
        $facets .= ' AND start_time.day:'.$request->day;
     } 


    if($request->filled('tracks')){

        $facets .= ' AND (';

      try{
        $tracks = json_decode($request->tracks);

        $firstInLine = 0;
        foreach ($tracks as $key => $track) {

          if($firstInLine == 0){
             $facets .= 'tracks:'.$track;
             $firstInLine++;
           }else {
            $facets .= ' OR tracks:'.$track;
           }
         
        } //end foreach
         $facets .=')';

      } catch (Exception $e) {
         echo 'Caught exception: ',  $e->getMessage(), "\n";
    }


    }//if tracks


      $params = [
                  'filters' => $facets,
                  'hitsPerPage' => 100,
                  'page' => 0,

              ];

     $result = AgendaSessions::search('')->with($params)->get();
    return $result->load('speakers')->load('tracks');
    
  }  
}
