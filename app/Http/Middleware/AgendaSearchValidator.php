<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class AgendaSearchValidator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $eventPass = 0;
        $dayPass = 0;

     //CHECK FOR THE EVENT CODE

        //Check if there's even az event Code present in the request
        if($request->filled('eventid')){

            $eventData = Events::where('event_code', $request->eventid)->get();

            //Check if the given event code matches one in the database
           if(isset($eventData[0]->id) && $eventData[0]->id > 0){
                //if it does append it to the request
             $eventPass = 1;
               

           } else {
            //The event code is invalid
             return response('Invalid eventid', 400);

           }
            
        } else {
             return response('Missing eventid', 400);

        }

   //CHECK FOR DATE
     if($request->filled('day')){
        if (isset($eventData[0]->first_day) && isset($eventData[0]->second_day)){
             $firstDay = Carbon::parse($eventData[0]->first_day);
             $secondDay = Carbon::parse($eventData[0]->second_day);
          if ($firstDay->day == $request->day || $secondDay->day == $request->day){
             $dayPass = 1;
          }
        }
    } else {
        $dayPass = 1;
    }



        return $next($request);
    }
    
}
