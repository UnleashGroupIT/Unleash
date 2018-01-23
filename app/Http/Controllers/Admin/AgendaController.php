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
        'category_id' => $request->SessionType ?? 1, 
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
    	return AgendaSessions::find($sessionId);

    }

    //edit a specific session
    public function editSession(Request $request, $sessionId){

    	$session = AgendaSessions::find($sessionId);

    	foreach ($request->all() as $field => $value) {
    		if(property_exists($session, $field)){
				$session->$field = $value;

    		}
    		
    	}

    	$session->save();

    	return $session;


    }

    //delete a specific session
    public function deleteSession($sessionId){
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
