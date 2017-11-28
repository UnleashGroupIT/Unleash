@extends('amsterdam.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH Amsterdam - Sponsors"/>
        <meta property="og:title" content="UNLEASH Amsterdam - Sponsors"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/amsterdam/sponsors">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/amsterdam/UNLEASH_metashare_amsterdam.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH Amsterdam - Sponsors">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/amsterdam/UNLEASH_metashare_amsterdam.png') }}">
@endsection

@section('title', 'Sponsors')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/amsterdam/sponsors.css') }}">

@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
	<!--Keynote-->
	<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg sponsorsbg"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<button class="blue-btn popup" data-popupdata="becomeasponsor">Become a sponsor</button>
				<p>UNLEASH sponsors represent the Who’s Who of the world’s leading solution and service providers offering the most innovative and disruptive technologies to be found anywhere. Our sponsors have the solutions that are shaping the Future of Work and driving rapid transformation inside the the 21st century’s most forward thinking organizations. At UNLEASH the show is a happening place for optimism and wonder where inspiration bubbles, and where attendees can discuss and identify the latest technologies and how to implement them for the greatest potential impact.</p>
			</div>
		</div>
	</section>
	<!--Sponsors-->
	<section class="sponsors" id="spnsrz">

		<h2>Headline Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 1)
			 <!--sponsors-->
				 @include('amsterdam.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>

		<h2>Diamond Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 2)
			 <!--sponsors-->
				 @include('amsterdam.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>


		<h2>Emerald Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 3)
			 <!--sponsors-->
				 @include('amsterdam.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>


		<h2>Platinum Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 4)
			 <!--sponsors-->
				 @include('amsterdam.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>

		<h2>Gold Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 5)
			 <!--sponsors-->
				 @include('amsterdam.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>


		<h2>Silver Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 6)
			 <!--sponsors-->
				 @include('amsterdam.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>


		<h2> Exhibitors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 7)
			 <!--sponsors-->
				 @include('amsterdam.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>	

		<h2>A La Carte</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 10 || $sponsor->pivot->alacarte == 1)
			 <!--sponsors-->
				 @include('amsterdam.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach	
		</div>	
		
		 {{--<!--<h2> Startup</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 8)
			 <!--sponsors-->
				 @include('amsterdam.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach	--}}				

		<!--</div>-->											
	</section>
	<!--Sponsors END-->
	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.</p>
			<div class="your-clock"></div>
			<button class="blue-btn popup" data-popupdata="becomeasponsor">Become a Sponsor</button>
		</div>
	</section>
	<!--Counter END-->
	<!--Map-->
	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>Known for it’s tolerance and openness Amsterdam is the world’s most multicultural city, as well as being a leading financial centre, and a major arts and cultural capital.</p>
				</div>
				<a href="{{ route('ams.floorplan') }}"><button class="blue-btn">More</button></a>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
