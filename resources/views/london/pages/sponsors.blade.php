@extends('london.main')

@section('title', 'Sponsors')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/sponsors.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/flipclock.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/common.css') }}">
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
				<h2>Sponsors</h2>
				<p>Unleash sponsors represent the Who’s Who of the world’s leading solution and service providers offering the most innovative and disruptive technologies to be found anywhere. Our sponsors have the solutions that are shaping the Future of Work and driving rapid transformation inside the the 21st century’s most forward thinking organizations. At Unleash the show is a happening place for optimism and wonder where inspiration bubbles, and where attendees can discuss and identify the latest technologies and how to implement them for the greatest potential impact.</p>
			</div>
			<button class="green-btn">Become a sponsor</button>
		</div>
	</section>
		<!--Sponsors-->
	<section class="sponsors" id="spnsrz">

		<h2>Diamond + Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 1)
			 <!--sponsors-->
				 @include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>

		<h2>Diamond Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 2)
			 <!--sponsors-->
				 @include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>


		<h2>Emerald Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 3)
			 <!--sponsors-->
				 @include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>


		<h2>Platinum Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 4)
			 <!--sponsors-->
				 @include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>

		<h2>Gold Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 5)
			 <!--sponsors-->
				 @include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>


		<h2>Silver Sponsors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 6)
			 <!--sponsors-->
				 @include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>


		<h2> Exhibitors</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 7)
			 <!--sponsors-->
				 @include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>	

		<h2>A La Carte</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 10 || $sponsor->pivot->alacarte == 1)
			 <!--sponsors-->
				 @include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach	
		</div>	
		
		<h2> Startup</h2>
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 8)
			 <!--sponsors-->
				 @include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach					

		</div>												
	</section>
	<!--Sponsors END-->
	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed.</p>
			<div class="your-clock"></div>
			<button class="green-btn">cta</button>
		</div>
	</section>
	<!--Counter END-->
	<!--Map-->
	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>ExCeL London, will host Unleash in March 2018. ExCeL is London and the UK’s leading venue for exhibitions, conferences, and much more. With two on-site metro stations, parking for 3,700 cars and London City Airport just 5 minutes away, getting to ExCeL London couldn’t be easier.</p>
				</div>
				<button class="green-btn">More</button>
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
