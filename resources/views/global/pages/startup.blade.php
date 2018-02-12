@extends('global.main')

@section('meta')
		<meta name="description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18">
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - Startup"/>
        <meta property="og:title" content="UNLEASH - Startup"/>
        <meta property="og:description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18"/>
        <meta property="og:url" content="http://www.unleashgroup.io/startup">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/UNLEASH18-Startup-preview.jpg') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - Startup">
        <meta name="twitter:description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18" />
        <meta name="twitter:image" content="{{ URL::asset('gfx/UNLEASH18-Startup-preview.jpg') }}">
@endsection

@section('title', 'Startup')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/global/startup.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')
<div id="startup-logo-wrp" class="animated">
	<img src="{{ URL::asset('gfx/startup-logo-v2.png') }}" alt="UNLEASH Startup">
</div>
	<section id="rel" class="two clients">
		<button id="trailer" class="white-btn">Watch Trailer</button>
		<div class="wrppr">
			<div class="fix-bg startup-1"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>Do you have a solution to<br />improve the work place?</h2>
				<p><strong>We aim to be different.</strong> We help innovative solutions contribute to the Future of Work where the focus is on your potential to change the world through improving the workplace. If you have a great idea or product which contributes to this, we will provide you with the platform communicate it and gain visibility.</p>
				<p>Our Startup Zone and competitions are designed with your needs at its core. We strive to see our startup partners succeed and some of our previous winners are now main sponsors. We create a supportive environment where gaining access to the influencers and decision makers is made easier.</p>
				<p><strong>And we are proud of our record so far.</strong> Since 2011, over 90% of the startups who have participated in our competitions succeed and go on to bigger and better things, and over $25M has been raised in the last three years alone by our competition winners.</p>
			</div>
			<div class="schedule-wrp">
				<button class="orange-btn popup" data-popupdata="supbrochure">Latest Brochure</button>
				<button class="orange-btn popup" data-popupdata="supbecomeasponsor">Become a Sponsor</button>
				<button class="orange-btn popup" data-popupdata="conf-expo">Delegate Ticket</button>
			</div>
		</div>
	</section>
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>Apply for the competition</h2>
				<p>If you are shortlisted in our competition, you will compete with five (5) other finalists to convince an experts jury that your solution will make a difference. The winner will walk away with a spring in their step. Apart from the pride and prize, our winners will gain global media coverage and personal introductions to real movers, shakers and connectors in the industry. Past jury members have included thinkers and analysts like Josh Bersin, Jason Corsello, and Heidi Spirgi as well as investors, vendors, media - and perhaps most importantly of all - the organizations they wish to serve.</p>
				<p id="orange-text"><a class="eventlink" href="/london" target="_blank"><img src="{{ URL::asset('gfx/deadline-london-blck.png') }}" alt="London Deadline 26 FEBR 2018"></a><br /></p>
			</div>
			<div class="schedule-wrp">
				<button class="orange-btn popup" data-popupdata="supcompete">Apply to Compete</button>
				<button class="orange-btn popup" data-popupdata="supbecomeaspeaker">Become a Speaker</button>
			</div>
		</div>
		<div class="wrppr">
			<div class="fix-bg startup-2"></div>
		</div>
	</section>
	<section class="divider">
		<h4>Past winners of the UNLEASH startup competition</h4>
	</section>
	<section class="sponsors" id="spnsrz">
		<div class="sponsors-wrp">
			<div id="arctic" class="sponsor come-in">
				<a href="https://www.arcticshores.com/">
					<img src="{{ URL::asset('gfx/arcticShores.png') }}" alt="Arcticshores">
				</a>
			</div><!--sponsors END-->
			<div class="sponsor come-in">
				<a href="https://www.clustree.com/">
					<img src="{{ URL::asset('gfx/clustree.png') }}" alt="Clustree">
				</a>
			</div><!--sponsors END-->
			<div class="sponsor come-in">
				<a href="https://ico.robotvera.com/">
					<img src="{{ URL::asset('gfx/robot-vera.png') }}" alt="Robot Vera">
				</a>
			</div><!--sponsors END-->
			<div class="sponsor come-in">
				<a href="http://tandemhrsolutions.com/">
					<img src="{{ URL::asset('gfx/tandem.png') }}" alt="Tandem">
				</a>
			</div><!--sponsors END-->
			<div class="sponsor come-in">
				<a href="https://textio.com/">
					<img src="{{ URL::asset('gfx/textio.png') }}" alt="Textio">
				</a>
			</div><!--sponsors END-->
		</div>
	</section>
	<section class="one futureofwork">
		<div class="wrp animated fadeInTop">
			<p>“ I wanted to update you on some progress that we’ve made with Tandem and thank you for the part HR Tech World played in that. We have secured our seed round investment of €2m and have attracted a really great team of advisors, mentors and Board members. We have the ex CEO of Twitter, the CEO of Britebill and some high profile investors joining us to help us on our journey ”</p>
			<p class="tandem">Tandem</p>
		</div>
	</section>
	<section class="one-cntr">
		<div class="wrp animated fadeInTop">
			<h2>APPLY NOW</h2>
			<p>To apply, follow the link below and complete the registration form and we will be<br />in touch shortly to discuss it personally with you.</p>
			<p id="orange-text"><a class="eventlink" href="/london" target="_blank"><img src="{{ URL::asset('gfx/deadline-london.png') }}" alt="London Deadline 26 FEBR 2018"></a></p>
			<button class="orange-btn popup" data-popupdata="supcompete">Apply</button>
		</div>
	</section>


	<div id="conf-expo" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>ONE DAY TICKET: DAY 1-2</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2018-02-12/p7qct" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_30920pi_145751_30920" id="145751_30920pi_145751_30920" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_30922pi_145751_30922" id="145751_30922pi_145751_30922" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_30918pi_145751_30918" id="145751_30918pi_145751_30918" size="30" maxlength="255" type="text">
                <input placeholder="Promo Code" class="form-input" name="145751_30928pi_145751_30928" id="145751_30928pi_145751_30928" size="30" maxlength="255" type="text">
        
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_30914pi_145751_30914" id="145751_30914pi_145751_30914" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_30916pi_145751_30916" id="145751_30916pi_145751_30916" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_30930pi_145751_30930" id="145751_30930pi_145751_30930" size="30" maxlength="255" type="text" value="One-day">
                    <input placeholder="Robot Source" type="text" name="145751_30926pi_145751_30926" id="145751_30926pi_145751_30926" value="Startup2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_30924pi_145751_30924" id="145751_30924pi_145751_30924" value="Startup2018-Tickets" class="text" size="30" maxlength="255"  />
                </p>                
                <div class="popup-paragraph popup-policy ">
                    <div class="popup-paragraph-small">By submitting data to us you give your consent that data you submit may be processed for the purposes described in the <a href="terms" target="_blank">privacy policy</a>.</div>
                    <div class="popup-accept"><input required="required" id="PolicyAccepted" type="checkbox"><span class="popup-accept-button">Accept</span></div>
                </div>
                <input name="submit" value="submit" type="submit" class="blue-btn">
            </form>
          </div>
        </div>
    </div>
    <div id="videoo">
	    <div class="PopupContainer" id="ContainerVideo" onClick="event.stopPropagation();">
				<div id="VideoCloseButton"><span id="vidclose" class="close">✕</span></div>
				<div id="TrailerPopupContent" class="PopupContent">
					<div class='embed-container'><iframe id="youtube_player" class="yt_player_iframe" src='https://www.youtube.com/embed/PX8wRQBJE8k?rel=0&enablejsapi=1&showinfo=0' frameborder='0' allowfullscreen></iframe>
					</div>
				</div>
			</div>
	</div>
@endsection

@section('footerscripts')

<script type="text/javascript">
	var tag = document.createElement('script');
 		tag.src = 'https://www.youtube.com/iframe_api';
	var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	var player;
	var video = 'PX8wRQBJE8k'
 
	function onYouTubeIframeAPIReady() {
		player = new YT.Player('youtube_player', {
			videoId: video,
        	events: {
            	'onStateChange': onPlayerStateChange
        	}
     	});
	};
	function onPlayerStateChange(event) {
	    switch (event.data) {
	        case YT.PlayerState.ENDED:
	            var element = document.getElementById("videoo");
  				element.classList.remove("showvid");
	            break;
	    };
	};
</script>

<script type="text/javascript">
	if (window.location.href.indexOf('#becomeasponsor') != -1) {
           $('#becomeasponsor').css("display", "flex")
   	}
   	if (window.location.href.indexOf('#becomeaspeaker') != -1) {
           $('#becomeaspeaker').css("display", "flex")
   	}
   	if (window.location.href.indexOf('#applytocompete') != -1) {
           $('#compete').css("display", "flex")
   	}
</script>

<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
