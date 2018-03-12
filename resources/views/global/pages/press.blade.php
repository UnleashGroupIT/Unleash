@extends('global.main')

@section('meta')
		<meta name="description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18">
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - Media"/>
        <meta property="og:title" content="UNLEASH - Media"/>
        <meta property="og:description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18"/>
        <meta property="og:url" content="http://www.unleashgroup.io/press">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - Media">
        <meta name="twitter:description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18" />
        <meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
@endsection

@section('title', 'Media')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/global/press.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
	<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg press-1"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>MEDIA, ANALYSTS &amp; INFLUENCERS</h2>
				<p>Welcome to the UNLEASH Media, Analysts &amp; Influencers Page! Make sure to browse the page for press releases, corporate blog posts, latest articles about UNLEASH, as well as media and analyst registration information to our UNLEASH events. You can also download our MEDIA Kit for our official logos and banners.<br /></p>
				<p>For any inquiries, please contact Andi Lustak on <strong>pr@unleashgroup.io</strong><br />or by calling the following numbers:<br /></p>
				<p><strong>UK: +44 20 34 689 689<br />US: +1 415 795 7022<br />EU: +36 1 201 1469</strong></p>
			</div>
			<div class="schedule-wrp">
				<a href="UNLEASH_MediaKit.rar"><button class="darkgreen-btn popup" data-popupdata="">Media Kit</button></a>
				<a href="#analyst"><button class="darkgreen-btn">Media Registration</button></a>
			</div>
		</div>
	</section>
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>About UNLEASH</h2>
				<p>Unleash Your People! UNLEASH (previously HR Tech World) is much more than just business events; we are in the change-the-world-for-the-greater-good business. We are passionate creative people on a mission to inspire and transform the world of work &amp; technology. Our shared vision is that by 2020, UNLEASH will be the platform of choice on the Future of Work across the globe. More than half of our community includes CEO’s, CHRO/CPOs, EVPs, and SVPs from the most exciting brands and leading organizations, located in 120+ countries worldwide.</p>
				<p>The world’s fastest growing community on the Future of Work, UNLEASH is ranked as the largest Corporate Network focused on the interface between people, technology, organizations and the future. Our events attract the world’s leading entrepreneurs, visionaries, disrupters and doers, including Sir Richard Branson, Arianna Huffington, Sir Ken Robinson, Rachel Botsman, Gary Vaynerchuk and many more. Past and future show locations include Amsterdam, London, San Francisco, Paris and Las Vegas and have welcomed over 9,000 attendees in 2017.</p>
				<p>In 2018, UNLEASH will scale significantly to become the world’s leading marketplace and community on the future of the workplace and technology. Join the community and find out more at <a style="display: inline-block;" href="http://www.unleashgroup.io">www.unleashgroup.io</a></p>
				<p>Twitter: #UNLEASH18</p>
				<p>Sign up to receive our latest announcements about UNLEASH events and news.</p>
			</div>
			<div class="schedule-wrp">
				<button class="darkgreen-btn popup" data-popupdata="joinourcommunity">PR News</button>
			</div>
		</div>
		<div class="wrppr">
			<div class="fix-bg press-2"></div>
		</div>
	</section>
	<section class="one-cntr upcoming">
		<div class="wrp">
			<h3>Upcoming Events</h3>
			<div class="events-wrp">
				<div>
					<a href="{{ route('london.index') }}"><img src="{{ URL::asset('gfx/london-box.png') }}" alt="London"></a>
				</div>
				<div>
					<a href="{{ route('lasvegas.index') }}"><img src="{{ URL::asset('gfx/vegas-box.png') }}" alt="Lasvegas"></a>
				</div>
				<div>
					<a href="{{ route('ams.index') }}"><img src="{{ URL::asset('gfx/ams-box.png') }}" alt="Amsterdam"></a>
				</div>
			</div>
		</div>
	</section>
	
	<section class="divider">
		<h4>Media Partners</h4>
	</section>	
	<section class="sponsors" id="spnsrz">



		
		<div class="sponsors-wrp">
			@foreach($sponsors as $sponsor)
			   @if($sponsor->pivot->category_id == 0)
			 <!--sponsors-->
				@include('london.components.sponsorpagegrid')
			<!--sponsors END-->
			   @endif
			@endforeach

		</div>

						
	</section>	
	<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg press-3"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>MEDIA RELEASES</h2>
				<p>
					<a href="http://www.unleashgroup.io/news/unleash-hires-anna-ott/" target="_blank">UNLEASH hires Anna Ott as Head of Startup Ecosystem (8 February 2018)</a>
					<a href="http://www.unleashgroup.io/news/technology-disruptor-jonas-kjellberg-keynote-unleash-conference-expo/" target="_blank">Technology Disruptor Jonas Kjellberg to keynote at UNLEASH Conference &amp; Expo (6 February 2018)</a>
					
					<a href="http://www.unleashgroup.io/news/google-x-johnson-johnson-cisco-ge-digital-microsoft-speak-at-unleash-america/" target="_blank">Google X, Johnson &amp; Johnson, Cisco, GE Digital and Microsoft to Speak at UNLEASH America (31 January 2018)</a>
					<a href="http://www.unleashgroup.io/news/unleash-first-round-of-speakers-london18/" target="_blank">UNLEASH Conference &amp; Expo announces first round of speakers for London show in March. (11 January 2018)</a>
					<a href="http://www.unleashgroup.io/news/bri-vellis-chief-marketing-officer/" target="_blank">Bri Vellis Joins UNLEASH as Chief Marketing Officer (12 December 2017)</a>
					<a href="http://www.unleashgroup.io/news/unleash-appoints-mark-downey-head-strategy-corporate-ventures/" target="_blank">UNLEASH Appoints Mark Downey as Head of Strategy and Corporate Ventures; Continues to Roll Out Future Growth Plans (20 November 2017)</a>
					<a href=" http://www.unleashgroup.io/news/hr-tech-world-is-now-unleash/" target="_blank">HR Tech World is now UNLEASH (24 October 2017)</a>
					<a href="http://www.unleashgroup.io/news/china-gorman-hr-tech-world-managing-director-north-america/" target="_blank">China Gorman joins HR Tech World as Managing Director, North America (23 October 2017)</a>
					<a href="http://www.unleashgroup.io/news/hr-tech-world-announces-las-vegas-2018/" target="_blank">HR Tech World announces 2nd US show to be held in Las Vegas on May 15-16, 2018  (29 September 2017)</a>
					<a href="http://www.unleashgroup.io/news/hr-tech-world-unveils-full-agenda-amsterdam-show-next-month/" target="_blank">HR Tech World Unveils Full Agenda for Amsterdam Show Next Month (22 September 2017)</a>
				</p>
				<h2>UNLEASH Corporate Blog</h2>
				<p>
					<a href="http://www.unleashgroup.io/news/5-finalists-2017-hr-tech-world-startup-competition/" target="_blank">5 Finalists in the 2017 HR Tech World Startup Competition</a>
					<a href="http://www.unleashgroup.io/news/breaking-bad-hr-tech-world-san-francisco/" target="_blank">Breaking Bad With HR Tech World San Francisco!</a>
					<a href="http://www.unleashgroup.io/news/future-work-san-francisco/" target="_blank">The Future of Work in San Francisco</a>
					<a href="http://www.unleashgroup.io/news/arianna-huffington-announced-hr-tech-world-2017/" target="_blank">Arianna Huffington Announced at HR Tech World 2017</a>
					<a href="http://www.unleashgroup.io/news/interview-hiring-success-platform-smartrecruiters/" target="_blank">Interview: The Hiring Success Platform – SmartRecruiters</a>
				</p>
			</div>
		</div>
	</section>
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>UNLEASH IN THE NEWS</h2>
				<p>Read up on the latest UNLEASH (formerly HR Tech World) news.</p>
				<p>
					<a href="https://www.siliconrepublic.com/careers/sci-tech-100-2018-future-of-work" target="_blank"><strong>SiliconRepublic.com: </strong>14 future of work experts with all the answers, 12/19/2017</a>
					<a href="https://www.siliconrepublic.com/people/ida-tin-clue-career-advice" target="_blank"><strong>SiliconRepublic.com: </strong>Ida Tin: ‘The biggest challenge is figuring out what you want to do’ , 12/4/2017</a>
					<a href="https://www.siliconrepublic.com/advice/reduce-stress-arianna-huffington" target="_blank"><strong>SiliconRepublic.com: </strong>Lessons in reducing stress from Arianna Huffington, 11/30/2017</a>
					<a href="https://medium.com/talking-circles/humanising-hr-tech-its-here-to-enable-not-to-replace-e2fcc32ce416" target="_blank"><strong>Medium.com: </strong>Humanising HR Tech — it’s here to enable not to replace, 11/28/2017</a>
					<a href="https://bbj.hu/whosnews/unleash-welcomes-new-head-of-strategy_141863" target="_blank"><strong>Budapest Business Journal: </strong>UNLEASH welcomes new head of strategy, 11/21/2017</a>
					<a href="https://www.personneltoday.com/hr/hr-tech-world-start-stage-made-grade/" target="_blank"><strong>Personnel Today: </strong>HR Tech World start-up stage: Who made the grade? , 11/21/2017</a>
					<a href="https://diginomica.com/2017/11/15/large-enterprise-must-dare-to-transform-an-airbus-workday-perspective/" target="_blank"><strong>Diginomica: </strong>Large enterprise must dare to transform – an Airbus &amp; Workday perspective, 11/15/2017</a>
					<a href="https://blogs.gartner.com/john-kostoulas/2017/11/13/day-after-tomorrow-hr/" target="_blank"><strong>Gartner blog: </strong>Reflections from HR Tech World: what does the day after tomorrow look like?, 11/13/2017</a>
					<a href="https://www.hrmsworld.com/hr-tech-world-2017-highlights.html" target="_blank"><strong>HRMS World: </strong>HR Tech World 2017: our highlights, 11/6/2017</a>
					<a href="http://www.computerweekly.com/ehandbook/Workplace-revolution-How-HR-technology-is-transforming-the-way-we-work" target="_blank"><strong>Computer Weekly: </strong>Workplace revolution: How HR technology is transforming ..., 11/1/2017</a>
					<a href="https://research.nelson-hall.com/blogs/?avpage-views=blog&type=post&post_id=739" target="_blank"><strong>Nelson Hall: </strong>Five UNLEASHed HR Tech Ideas from HRTechWorld, 10/31/2017</a>
					<a href="https://www.personneltoday.com/hr/hr-tech-world-amsterdam-data-digital-detox-top-agenda/" target="_blank"><strong>Personnel Today: </strong>HR Tech World Amsterdam: Data and digital detox top the agenda, 10/31/2017</a>
					<a href="https://www.hrzone.com/lead/future/hr-past-and-future-time-travelling-at-hr-tech-world-in-amsterdam" target="_blank"><strong>HRZone.com: </strong>HR past and future: time-travelling at HR Tech World in Amsterdam, 10/30/2017</a>
					<a href="https://www.workforce.com/2017/10/27/china-gorman-helps-unleash-new-hr-tech-industry-event/?platform=hootsuite" target="_blank"><strong>Workforce.com: </strong>China Gorman Helps Unleash New HR Tech Industry Event, 10/27/2017</a>
					<a href="http://www.hrmarketer.com/blog/2017/10/recapping-hrtechworld-amsterdam/" target="_blank"><strong>HRMarketer: </strong>Recapping #HRTechworld Amsterdam, 10/26/2017</a>
					<a href="https://www.hrzone.com/lead/future/for-the-human-operating-system-downtime-is-a-feature-not-a-bug-says-arianna-huffington" target="_blank"><strong>HRZone.com: </strong>“For the human operating system, downtime is a feature " ... , 10/26/2017</a>
					<a href="https://www.inc.com/suzanne-lucas/why-arianna-huffington-is-wearing-same-dress-over-over-and-you-should-too.html" target="_blank"><strong>INC.: </strong>Why Arianna Huffington Wears the Same Dress Over and Over (and You Should, Too), 10/25/2017</a>
				</p>
			</div>
			<!--<div class="schedule-wrp">
				<a href=""><button class="darkgreen-btn">DOWNLOAD MEDIAKIT</button></a>
				<a href=""><button class="darkgreen-btn">DOWNLOAD IMAGES</button></a>
			</div>-->
		</div>
		<div class="wrppr">
			<div class="fix-bg press-4"></div>
		</div>
	</section>
	<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg press-5"></div>
		</div>
		<div class="content">
			<div class="content-wrap">	
				<p>
					<a href="https://www.siliconrepublic.com/careers/marc-coleman-hr-tech-world-future-ai" target="_blank"><strong>SiliconRepublic.com: </strong>HR Tech World’s Marc Coleman: ‘The future of work ...’ , 10/13/2017</a>
					<a href="http://www.totalpicture.com/career-podcast-interview-channels/hr-technology-interviews/1618-marc-coleman-update-on-hr-tech-world-amsterdam.html" target="_blank"><strong>TotalPicture Radio: </strong>Marc Coleman Update on HR Tech World Amsterdam (podcast), 10/4/2017</a>
					<a href="https://www.hrzone.com/lead/future/we-are-living-in-a-very-exciting-period-of-our-evolution-as-technology-starts-to-impact" target="_blank"><strong>HRZone.com: </strong>Interview: Marc Coleman, Founder of HR Tech World. We are living ... , 10/4/2017</a>
					<a href="https://research.nelson-hall.com/blogs-webcasts/nelsonhall-blog/?avpage-views=blog&type=post&post_id=683" target="_blank"><strong>Nelson Hall: </strong>People First the Key Message from HR Tech World, 6/21/2017</a>
					<a href="http://recruitingdaily.com/hr-tech-world-san-francisco-recap/" target="_blank"><strong>Recruiting Daily: </strong>HR Tech World and The Final Countdown: How Europe’s Greatest ... , 6/20/2017</a>
					<a href="http://www2.staffingindustry.com/site/Editorial/Daily-News/HR-technology-drives-culture-leaders-look-at-tech-and-engagement-in-San-Francisco-42428" target="_blank"><strong>Staffing Industry Analysts: </strong>‘HR technology drives culture’; leaders look at tech and ..., 6/15/2017</a>
					<a href="http://www.talenteconomy.io/2017/06/15/vaynerchuk-people-financially-viable/?utm_campaign=Talent%20Economy%20Q2%202017&utm_content=56059228&utm_medium=social&utm_source=twitter" target="_blank"><strong>Talent Economy: </strong>Gary Vaynerchuk to CFOs: Caring About People is Financially Viable, 6/15/2017</a>
					<a href="https://talentculture.com/future-work-now-work-even-future/" target="_blank"><strong>TalentCulture: </strong>The Future of Work is Here Now – But Does Work Even Have a Future?, 6/12/2017</a>
					<a href="http://searchfinancialapplications.techtarget.com/news/450420438/Diversity-in-HR-among-trends-at-HR-Tech-World-2017-San-Francisco" target="_blank"><strong>SearchFinancialApplications (Techtarget): </strong>Tech promotes communities and diversity in HR, ... 6/8/2017</a>
					<a href="http://www.totalpicture.com/career-podcast-interview-channels/hr-technology-interviews/1592-marc-coleman-the-future-of-work.html" target="_blank"><strong>TotalPicture Radio: </strong>Marc Coleman - The Future of Work, 5/16/2017</a>
					<a href="http://diginomica.com/2017/04/03/virtual-reality-puts-real-life-spin-tackling-emergencies-klm/?utm_source=dlvr.it&utm_medium=twitter"><strong>Diginomica: </strong>Virtual reality puts real-life spin on tackling emergencies at KLM, 4/3/2017</a>
					<a href="http://www.personneltoday.com/hr/hr-tech-world-hr-embrace-disruptive-technology/"><strong>Personnel Today: </strong>HR Tech World: Why HR should embrace disruptive technology, 3/29/2017</a>
					<a href="http://www.hrzone.com/lead/future/in-praise-of-know-lessons-from-hrtechworld"><strong>HR Zone: </strong>In Praise of Know: lessons from #HRTechWorld, 3/27/2017</a>
				</p>
			</div>
		</div>
	</section>
	<section id="analyst" class="one-cntr">
		<div class="wrp">
			<h2>Media &amp; AnaLyst registration</h2>
			<p>All media and analyst representatives who plan to attend UNLEASH events must register their interest in attending each show. Media and Analyst Passes are free-of-charge to all press/media/ industry analysts/ bloggers with valid and current credentials. The UNLEASH PR team will review registrations received and send notification by email within five (5) working days, as to whether attendance is approved.</p>
			<p>If you have any questions about registration or require assistance, please contact Andi Lustak at pr@unleashgroup.io Please note: You will be required to show identification and credentials when you arrive to the conference venues.</p>
			
		</div>
	</section>
	<div id="thankyoupress" class="modal">
		<!-- Modal content -->
		<div class="ThanksModelContent modal-content">
		  <div class="modal-header">
		    <span class="close">&times;</span>
		      <div class="thank-you-image">
                <img class="ThankYouImage" src="{{ URL::asset('gfx/thankyou.svg') }}" alt="Thank You" />
            </div>
		    <h3 class="ThanksH3">Thank you for registering your interest for a press pass.</h3>
		    <p>The UNLEASH PR team will review registrations received and send notification by email within five (5) working days, as to whether attendance is approved. Thanks!</p>
		  </div>
        <ul class="popup-social-icons"> 
            <li>
                <a title="Twitter" onclick="_gaq.push(['_trackEvent', 'Popup', 'ExternalForward', 'Twitter']);" href="https://twitter.com/UNLEASHgroup" target="_blank"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a title="LinkedIn" onclick="_gaq.push(['_trackEvent', 'Popup', 'ExternalForward', 'Linkedin']);" href="https://www.linkedin.com/company/1484407/" target="_blank"><i class="fa fa-linkedin"></i></a>
            </li>
            <li>
                <a title="Facebook" onclick="_gaq.push(['_trackEvent', 'Popup', 'ExternalForward', 'Facebook']);" href="https://www.facebook.com/unleashgroup/" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
                <a title="Youtube" onclick="_gaq.push(['_trackEvent', 'Popup', 'ExternalForward', 'Youtube']);" href="https://www.youtube.com/user/hrneurope/" target="_blank"><i class="fa fa-youtube-play"></i></a>
            </li>
        </ul>		  
		  <div class="modal-body">

		  </div>
		</div>
	</div>
	
@endsection

@section('footerscripts')
<script type="text/javascript">
	if (window.location.href.indexOf('#thankyoupress') != -1) {
           $('#thankyoupress').css("display", "flex")
   }
</script>
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
