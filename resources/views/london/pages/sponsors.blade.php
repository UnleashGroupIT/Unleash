@extends('london.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH London - Sponsors"/>
        <meta property="og:title" content="UNLEASH London - Sponsors"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/london/sponsors">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH London - Sponsors">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
@endsection


@section('title', 'Sponsors')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/london/sponsors.css') }}">
	<style>
	 .headlinesponsors .sponsor {
		 width: 190px !important;
		height: 190px !important;
	 }
	 .headlinesponsors .sponsor a {
			transform: scale(1.1,1.1);
	 }	 
	 .HeadlineH2{
		font-size: 1.9rem !important;
	 }
	.sponsors h2 {
	color:#000 !important;
	}

	</style>
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')
	<!--Keynote-->
	<section class="two clients">
		<div class="wrppr">
			<div class="img-bg sponsorsbg"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>This March, come to the show that hosts 2500+ decision makers under one roof.</h2>
				<p>UNLEASH is the leading show on Future of Work and Technology both in terms of content provided by hundreds of speakers and deal-making on our expo floors. With the largest group of Enterprise buyers in the industry attending our shows, large enterprises to the next innovators from around the world will want to attend UNLEASH Conference &amp; Expo in London. With a global footprint that influences over 55 million employees worldwide, no other community is having such a powerful impact on shaping the way the world works!
 <br>
<br>



 
The Expo Floor and A La Carte Packages are running out – be sure to book your spot now!</p>
				<button class="topaz-btn popup" data-popupdata="becomeasponsor">Become a sponsor</button>
			</div>
		</div>
	</section>
	<section class="divider">
		<h4>Our Sponsors</h4>
	</section>
		<!--Sponsors-->
	<section class="sponsors" id="spnsrz">

		<h2 class="HeadlineH2">Headline Sponsors</h2>
		<div class="sponsors-wrp headlinesponsors">
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
		
	
	
		<!--<h2> Startup</h2>
		<div class="sponsors-wrp">
			{{--@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 8)
			 <!--sponsors-->
				 @include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach		--}}			

	<!--	</div>	-->											
	</section>
	<!--Sponsors END-->
	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.</p>
			<div class="your-clock"></div>
			<button class="red-btn popup" data-popupdata="becomeasponsor">Become a Sponsor</button>
		</div>
	</section>
	<!--Counter END-->
	<!--Map-->
	<section id="map" class="map">
		<iframe src="https://snazzymaps.com/embed/27565" width="100%" height="600px" style="border:none;"></iframe>
		<div class="content">
			<div class="mapcont-wrp">
				<!-- Google API for MAP -->
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>The ExCeL London, will host UNLEASH in March 2018. The ExCeL is London and the UK's leading venue for exhibitions and conferences. With two on-site metro stations, parking for 3,700 cars and London City Airport just five minutes away, getting to ExCeL London couldn't be easier.</p>
				</div>
				<a href="{{ route('london.floorplan') }}"><button class="darkgreen-btn">More</button></a>
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
