<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delegates;


class DelegateController extends Controller
{
 public function index(){

 	$delegates = Delegates::orderBy('last_name')->get();
  
 	            return view('london.pages.delegatelist', [
                  'delegates' => $delegates,
                 
                ]);

 }

 public function pwdCheck(Request $request){
 		if ($request->has('password') && ($request->password == "UNLEASH18" || $request->password == "unleash18")){
 			return 'true';
 		} else {
 			return 'false';
 		}

 } 
}
