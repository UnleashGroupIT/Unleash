@extends('london.main')

@section('meta')
 <meta name="description" content="UNLEASH shows attract the most influential thought leaders in the Future of Work space, including Arianna Huffington and Sir Richard Branson.">
 
 	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH London - Speaker"/>
	<meta property="og:title" content="UNLEASH London - Speaker"/>
	<meta property="og:description" content="UNLEASH shows attract the most influential thought leaders in the Future of Work space, including Arianna Huffington and Sir Richard Branson."/>
	<meta property="og:url" content="http://www.unleashgroup.io/london">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH London - Speaker">
	<meta name="twitter:description" content="UNLEASH shows attract the most influential thought leaders in the Future of Work space, including Arianna Huffington and Sir Richard Branson." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
@endsection

@section('title', 'London - Speaker')

@section('headercss')
	 <link rel="stylesheet" type="text/css" href="{{ mix('css/london/speaker.css') }}">

@endsection

@section('headerjs')
<!--Empty for Now-->
@endsection


@section('maincontent')
<section class="speaker-dtls-wrap">
		@if($speaker)
			<div class="wrp">
				<div class="speaker-soc">
					<div class="speaker-pic">
						<img src="{{ URL::asset('storage/speakers') }}/{{$speaker->img_url }}" alt="{{ $speaker->full_name }}">
					</div>
					<div class="dtls-wrap">
						<h2>{{$speaker->prefix}} {{ voku::cleanup($speaker->full_name) }}</h2>
						<h3>{{ $speaker->job_title }}</h3>
						<h3>{{ $speaker->company }}</h3>
						<div class="social-icons">
							@if($speaker->facebook)
							<a href="{{ $speaker->facebook }}"><div><img src="{{ URL::asset('gfx/facebook.png') }}" alt="Facebook"></div></a>
							@endif
							<!-- <a href=""><div><img src="{{ URL::asset('gfx/london/youtube.png') }}" alt="Youtube"></div></a>-->
							@if($speaker->twitter)
							<a href="{{ $speaker->twitter }}"><div><img src="{{ URL::asset('gfx/twitter.png') }}" alt="Twitter"></div></a>
							@endif
							@if($speaker->linkedin)
							<a href="{{ $speaker->linkedin }}"><div><img src="{{ URL::asset('gfx/linkedin.png') }}" alt="Linkedin"></div></a>
							@endif
						</div>
						<a href="{{$speaker->website }}" id="website">{{$speaker->website }}</a>
					</div>
				</div>

				<div class="speaker-more">
					<p>{{ strip_tags( voku::cleanup($speaker->bio) ) }}</p>
					<a href="#"><button class="blue-btn popup" data-popupdata="applytospeak">Apply To Speak</button></a>
				</div>
				<a class="quit" href="
				@if($speaker->referer)
					{{-- $speaker->referer --}}
				    {{ route('london.speakers') }}
				@else
					{{ route('london.speakers') }}
				@endif	
				"><img src="{{ URL::asset('gfx/london/x.svg') }}" alt="X"></a>
			</div>

		@else
		<div class="wrp">
			<h1>Speaker Not found</h1>
		</div>				
		@endif		
		</section>
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
