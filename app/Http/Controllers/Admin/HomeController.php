<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.home');
    }

    public function moo(Request $request){
          
           
         return redirect($request->server('HTTP_REFERER').'#ThankYou');
      

    }
    public function oauth()
    {
        return view('admin.auth.pages.oauth');
    }
	
}
