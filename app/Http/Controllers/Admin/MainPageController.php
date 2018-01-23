<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sections;

class MainPageController extends Controller
{
        public function index(Sections $sections){
			
		
		//FOR NOW HARD CODE the event code.. Later there will be a session or cookie 
		//based option to select different events ... 
		//or just save it to the options and clone the admin site for other events :D
		$data = $sections->getSection(1,1);

		return view('pages.index', compact('data'));
	}
}
