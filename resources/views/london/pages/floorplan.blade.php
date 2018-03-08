@extends('london.main')

@section('meta')
 <meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
 
	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH London - Floorplan"/>
	<meta property="og:title" content="UNLEASH London - Floorplan"/>
	<meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
	<meta property="og:url" content="http://www.unleashgroup.io/london/floorplan">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH London - Floorplan">
	<meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
@endsection

@section('title', 'London - Floorplan')

@section('headercss')
	 <link rel="stylesheet" type="text/css" href="{{ mix('css/london/agenda.css') }}">
	<style>
	 #MAP{
		width:100%; 
		min-height: 1000px;
		margin-top: 104px;
	 }
@media (max-width: 640px) {
	margin-top: 140px;
}
	 
	</style>
@endsection

@section('headerjs')
<!--Empty for Now-->
@endsection


@section('maincontent')

<iframe id="MAP" src="https://maps.mapwize.io/#/v/unleash_coference_expo_-_london?apiKey=1868d978ff06fcb9ca3f6d4fbe08d8d2"></iframe>

@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
