@extends('amsterdam.main')

@section('meta')
<meta http-equiv="refresh" content="0;url=https://unleash.swoogo.com/unleashamsterdam" />

		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH Amsterdam - Tickets"/>
        <meta property="og:title" content="UNLEASH Amsterdam - Tickets"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/amsterdam/tickets">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/amsterdam/UNLEASH_metashare_amsterdam.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH Amsterdam - Tickets">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/amsterdam/UNLEASH_metashare_amsterdam.png') }}"> 
@endsection

@section('title', 'Amsterdam - Tickets')

@section('headercss')
		
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')		


@endsection

@section('footerscripts')

<script>try{Typekit.load({ async: true });}catch(e){}</script>

@endsection
