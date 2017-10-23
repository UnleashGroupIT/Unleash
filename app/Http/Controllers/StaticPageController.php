<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SpeakersController;

class StaticPageController extends Controller
{
    public function about(Request $request){

     $Grid = 1;
     $site = '404.blade.php';	

	 if ($request->is('amsterdam/*')) {
	   $Grid = 1;
	   $site = 'amsterdam.pages.about';
	 }   	
	 
	  if ($request->is('london/*')) {
	   $Grid = 1;
	   $site = 'london.pages.about';	
	 }   

	  if ($request->is('america/*')) {
	   $Grid = 1;
	   $site = 'lasvegas.pages.about';
	 }   	

     $SpeakerGridController = new SpeakersController;
     $speakerGrids =  $SpeakerGridController->listGridContent(1);    	

    return view($site, [
    			  'speakers' => $speakerGrids,
    			  

    			]);
    	
    }
	
    public function venue(Request $request){

     $Grid = 1;
     $site = '404.blade.php';	

	 if ($request->is('amsterdam/*')) {
	   $Grid = 1;
	   $site = 'amsterdam.pages.venue';
	 }   	
	 
	  if ($request->is('london/*')) {
	   $Grid = 1;
	   $site = 'london.pages.venue';	
	 }   

	  if ($request->is('america/*')) {
	   $Grid = 1;
	   $site = 'lasvegas.pages.venue';
	 }   	

     $SpeakerGridController = new SpeakersController;
     $speakerGrids =  $SpeakerGridController->listGridContent(1);    	

    return view($site, [
    			  'speakers' => $speakerGrids,
    			  

    			]);
    	
    }

   public function stream(Request $request){
  	

    return view('amsterdam.pages.stream');
    	
    }	
}
