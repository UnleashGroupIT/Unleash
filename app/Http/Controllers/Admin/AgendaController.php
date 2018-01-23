<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AgendaSessions;
use App\SessionSpeakers;

class AgendaController extends Controller
{
	//List all sessions
    public function getSessions(Request $request){
    	//TODO: Implement filters
    	return AgendaSessions::all();
    }
    //store a session
    public function storeSession(Request $request){
    	
    	$agSession = AgendaSessions::create([
		'track_id' => $request->track,
		'session_title' => $request->session_title, 
		'session_description' => $request->session_description, 
		'category_id' => $request->category_id ?? 1, 
		'start_time' => $request->start_time, 
		'end_time' => $request->end_time, 
		'extra_category' => $request->extra_category ?? null

    		]);

    	if (!empty($request->speakers)){
    		foreach ($request->speakers as $key => $speaker_num) {
    			SessionSpeakers::create([
    				'session_id' => $agSession->id,
    				'speaker_id' => $speaker_num
    				])
    		}
    	}

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
    				])
    		
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
