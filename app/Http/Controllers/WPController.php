<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Zipper;
use App\Notifications\FormSubmitNotification;

class WPController extends Controller
{
    public function index(Request $request){

		
		if ($request->hasFile('fileupload')) {
				//dd($request->fileupload);
			$path = $request->fileupload->store('public/formdata/files/');
			$pathChopped = (explode("/", $path));
			$uploadFilename = end($pathChopped);
			
		}

     //fileupload
	
	
    	$data = new \stdClass;
		
		$data->event_name = $request->get('event-name');
		$data->event_date = $request->get('event-date');
		$data->event_venue = $request->get('event-venue');
		$data->event_location = $request->get('event-location');
		$data->producer = $request->get('producer');
		$data->office_mobile = $request->get('office-mobile');
		$data->email = $request->get('email');
		
		
    	$data->CEO = $request->get('CEO');
    	$data->job_title = $request->get('job-title');
    	$data->company = $request->get('company');		
		$data->country = $request->get('country');
		$data->social_links = $request->get('social-links');
		$data->company_website = $request->get('company-website');
		$data->mobile = $request->get('mobile'); // nope
		$data->direct_tel = $request->get('direct-tel'); // nope
		$data->founded = $request->get('founded');
		$data->offices = $request->get('offices');
		$data->staff = $request->get('staff');
		$data->keymembers = $request->get('keymembers');
		$data->investment = $request->get('investment');
		$data->investment_name = $request->get('investment-name');
		$data->clients = $request->get('clients');
		$data->industry_sector = $request->get('industry-sector');
		$data->comp_size = $request->get('comp-size');
		$data->comp_describe = $request->get('comp-describe');
		$data->unique = $request->get('unique');
		$data->HR_int = $request->get('HR-int');
		$data->comp_function = $request->get('function');
		$data->partners = $request->get('partners');
		$data->desire_partners = $request->get('desire-partners');
		$data->targeting_partners = $request->get('targeting-partners');
		$data->competitors = $request->get('competitors');
		$data->rec_competitors = $request->get('rec-competitors');
		
		
		

		$filename = date('YmdHis');


    	$pdf = PDF::loadView('pdf.wp', compact('data'));
    	$pdf->save('storage/formdata/'.$filename.'.pdf');
		
		
		if(isset($path)){
			Zipper::make('storage/formdata/zips/'.$filename.'.zip')->add('storage/formdata/'.$filename.'.pdf')->add('storage/formdata/files/'.$uploadFilename)->close();
		} else {
			Zipper::make('storage/formdata/zips/'.$filename.'.zip')->add('storage/formdata/'.$filename.'.pdf')->close();
		}
		

		$attmodel = \App\Events::first();
		
		$data->zipname = 'http://demo.unleashconf.tech/storage/formdata/zips/'.$filename.'.zip';

		$attmodel->notify(new FormSubmitNotification($data));
		

		
		 return redirect('/news/#ThankYouForEnquiry');
    }
}
