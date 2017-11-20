@extends('london.main')

@section('meta')
 <meta name="description" content="UNLEASH shows attract the most influential thought leaders in the Future of Work space, including Arianna Huffington and Sir Richard Branson.">
 
 	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH London - Sponsors"/>
	<meta property="og:title" content="UNLEASH London - Sponsors"/>
	<meta property="og:description" content="UNLEASH shows attract the most influential thought leaders in the Future of Work space, including Arianna Huffington and Sir Richard Branson."/>
	<meta property="og:url" content="http://www.unleashgroup.io/london">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH London - Sponsors">
	<meta name="twitter:description" content="UNLEASH shows attract the most influential thought leaders in the Future of Work space, including Arianna Huffington and Sir Richard Branson." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
@endsection

@section('title', 'Sponsor')

@section('headercss')
	 <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/sponsor.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/flipclock.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/common.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
<section class="speaker-dtls-wrap">
		@if($sponsor)
			<div class="wrp">
				<div class="speaker-soc">
					<div class="speaker-pic">
						<img src="{{ URL::asset('storage/sponsors') }}/colored/{{$sponsor->logo_url }}" alt="{{ $sponsor->company_name }}">
					</div>
					<div class="dtls-wrap">
						<h2>{{ voku::cleanup($sponsor->company_name) }}</h2>
						<div class="social-icons">
							@if($sponsor->facebook)
							<a href="{{ $sponsor->facebook }}"><div><img src="{{ URL::asset('gfx/facebook.png') }}" alt="Facebook"></div></a>
							@endif
							@if($sponsor->twitter)
							<a href="{{ $sponsor->twitter }}"><div><img src="{{ URL::asset('gfx/twitter.png') }}" alt="Twitter"></div></a>
							@endif
							@if($sponsor->linkedin)
							<a href="{{ $sponsor->linkedin }}"><div><img src="{{ URL::asset('gfx/linkedin.png') }}" alt="Linkedin"></div></a>
							@endif
						</div>
						<a href="{{$sponsor->website }}" id="website">{{$sponsor->website }}</a>
					</div>
				</div>

				<div class="speaker-more">
					<p>{{ strip_tags( voku::cleanup($sponsor->short_bio) ) }}</p>
					<a href="#"><button class="blue-btn popup" data-popupdata="becomeasponsor">Become a Sponsor</button></a>
				</div>
				<a class="quit" href="
				@if($sponsor->referer)
					{{-- $sponsor->referer --}}
				    {{ route('london.sponsors') }}
				@else
					{{ route('london.sponsors') }}
				@endif	
				"><img src="{{ URL::asset('gfx/london/x.svg') }}" alt="X"></a>
			</div>

		@else
		<div class="wrp">
			<h1>Sponsor Not found</h1>
		</div>				
		@endif		
		</section>
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
