<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AgendaSessions;
use App\Tracks;
use App\SessionSpeakers;
use App\SessionTracks;
use Carbon\Carbon;

class AgendaController extends Controller
{
	//List all sessions
    public function getSessions(Request $request){
    	//TODO: Implement filters
    	return AgendaSessions::all();
    }

    //store a session
    public function storeSession(Request $request, AgendaSessions $agenda){


       $agSession = $agenda->withoutSyncingToSearch(function () use ($agenda, $request){
            $start = Carbon::parse($request->startTime);
            $end = Carbon::parse($request->endTime);      
              
        return $agenda->create([
        //'track_id' => $request->track,
        'session_title' => $request->sessionTitle, 
        'session_description' => $request->description, 
        'category_id' => $request->sessiontype ?? 1, 
        'start_time' => $start, 
        'end_time' => $end, 
        //'extra_category' => $request->extra_category ?? null

                 ]);
     });
    	


        if ($request->has('sessiontype') && $request->sessiontype > 1){

             $allTracks = Tracks::where('event_id',$request->eventid)->get();
            foreach ($allTracks as $track) {
           
                SessionTracks::create([
                    'session_id' => $agSession->id,
                    'track_id' => $track->id
                    ]);
            }
        }else {
                 SessionTracks::create([
                    'session_id' => $agSession->id,
                    'track_id' => $request->track
                    ]);
        }

    	if (!empty($request->speakers)){
            $spkrs = json_decode($request->speakers);
    		foreach ($spkrs as $key => $speaker_num) {
    			SessionSpeakers::create([
    				'session_id' => $agSession->id,
    				'speaker_id' => $speaker_num
    				]);
    		}
    	}

        $agSession->searchable();

    	return $agSession;

    }

    //show a specific session by id
    public function showSession($sessionId){
    	return AgendaSessions::find($sessionId)->load('speakers')->load('tracks');

    }

    //edit a specific session
    public function editSession(Request $request, $sessionId){

    	$session = AgendaSessions::find($sessionId);
        $Type = $session->category_id;

         $start = Carbon::parse($request->startTime);
            $end = Carbon::parse($request->endTime);  

        $inputs = (object) array(
        'session_title' => $request->sessionTitle, 
        'session_description' => $request->description ?? ' ', 
        'category_id' => $request->sessiontype ?? 1, 
        'start_time' => $start, 
        'end_time' => $end
        ); 

        //Tracks Part

            //If the session previously was single but now it's a breakout
        if ($request->has('sessiontype') && $request->sessiontype > 1 && $Type == 1){

             $allTracks = Tracks::where('event_id',$request->eventid)->get();
            foreach ($allTracks as $track) {
           
                SessionTracks::create([
                    'session_id' => $sessionId,
                    'track_id' => $track->id
                    ]);
            }
        } 

        //if was simple and is simple
        if($request->has('sessiontype') && $request->sessiontype == 1 && $Type == 1){
                            SessionTracks::where('session_id',$sessionId)
                           ->update(['track_id' => $request->track]);

        }

        //if it was previously breakout but now it's single
        if($inputs->category_id  == 1 && $Type > 1){
          
            SessionTracks::where('session_id', $sessionId)
                            ->delete();
                 

              SessionTracks::create([
                'session_id' => $sessionId,
                'track_id' => $request->track
                ]); 


        }



   

     $changable = [
        'session_title', 
        'session_description', 
        'category_id',
        'start_time',
        'end_time',
        'extra_category',
 
];    

        foreach ($inputs as $field => $value) {
          
            if(in_array($field, $changable) && $session->$field != $value){
                
                $session->$field = $value;

            }
            
        }    

        //Speakers Part

        $sp = SessionSpeakers::where('session_id', $sessionId)->get();
        $currentSpNumsForSession = [];

        if($sp){
            foreach ($sp as $key => $spi) {
                array_push($currentSpNumsForSession, $spi->speaker_id);
            }
        }

        if (!empty($request->speakers)){

            $spkrs = json_decode($request->speakers);
            foreach ($spkrs as $key => $speaker_num) {
                if(!in_array($speaker_num, $currentSpNumsForSession)){
                 SessionSpeakers::create([
                    'session_id' => $sessionId,
                    'speaker_id' => $speaker_num
                    ]);
                }
                    //remove from array (we processed that element)
                    if (($kkey = array_search($speaker_num, $currentSpNumsForSession)) !== false) {
                        unset($currentSpNumsForSession[$kkey]);
                    }

            }
        }

        if($currentSpNumsForSession){
            foreach ($currentSpNumsForSession as $key => $curr) {
                SessionSpeakers::where('session_id',$sessionId)
                                ->where('speaker_id',$curr)
                                ->delete();
            }
        }






    	$session->save();

    	return $session;


    }




    //delete a specific session
    public function deleteSession($sessionId){

            SessionSpeakers::where('session_id',$sessionId)
                    ->delete();

            SessionTracks::where('session_id', $sessionId)
                        ->delete();

    		return AgendaSessions::destroy($sessionId);

    }  

    public function addSpeakerToSession(Request $request){
    	 if (!empty($request->speakerId) && !empty($request->sessionId)){
    		
    			SessionSpeakers::create([
    				'session_id' => $request->sessionId,
    				'speaker_id' => $request->speakerId
    				]);
    		
    	}
    	//ide kellene valami return érték

    }

    public function removeSpeakerFromSession(Request $request){
    	 if (!empty($request->speakerId) && !empty($request->sessionId)){
				$deletedRows = SessionSpeakers::where('session_id', $request->sessionId)
    									->where('speaker_id', $request->speakerId)
    									->delete();
    	 }
    	 //return érték hozzáadás
    	
    }
}
