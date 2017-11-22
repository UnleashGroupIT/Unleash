@extends('lasvegas.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH America - Speaker"/>
        <meta property="og:title" content="UNLEASH America - Speaker"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/america">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH America - Speaker">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}">
@endsection

@section('title', 'Speaker')

@section('headercss')
	 <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/speaker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/flipclock.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/common.css') }}">
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
						<div class="social-icons">
							@if($speaker->facebook)
							<a href="{{ $speaker->facebook }}"><div><img src="{{ URL::asset('gfx/facebook.png') }}" alt="Facebook"></div></a>
							@endif
							<!-- <a href=""><div><img src="{{ URL::asset('gfx/lasvegas/youtube.png') }}" alt="Youtube"></div></a>-->
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
					<a href="#"><button class="blue-btn popup" data-popupdata="becomeasponsor">Become a Sponsor</button></a>
				</div>
				<a class="quit" href="
				@if($speaker->referer)
					{{-- $speaker->referer --}}
				     {{ route('lasvegas.speakers') }}
				@else
					{{ route('lasvegas.speakers') }}
				@endif	
				
				"><img src="{{ URL::asset('gfx/lasvegas/x.svg') }}" alt="X"></a>
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
