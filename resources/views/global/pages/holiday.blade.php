@extends('global.main')

@section('meta')
		<meta name="description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18">
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - News"/>
        <meta property="og:title" content="UNLEASH - News"/>
        <meta property="og:description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18"/>
        <meta property="og:url" content="http://www.unleashgroup.io/news">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - News">
        <meta name="twitter:description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18" />
        <meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
@endsection

@section('title', 'News')

@section('headercss')
    <link rel="stylesheet" type="text/css" href="{{ mix('css/global/holiday.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

<div id="holiday">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-body">
        <!--<span class="close">&times;</span>-->
        <div class="logo">
            <img src="{{ URL::asset('gfx/holiday-logo.png') }}" alt="UNLEASH">
        </div>
        <div class="holiday-pic">
            <img src="{{ URL::asset('gfx/happy-holiday.png') }}" alt="Happy Holiday">
        </div>
        <h2>From all of us at UNLEASH!</h2>
        <p>Thank you for making 2017 our most exciting year yet.<br />Keep up to date with the latest from UNLEASH news<br />and take your organization to the next level in the New Year.</p>
        <button id="subbtn" onclick="OpenBox()" class="trans-btn">Subscribe</button>
        <form action="http://go.pardot.com/l/145751/2016-11-07/fqbvp" method="POST">
            <div id="form-box" class="form-wrap">
                <input required="required" placeholder="Full Name" class="form-input" name="" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Email" class="form-input" id="145751_15952pi_145751_15952" name="145751_15952pi_145751_15952" size="30" maxlength="255" type="email">
			<p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
					<input placeholder="First Name" data-field="fname" type="text" name="145751_15948pi_145751_15948" id="145751_15948pi_145751_15948" value="" class="text" size="30" maxlength="40" onchange="" />
					<input placeholder="Last Name" data-field="lname" type="text" name="145751_15950pi_145751_15950" id="145751_15950pi_145751_15950" value="" class="text" size="30" maxlength="80" onchange="" />
					<input placeholder="Robot Source" value="Unleash Holiday Form" type="text" name="145751_15960pi_145751_15960" id="145751_15960pi_145751_15960" value="" class="text" size="30" maxlength="65535" onchange="" />
					<input placeholder="Page Source" value="Unleash Holiday Form" type="text" name="145751_23341pi_145751_23341" id="145751_23341pi_145751_23341" value="" class="text" size="30" maxlength="65535" onchange="" />
				</p>			
            <input name="submit" value="submit" type="submit" class="trans-btn">
            </div>
        </form>
        <a href="http://www.unleashgroup.io/news/">Continue to www.unleashgroup.io</a>
      </div>
    </div>
</div>
<div id="Countdown" style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">120</div>


@endsection

@section('footerscripts')
<script>
    function OpenBox() {
        var box = document.getElementById("form-box");
        box.className += " opened";
        var subbtn = document.getElementById("subbtn");
        subbtn.className += " hidden";
    }
	
	    // Form handle 
    $(document).on("change", "#FullName", function () {
        var c = $(this).val().split(" "), a = "", b = "";
        $.each(c, function (e, d) {
            e == c.length - 1 ? b += d : a += d + " "
        });
        a.slice(0, -1);
        $('[data-field="fname"]').val(a);
        $('[data-field="fname"]').html(a);
        $('[data-field="lname"]').val(b);
        $('[data-field="lname"]').html(b)
    });	
	
           window.onload = function () {
                var countdownElement = document.getElementById('Countdown'),
                        seconds = 119,
                        second = 0,
                        interval;

                interval = setInterval(function () {
                    countdownElement.firstChild.data = (seconds - second);
                    if (second >= seconds) {
                        clearInterval(interval);
                    }

                    second++;
                    if (second == 120) {
                        window.location = 'http://www.unleashgroup.io/news';
                    }
                }, 1000);
            }	
</script>
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection