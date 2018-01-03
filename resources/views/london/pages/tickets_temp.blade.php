@extends('london.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH London - Tickets"/>
        <meta property="og:title" content="UNLEASH London - Tickets"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/london/tickets">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH London - Tickets">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}"> 
@endsection

@section('title', 'London - Tickets')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/london/tickets_temp.css') }}">
	<style>
		.TicketButton{
			cursor:pointer;
		}
	</style>	
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')		

<section id="TicketTimeline">
 <div id="TimelineSingle">
    <div class="TimelineContainer">
        <h4>WE ARE PERFORMING ROUTINE MAINTENANCE ON OUR TICKET SITES BETWEEN DECEMBER 22ND, 2017 TO JANUARY 8TH, 2018 INCLUSIVELY.</h4>
    </div>
 </div>
</section>

<section id="ticketform">
    <h2>Registration Inqury</h2>
    <h4>To register for the event, please fill in your information below and we will get in touch as soon as we can. We apologize in advance for any delays.</h4>
    <form action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" method="POST">
        <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
        <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
        <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
        <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                
        <select required name="145751_28534pi_145751_28534" id="145751_28534pi_145751_28534" class="select form-input" onchange="">
            <option value="" selected="selected" hidden>Apply as</option>
            <option value="183362">Analyst</option>
            <option value="183364">Blogger</option>
            <option value="183366">Delegate</option>
            <option value="183368">Investor</option>
            <option value="183370">Media</option>
            <option value="183372">Speaker</option>
            <option value="183374">Sponsor</option>
            <option value="183376">Startup</option>
        </select>

        <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
            <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
            <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
            <input placeholder="Lead Source 1" value="London2018-BookNow" class="form-input" name="" id="" size="30" maxlength="255" type="text">
            <input placeholder="Lead Source 2" value="London2018-BookNow" class="form-input" name="" id="" size="30" maxlength="255" type="text">
            <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
            <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
        </p>                
        <div class="popup-paragraph popup-policy ">
            <div class="popup-paragraph-small">By submitting data to us you give your consent that data you submit may be processed for the purposes described in the <a href="terms" target="_blank">privacy policy</a>.</div>
            <div class="popup-accept"><input required="required" id="PolicyAccepted" type="checkbox"><span class="popup-accept-button">Accept</span></div>
        </div>
        <input name="submit" value="submit" type="submit" class="darkgreen-btn">
    </form>
</section>

@endsection

@section('footerscripts')


<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script>
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
</script>

<script>
$("#RegisterDiscount").click(function(t){t.preventDefault(t);var e=$("#DiscountField").val();"undefined"!=typeof e&&""!=e&&window.open("https://www.eventbrite.com/e/hr-tech-world-london-tickets-34137650632?discount="+e+"#tickets","_blank")}),$(".TicketButton").click(function(t){t.preventDefault(t);var e=$(this).data("discount");"undefined"!=typeof e&&""!=e&&window.open("https://www.eventbrite.com/e/hr-tech-world-london-tickets-34137650632?discount="+e+"#tickets","_blank")});
</script>
@endsection
