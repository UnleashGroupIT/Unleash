<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SpeakersController;
use App\Http\Controllers\SponsorsController;
use App\Grids;

class MainPageController extends Controller
{


 public function index(Request $request){


     $SpeakerGridId = 1;
     $SponsorGridId = 3;
     $site = '404.blade.php';   

     if ($request->is('amsterdam') || $request->is('amsterdam/*')) {
         $SpeakerGridId = 1;
         $SponsorGridId = 3;
         $site = 'amsterdam.pages.index';
     }      
     
      if ($request->is('london') || $request->is('london/*')) {
         $SpeakerGridId = 1;
         $SponsorGridId = 3;
         $site = 'london.pages.index';    
     }   

      if ($request->is('lasvegas') || $request->is('lasvegas/*')) {
         $SpeakerGridId = 1;
         $SponsorGridId = 3;
         $site = 'lasvegas.pages.index';
     }   

     $SpeakerGridController = new SpeakersController;
     $speakerGrids =  $SpeakerGridController->listGridContent($SpeakerGridId);

     $SponsorGridController = new SponsorsController;
     $sponsorGrids =  $SponsorGridController->listGridContent($SponsorGridId);

    return view($site, [
                  'speakers' => $speakerGrids,
                  'sponsors' => $sponsorGrids

                ]);     

  }  
 
 public function amsterdam(){

   
   	
     $SpeakerGridController = new SpeakersController;
     $speakerGrids =  $SpeakerGridController->listGridContent(1);

     $SponsorGridController = new SponsorsController;
     $sponsorGrids =  $SponsorGridController->listGridContent(3);



    return view('amsterdam.pages.index', [
    			  'speakers' => $speakerGrids,
    			  'sponsors' => $sponsorGrids

    			]);

 }

 public function london(){

   
    
     $SpeakerGridController = new SpeakersController;
     $speakerGrids =  $SpeakerGridController->listGridContent(1);

     $SponsorGridController = new SponsorsController;
     $sponsorGrids =  $SponsorGridController->listGridContent(3);



    return view('amsterdam.pages.index', [
            'speakers' => $speakerGrids,
            'sponsors' => $sponsorGrids

          ]);

 }


 public function lasvegas(){

   
    
     $SpeakerGridController = new SpeakersController;
     $speakerGrids =  $SpeakerGridController->listGridContent(1);

     $SponsorGridController = new SponsorsController;
     $sponsorGrids =  $SponsorGridController->listGridContent(3);



    return view('amsterdam.pages.index', [
            'speakers' => $speakerGrids,
            'sponsors' => $sponsorGrids

          ]);

 }


}
