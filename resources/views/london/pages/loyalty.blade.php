@extends('london.main')

@section('meta')
 <meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
 
	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH London - Loyalty"/>
	<meta property="og:title" content="UNLEASH London - Loyalty"/>
	<meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
	<meta property="og:url" content="http://www.unleashgroup.io/london/loyalty">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH London - Loyalty">
	<meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
		
@endsection

@section('title', 'London - Loyalty')

@section('headercss')

	<link rel="stylesheet" type="text/css" href="{{ mix('css/london/loyalty.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')
	<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg loyalty-1"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>Get even more out of your<br />UNLEASH investment!</h2>
				<p>Join our Loyalty Program for exciting rewards that go beyond regular delegate tickets. When you sign up for a Loyalty package, you gain access to a whole new world of UNLEASH including branding opportunities, exclusive meetings with world renowned industry experts, and access to your very own private Loyalty Lounge! The Loyalty Lounge is the perfect spot for one-on-one meetings with colleagues and solution providers, and includes complimentary food and beverage throughout the 2-Day show.</p>
			</div>
			<button class="green-btn popup" data-popupdata="brochure">Request Brochure</button>
		</div>
	</section>
	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>Let us be your guide!</h2>
				<p>Loyalty Program members receive special assistance before, during and after the show.  We assign you a key account manager to guide your team every step of the way so that you and your team are fully prepared and flying high before and during UNLEASH.<br /><br />Become part of the Loyalty Program today for a truly UNLEASH-ed experience!</p>
			</div>
			<button class="green-btn popup" data-popupdata="contact">Become a Member</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg loyalty-2"></div>
		</div>
	</section>
	<section class="one-cntr">
		<div class="wrp">
			<h2>Join the Program</h2>
			<p>Become a loyalty member to UNLEASH the full potential of your team and organisation! The world's leading and fastest growing show on the Future of Work is here to help you roadmap your way to 2020 and beyond, all with an exclusive VIP experience.</p>
			<button class="green-btn popup" data-popupdata="booknow">Book now</button>
		</div>
	</section>
@endsection