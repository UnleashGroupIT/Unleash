<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index(Request $request, $param = ''){
		$terms = (object)array(
			'vipdp' => (object)array(
				'title',
				'content'
			),
			'vipndp' => (object)array(
				'title',
				'content'
			),
			'standard' => (object)array(
				'title',
				'content'
			),
			'inv' => (object)array(
				'title',
				'content'
			)		
		);
		
		$result = [];
		
		$terms->vipdp->title = 'VIP tickets';
		$terms->vipdp->content = array(
			'VIP tickets are issued to Sponsors and Network Members to invite enterprise companies (clients and/or prospective clients) and enterprise buyers of software/services/solutions.',
			'Our policy objective is to ensure a healthy ratio of Enterprise to Vendor delegates at all our events. This ensures that representatives of Enterprise organizations are not overwhelmed by Vendor organizations. It assists in the protection of investments made by the Sponsors, Exhibitors and Partners at UNLEASH events. To achieve this, we enforce a strict policy of approvals with quota limits. It should be noted that we reserve the right to refuse ticket(s) to representatives of vendor companies (software/services/solution providers), consultants, media, public relations or bloggers of any kind who register themselves in this way.',
			'Cancellation Policy & Replacements for VIP Tickets: PLEASE NOTE: Upon registration, there will be a 200 GBP safety deposit charge which will be refunded to your account immediately after your attendance at the event has been verified. If for any reason you or any of your delegates need to cancel your booking, you may send a replacement from your HR Leadership team until 1 week prior to the event at no additional cost.  In cases of cancellation and no replacement up to a week prior to the event, the safety deposit and service charge will not be refunded.'
		);
		
		
		$terms->vipndp->title = 'VIP tickets';
		$terms->vipndp->content = array(
			'VIP tickets are issued to Sponsors and Network Members to invite enterprise companies (clients and/or prospective clients) and enterprise buyers of software/services/solutions.',
			'Our policy objective is to ensure a healthy ratio of Enterprise to Vendor delegates at all our events. This ensures that representatives of Enterprise organizations are not overwhelmed by Vendor organizations. It assists in the protection of investments made by the Sponsors, Exhibitors and Partners at UNLEASH events. To achieve this, we enforce a strict policy of approvals with quota limits. It should be noted that we reserve the right to refuse ticket(s) to representatives of vendor companies (software/services/solution providers), consultants, media, public relations or bloggers of any kind who register themselves in this way.',
			'Cancellation Policy & Replacements for VIP Tickets: PLEASE NOTE: If for any reason you or any of your delegates need to cancel your booking, you may send a replacement from your HR Leadership team until 1 week prior to the event at no additional cost.  In cases of cancellation and no replacement, a service charge and catering fee for the 2 Day Conference applies of 200 GBP.'
		);
		

		$terms->standard->title = 'Standard tickets';
		$terms->standard->content = array(
			'Our policy objective is to ensure a healthy ratio of Enterprise to Vendor delegates at all our events. This ensures that representatives of Enterprise organizations are not overwhelmed by Vendor organizations. It assists in the protection of investments made by the Sponsors, Exhibitors and Partners at UNLEASH events. To achieve this, we enforce a strict policy of approvals with quota limits. It should be noted that we reserve the right to refuse ticket(s) to representatives of vendor companies (software/services/solution providers) and consultants of any kind who register themselves in this way.',
			'Cancellation Policy & Replacements for Standard Tickets: ',
			'PLEASE NOTE: ',
			'Cancellation (No Show and No Replacement): Credit Vouchers are made available to the value of the ticket amount invested, valid for the upcoming event on the same continent.  A written cancellation by email to HRN Europe is required and must be sent at least one (1) week prior to the event. If a written cancellation is received less than one week before the event, no full or partial refunds will be provided, and no Credit Vouchers will be issued. Authorized/invoiced registrations are strictly enforceable and deemed 100% payable on receipt. For Loyalty Members Credit Vouchers are issued based on their package conditions.',
			'Replacement (substitution / name change): If you are unable to attend the event, you may elect to send a Senior Leadership representative in your place at no additional cost. Please note that any more than one name change made within two (2) working days to the event will be subject to a service charge equivalent to 12% of the ticket amount.'
		);
		
		
		$terms->inv->title = 'Invitation only tickets';
		$terms->inv->content = array(
			'Our policy objective is to ensure a healthy ratio of Enterprise to Vendor delegates at all our events. This ensures that representatives of Enterprise organizations are not overwhelmed by Vendor organizations. It assists in the protection of investments made by the Sponsors, Exhibitors and Partners at UNLEASH events. To achieve this, we enforce a strict policy of approvals with quota limits. It should be noted that we reserve the right to refuse ticket(s) to representatives of vendor companies (software/services/solution providers) and consultants of any kind who register themselves in this way.',
			'This ticket type is non-transferable.'
		);
		
		
	    switch ($param) {
			
        case 'vipd':
            array_push($result, $terms->vipdp);
            break;			

        case 'vipndp':
            array_push($result, $terms->vipndp);
            break;

        case 'stnd':
            array_push($result, $terms->standard);
            break;	

        case 'inv':
            array_push($result, $terms->inv);
            break;
			
			
        default:
            array_push($result, $terms->standard);
            break;
    }
		

    return view('global.pages.terms', [
                  'terms' => $result
               
              ]);

   }   
   
	
}
