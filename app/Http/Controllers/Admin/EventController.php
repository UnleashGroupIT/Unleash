<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events;

class EventController extends Controller
{
	public function listEvents(){
		return Events::all();

	}
 
}
