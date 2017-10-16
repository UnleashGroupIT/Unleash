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

	  if ($request->is('lasvegas/*')) {
	   $Grid = 1;
	   $site = 'lasvegas.pages.about';
	 }   	

     $SpeakerGridController = new SpeakersController;
     $speakerGrids =  $SpeakerGridController->listGridContent(1);    	

    return view($site, [
    			  'speakers' => $speakerGrids,
    			  

    			]);
    	
    }
	
    public function floorplan(Request $request){

     $Grid = 1;
     $site = '404.blade.php';	

	 if ($request->is('amsterdam/*')) {
	   $Grid = 1;
	   $site = 'amsterdam.pages.floorplan';
	 }   	
	 
	  if ($request->is('london/*')) {
	   $Grid = 1;
	   $site = 'london.pages.floorplan';	
	 }   

	  if ($request->is('lasvegas/*')) {
	   $Grid = 1;
	   $site = 'lasvegas.pages.floorplan';
	 }   	

     $SpeakerGridController = new SpeakersController;
     $speakerGrids =  $SpeakerGridController->listGridContent(1);    	

    return view($site, [
    			  'speakers' => $speakerGrids,
    			  

    			]);
    	
    }	
}
