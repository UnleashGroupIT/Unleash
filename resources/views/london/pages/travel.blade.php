@extends('london.main')

@section('meta')
 <meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
 
	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH London - Travel"/>
	<meta property="og:title" content="UNLEASH London - Travel"/>
	<meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
	<meta property="og:url" content="http://www.unleashgroup.io/london/travel">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH London - Travel">
	<meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
		
@endsection

@section('title', 'London - Venue')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="http://www.unleashgroup.io/css/london/speakergrid.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/travel.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg travelbg"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<h2 class="aloft">Aloft London</h2>
					<img class="U-logo" src="{{ URL::asset('gfx/london/U.png') }}" alt="Unleash">
				</div>
				<p class="pdg">Aloft London Excel is the only hotel in ExCeL London directly connected to the ExCeL International Convention Centre. Located right next to the Prince Regent DLR station, it is minutes away from London City Airport and Canary Wharf.</p>
			</div>
			<div class="content-wrap pdg">
				<h3>Aloft London Excel</h3>
				<!--<span>Booking Code:<p class="code">UNLEASH18</p></span>-->
				<span>Single Occupancy: &pound;230 per night</span>
				<span>Double Occupancy: &pound;240 per night</span>
			</div>
			<div class="pdg btm">
				<div class="h4wrp">
					<a href="https://www.starwoodmeeting.com/events/start.action?id=1709223927&key=18A2CFB" target="_blank"><button class="white-btn">Book now</button></a>
					<a href="https://www.google.hu/maps/place/Aloft+London+Excel/@51.5083719,0.0355768,15z/data=!4m5!3m4!1s0x0:0x89b18efc117c73fe!8m2!3d51.5083719!4d0.0355768" target="_blank"><button class="white-btn">Show on Map</button></a>
				</div>
			</div>
		</div>
	</section>

	<section class="speakers-grid hotels">
		<h2>Preferred Hotels</h2>
		<div class="speakers-wrap">
			<div class="speaker">
				<img src="{{ URL::asset('gfx/london/doubletree.jpg') }}" alt="Doubletree by Hilton">
				<div class="dtls-wrap">
					<h6 class="name">Doubletree by Hilton</h6>
					<!--<span>Booking Code: <p class="code">UNLEASH18</p></span>-->
					<span>Single Occupancy: &pound;180 / night</span>
					<span>Double Occupancy: &pound;195 / night</span>
					<a href="http://doubletree.hilton.com/en/dt/groups/personalized/L/LONEXDI-CHRN-20180317/index.jhtml" target="_blank"><button class="green-btn">Book now</button></a>
				</div>
			</div>
			<div class="speaker">
				<img src="{{ URL::asset('gfx/london/moxy.jpg') }}" alt="Moxy">
				<div class="dtls-wrap">
					<h6 class="name">Moxy</h6>
					<!--<span>Booking Code: <p class="code">UNLEASH18</p></span>-->
					<span>Single Occupancy: &pound;199 / night</span>
					<span>Double Occupancy: &pound;209 / night</span>
					<a href="http://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=HR%20Tech%202018%5ELONOR%60hrnhrna%60199%60GBP%60false%602%603/17/18%603/22/18%6003/02/18&app=resvlink&stop_mobi=yes" target="_blank"><button class="green-btn">Book now</button></a>
				</div>
			</div>
			<div class="speaker none">
				<img src="{{ URL::asset('gfx/london/novotel.jpg') }}" alt="Novotel">
				<div class="dtls-wrap">
					<h6 class="name">Novotel London ExCeL</h6>
					<!--<span>Booking Code: <p class="code">UNLEASH18</p></span>-->
					<span>Single Occupancy: &pound;175 / night</span>
					<span>Double Occupancy: &pound;185 / night</span>
					<button class="green-btn popup" data-popupdata="booknow">Book now</button>
				</div>
			</div>
			<div class="speaker none">
				<img src="{{ URL::asset('gfx/london/hampton.jpg') }}" alt="Hampton by Hilton">
				<div class="dtls-wrap">
					<h6 class="name">Hampton by Hilton</h6>
					<!--<span>Booking Code: <p class="code">UNLEASH18</p></span>-->
					<span>Single Occupancy: &pound;119 / night</span>
					<span>Double Occupancy: &pound;119 / night</span>
					<button class="green-btn popup" data-popupdata="booknow">Book now</button>
				</div>
			</div>
			<div class="speaker holiday">
				<img src="{{ URL::asset('gfx/london/holiday-inn.jpg') }}" alt="Holiday Inn Express">
				<div class="dtls-wrap">
					<h6 class="name">Holiday Inn Express</h6>
					<!--<span>Booking Code: <p class="code">UNLEASH18</p></span>-->
					<span>Single Occupancy: &pound;149 / night</span>
					<span>Double Occupancy: &pound;195 / night</span>
					<button class="green-btn popup" data-popupdata="reservation">Book now</button>
				</div>
			</div>
		</div>
	</section>

	<section class="two keynote arianna flights">
		<div class="content">
			<div class="content-wrap">
				<h2>Flights</h2>
				<p class="pdg">We would like to provide you the best experience possible as you arrive to London. That’s why HR Tech World and British Airways have partnered to give you 20% off of your round-trip airfare! For you to receive the discounted airfare, please click below to be directed to the British Airways’ website where you can purchase your flight to London. <br /><br />Please note, to be eligible for the 20% discount, HR Tech World London attendees must be flying to London City Airport from Amsterdam, Edinburgh, Dublin, Dusseldorf, Frankfurt, Geneva, Glasgow, Isle of Man, Madrid, Rotterdam or Zurich.</p>
			</div>
			<div class="pdg btm">
				<button class="white-btn popup" data-popupdata="booknow">Book now</button>
			</div>
		</div>
		<div class="wrppr">
			<div class="fix-bg floorplancitybg"></div>
		</div>
	</section>
	<!--Expo END-->

	<section class="two keynote arianna right">
		<div class="content">
			<div class="content-wrap">
				<h2>Excel - London</h2>
				<p class="pdg">ExCeL London, where great connections happen every day, will host HR Tech World London. ExCeL London is a leading venue taking every event to heart with exhibitions, conferences, and much more. It is an unparalleled location for our unparalleled show.</p>
			</div>
			<div class="pdg btm">
				<button class="white-btn popup" data-popupdata="booknow">Book now</button>
			</div>
		</div>
		<div class="wrppr">
			<div class="fix-bg floorplanbg"></div>
		</div>
	</section>
	<section class="one-cntr vhcls">
		<div class="wrp">
			<h2>How to get there</h2>
			
			<div class="vehicles-wrp">
				<a href="https://www.excel.london/organiser/visitor-experience/elizabeth-line" target="_blank">
					<div class="eliz">
						<p>ELIZABETH LINE</p>
						<span>Connecting Reading and Heathrow with East London, reaching ExCeL London hasn’t been easier.</span>
					</div>
				</a>
				<a href="https://tfl.gov.uk/dlr/timetable/dlr?FromId=940GZZDLCGT&fromText=Canning+Town+DLR+Station&toText=Prince+Regent+DLR+Station&ToId=940GZZDLPRE&SelectedTime=8" target="_blank">
					<div class="tube">
						<p>TUBE</p>
						<span>The Jubilee Line is recommended as the quickest route to ExCeL London. Alight at Canning Town and change onto a Beckton-bound DLR train, for the quick 3-stop journey to Prince Regent for ExCeL (East) entrance.</span>
					</div>
				</a>
				<a href="https://www.google.com/maps/place/ExCeL+London/@51.5173734,0.0006612,13z/data=!3m1!5s0x47d8a8716fa1509d:0x342201ee325a678c!4m5!3m4!1s0x47d8a80ce609e50d:0xa0de5f705d7aec7!8m2!3d51.5084601!4d0.029846" target="_blank">
					<div class="car">
						<p>CAR</p>
						<span>When driving to ExCeL London follow signs for Royal Docks, City Airport and ExCeL. There is easy access from the M25, M11, A406 and A13.</span>
					</div>
				</a>
				<a href="https://www.excel.london/visitor/getting-here/driving-and-parking" target="_blank">
					<div class="park">
						<p>PARKING</p>
						<span>All on-site parking is pay and display. Three pay points located within the car park (on level two and level zero) at the end of your visit. All machines accept cash and credit card. Parking in the orange undercroft car park and the east car park is £20 per day. Parking in the Royal Victoria multi-storey car park is £15 per day. Motorcycles can be parked free of charge in the designated motorcycle parking area.</span>
					</div>
				</a>				
			</div>

		</div>
	</section>

	<section id="map" class="map">
		<iframe src="https://snazzymaps.com/embed/27565" width="100%" height="600px" style="border:none;"></iframe>
		<div class="content">
			<div class="mapcont-wrp">
				<!-- Google API for MAP -->
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>ExCeL London, will host UNLEASH in March 2018. ExCeL is London and the UK's leading venue for exhibitions and conferences.</p>
				</div>
				<button class="green-btn popup" data-popupdata="joinourcommunity">Join Our Community</button>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.</p>
			<button class="green-btn popup" data-popupdata="booknow">Book now</button>
		</div>
	</section>
@endsection