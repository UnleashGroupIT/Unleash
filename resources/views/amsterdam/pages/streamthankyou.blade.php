@extends('amsterdam.main')

@section('title', 'Live')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/amsterdam/stream.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/common.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

	<section class="stream">
		<div class="conent-wrapper">
			<div class="details-sec">
				<h3>Live Stream</h4>
				<h1>3 Live Streams</h1>
				<div>
					<h4>Future of work Stage</h4>
					<p>Innovations in robotics, AI, intelligent apps, cognitive computing and chatbots are changing the reality of what it means to live and work in the Digital Age. Catch Arianna Huffington, Nick Bostrom, Corinne Vigreux and more on our Future of Work stage.</p>
				</div>
			</div>
			<div class="thanks-wrp">
				<h2>Thank You for your Submission!</h2>
				<p><br />We will be in touch shortly via e-mail with further information about how to access our livestream.<br /><br /><br /><strong class="strn">Enjoy the show!</strong></p>
			</div>
		</div>
	</section>

@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection