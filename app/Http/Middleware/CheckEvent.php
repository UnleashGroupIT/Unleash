<?php

namespace App\Http\Middleware;

use Closure;
use App\Events;

class CheckEvent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $needed = 0)
    {
       

        //Make sure the user don't inject the event id manually
        if($request->exists('HRNEventCode')){
            return response('Invalid request', 403);
        }

        //Check if there's even az event Code present in the request
        if($request->filled('eventid')){

            $event_id = Events::where('event_code', $request->eventid)->get();

            //Check if the given event code matches one in the database
           if(isset($event_id[0]->id) && $event_id[0]->id > 0){
                //if it does append it to the request
             $request->HRNEventCode = $event_id[0]->id;
               

           } else {
            //The event code is invalid
             return response('Invalid eventid', 400);

           }
            
        } else {
             //Check if it's actually a mandatory thing or not
            if ($needed == 1){
                 return response('Missing eventid', 400);
             }
        }

        return $next($request);
    }
}
