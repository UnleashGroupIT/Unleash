@extends('lasvegas.main')

@section('meta')
 <meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH America - Volunteer"/>
        <meta property="og:title" content="UNLEASH America - Volunteer"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/america/volunteer">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH America - Volunteer">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}">
		
@endsection

@section('title', 'America - Volunteer')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/lasvegas/volunteer.css') }}">

@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg vol-1"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>UNLEASH AMERICA<br />VOLUNTEER PROGRAM</h2>
				<p>UNLEASH is much more than just business events; we are in the change-the-world-for-the-greater-good business. We are passionate creative people on a mission to inspire and transform the world of work &amp; technology. Our events attract the world’s leading entrepreneurs, visionaries, disrupters and doers, including Sir Richard Branson, Arianna Huffington, Sir Ken Robinson, Rachel Botsman, Gary Vaynerchuk and many more. Past and future show locations include Amsterdam, London, San Francisco, Paris and Las Vegas and have welcomed over 9,000 attendees in 2017.</p>
				<p>In 2018, UNLEASH will scale significantly to become the world’s leading marketplace and community on the future of the workplace and technology. #UNLEASH18</p>
				<p>As part of the volunteer program, you will be granted a complementary conference ticket (actual value of USD 1495,00), which gives you access to all of our sessions that you can visit during your free time. Volunteers will also receive a reference letter after completing the program.</p>
			</div>
			<button class="red-btn popup" data-popupdata="volunteer">Apply</button>
		</div>
	</section>

	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>JOB DESCRIPTION</h2>
				<p>Join UNLEASH America as a volunteer and gain unique, hands-on experience from the masters of event and conference management! You’ll act as an integral component of our show’s operations team from 14 May to 16 May 2018 inclusively, with all of your meals covered throughout this period.</p>
				<p>The volunteer program includes the following task opportunities for participants: coordinating catering, registration assistance, traffic coordination, delegate bag distribution, seating, room monitoring and general assistance of the operations team.</p>
				<p>We only accept applications from candidates based in Las Vegas US, unless all accommodation and travel costs are covered by the applicant.</p>
			</div>
			<button class="red-btn popup" data-popupdata="volunteer">Apply</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg vol-2"></div>
		</div>
	</section>
	<!--Expo END-->

	<section class="one-cntr">
		<div class="wrp">
			<h2>APPLY as VOLUNTEER</h2>
			<p>We can only accept applications with full availability between 14-16 May 2018.<br />We only accept applications from candidates based in Las Vegas US<br />unless all accommodation and travel costs are covered by the applicant.</p>
			<button class="red-btn popup" data-popupdata="volunteer">Apply</button>
		</div>
	</section>
	<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg vol-3"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>Testimonials</h2>
				<p>" Volunteering at HR Tech World gave me a chance to connect with others in building what I felt was one of the best HR conferences I have ever been to (I've been to a few). As someone who loves people and tech, being a part of HR Tech World allowed me to hear from a lot of experienced speakers talk about how to better integrate the two and create an environment for both to thrive in the workplace. I would recommend this to anyone who is passionate about HR and wants to meet likeminded individuals from all walks of life who enjoy being a part of the success story that is HR Tech World. I really benefited by getting additional time with speakers because I volunteered. "</p>
				<strong>Brian Boncy<br />Ethos Lending, USA</strong>
			</div>
		</div>
	</section>
	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<p>" Volunteering with HR Tech World provided the wonderful opportunity to witness and participate in a world-class conference. As a bonus, I was fortunate to gain insight into the Human Resources industry and exposure to leading technology solutions. I heard thought-provoking speeches by trending business leaders. It was a pleasure to support HR Tech World in connecting Human Resources professionals with one another. I would gladly volunteer again! "</p>
				<strong>Michael Umbay<br />Berkeley, USA</strong>
				<p>" I am very glad that I had a chance to participate in HR Tech World. This is the greatest conference that makes you feel not only like part of this industry. I learned about new strategies in HR that use technology which could help me increase productivity in my company. "</p>
				<strong>Antonina Musenko<br />Nikon, USA</strong>
			</div>
		</div>
		<div class="wrppr">
			<div class="fix-bg vol-4"></div>
		</div>
	</section>
	<section id="viki" class="one-cntr">
		<div class="wrp">
			<div>
				<img id="viki-prof" src="{{ URL::asset('gfx/london/viki.jpg') }}" alt="Viki McCann">
			</div>
			<p>Viki McCann</p>
			<span>General Manager, America</span>
			<p class="testim">UNLEASH is the most inspiring, creative, challenging and fun environment in my career and the reason why I have been part of this amazing journey in building something incredible over the past 6 years.</p>
		</div>
	</section>
	
<script>
$('#ContactForm').submit(function(event){

    event.preventDefault();
     var formData = $('#ContactForm').serialize();


               $.post( "https://www.hrtechcongress.com/marketingelements/smartrecruiters/ssl_test.php", {action: "externship", formData: formData })
              .done(function( data ) {
                if (typeof data != "undefined" && data != 0 && data != ''){

						window.location = "https://hrtechcongress.com/sanfrancisco/#ThankYouForEnquiry";

                }
        });


});

</script>	
@endsection