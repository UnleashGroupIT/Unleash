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
			<div class="form-wrp">
  			 <form id="form" accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-10-12/kb2r2">
					<input required type="text" id="145751_26623pi_145751_26623" name="145751_26623pi_145751_26623" placeholder="First Name">
					<input required type="text" id="145751_26625pi_145751_26625" name="145751_26625pi_145751_26625" placeholder="Last Name">
					<input required type="text" id="145751_26627pi_145751_26627" name="145751_26627pi_145751_26627" placeholder="Company">
					<input required type="text" id="145751_26629pi_145751_26629" name="145751_26629pi_145751_26629" placeholder="Email">
					<input required type="text" id="145751_26631pi_145751_26631" name="145751_26631pi_145751_26631" placeholder="Job Title">

					 <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
						<input required type="text" value="Unleash-LivestreamAms17" id="145751_26892pi_145751_26892" name="145751_26892pi_145751_26892" placeholder="Source">
					</p>
					
					<input required type="submit" name="submit" value="Submit" class="amsblue-btn">
				</form>
			</div>
		</div>
	</section>

@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<!--Pardot Scripts -->
<script type="text/javascript" src="http://form-cdn.pardot.com/js/piUtils.js?ver=20130530"></script><script type="text/javascript">
piAId = '146751';
piCId = '9189';
piHostname = 'pi.pardot.com';
if(!window['pi']) { window['pi'] = {}; } pi = window['pi']; if(!pi['tracker']) { pi['tracker'] = {}; } pi.tracker.pi_form = true;
(function() {
	function async_load(){
		var s = document.createElement('script'); s.type = 'text/javascript';
		s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
		var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
	}
	if(window.attachEvent) { window.attachEvent('onload', async_load); }
	else { window.addEventListener('load', async_load, false); }
})();
</script>
@endsection