@extends('lasvegas.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018.">
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH America - Tickets"/>
        <meta property="og:title" content="UNLEASH America - Tickets"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/america/tickets">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH America - Tickets">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}">
@endsection

@section('title', 'America - Tickets')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/lasvegas/tickets_old.css') }}">
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

<section id="TicketNavigation">
    <div id="TNInnerContainer">
        <ul>
            <li class="NavMenuLi NavActive" data-filter=".SummerSaver">SINGLE ATTENDEE</li>
            <li class="NavMenuLi" data-filter=".Group">GROUP TICKETS</li>
            <li class="NavMenuLi" data-filter=".Investor">INVESTORS</li>
            <li class="NavMenuLi" data-filter=".Startup">STARTUPS</li>
        </ul>
    </div>
</section>

<section id="TicketTimeline">
 <div id="TimelineSingle">
    <div class="TimelineContainer">
        <ul id="TimelineList">
            <li>
                <span>/</span>SUPER SAVER<span class="SlashClassActive">/</span></li>
            <li class="TimeLineActive">EARLY BIRD<div  id="UntilSummer"> <span class="SummerSaverUntil">UNTIL</span> <br class="BRDesktop"> <span class="SummerSaverDate">MARCH 21</span></div><span class="SlashClassActive">/</span></li>
            <li>REGULAR <span>/</span></li>
            <li>LATE <span>/</span></li>
            <li>ONSITE REGISTRATION</li>
        </ul>
    </div>
 </div>
</section>

<section id="TicketBoxes">
    <div id="TicketContainer">
        <div id="BoxContainer">
  <div class="TicketBox PopularTicketBox IsoBox SummerSaver TicketOne" data-category="SummerSaver">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner PopularHeader">
            <h2 class="TicketHeadline">EARLY BIRD</h2>
            <h2 class="TicketPrice">$1,349</h2>
            <h3 class="TicketDeadline">UNTIL MARCH 21.</h3>
            <h4 class="TicketSmallText">Save $146</h4>
            <h4 id="hide" class="TicketSmallText">.</h4>
        </div>
    </div>
        <div class="BoxInnerConent">
						<h3>Access to Discounted <br> Hotel Room Rate</h3>
							<ul class="BenefitUL">
							<li>Book your room at $125 / night at Aria Resort and Casino <br>in Las Vegas</li>
							</ul>

            <h3>Full Access to Exhibition Floor</h3>
            <ul class="BenefitUL">
             <li>+100 industry leading vendors</li>
             <li>+50 of the hottest HR startups</li>
             <li>Product demos</li>
             <li>Targeted breakout sessions</li>
             <li>Access to all stages</li>
            </ul>

            <h3>Food &amp; Beverage</h3>
            <ul class="BenefitUL">
             <li>Morning coffee and snacks</li>
             <li>Full course lunch </li>
             <li>Late afternoon refreshments</li>
            </ul>

            <h3>Social Experience</h3>
            <ul class="BenefitUL">
             <li>Award winning mobile app</li>
             <li>Networking with industry thought leaders</li>
             <li>Cocktail party</li>
            </ul>

       </div>
   <button class="TicketButton AmericasButtonInverted AmericasButtonInvertedHover popup" data-popupdata="supersaver">BOOK NOW</button>
  </div>



    <div id="GovSector" class="TicketBox IsoBox SummerSaver TicketThree" data-category="SummerSaver">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">ONE DAY TICKET: DAY 1, DAY 2</h2>
            <h2 class="TicketPrice">$795</h2>
            <h3 class="TicketDeadline">UNTIL APRIL 30.</h3>
        </div>
    </div>
        <div class="BoxInnerConent">
					<h3>Access to Discounted <br> Hotel Room Rate</h3>
						<ul class="BenefitUL">
						<li>Book your room at $150 / night at Aria Resort and Casino <br> in Las Vegas</li>
						</ul>

            <h3>Full Access to Exhibition Floor</h3>
            <ul class="BenefitUL">
             <li>+100 industry leading vendors</li>
             <li>+50 of the hottest HR startups</li>
             <li>Product demos</li>
             <li>Targeted breakout sessions</li>
             <li>Access to all stages</li>
            </ul>

            <h3>Food &amp; Beverage</h3>
            <ul class="BenefitUL">
             <li>Morning coffee and snacks</li>
             <li>Full course lunch </li>
             <li>Late afternoon refreshments</li>
            </ul>

            <h3>Social Experience</h3>
            <ul class="BenefitUL">
             <li>Award winning mobile app</li>
             <li>Networking with industry thought leaders</li>
             <li>Cocktail party</li>
            </ul>

       </div>
   <button class="TicketButton AmericasButtonInverted AmericasButtonInvertedHover popup" data-popupdata="oneday">BOOK NOW</button>
  </div>
  
    <div class="TicketBox IsoBox Group TicketFour" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">A'LACARTE</h2>

            <p class="AlaCarteText">To gain access to an exclusive and multi-dimensional conference experience, bring your leadership figures with you and enjoy the benefits of a tailor-made package designed to ensure you make the best of your team's away days.</p>

        </div>
    </div>
        <div class="BoxInnerConent">

       </div>
   <button class="TicketButton AmericasButtonInverted AmericasButtonInvertedHover popup" data-popupdata="alacarte">CONTACT US</button>
  </div>

  <div class="TicketBox IsoBox Group TicketThree mobilemargin-up" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">TEAM 5 OR MORE</h2>
            <h2 class="TicketPrice">$1,121</h2>
            <h4 class="pTicket">per ticket</h4>
            <h4 class="TicketSmallText">Save 25%</h4>

        </div>
    </div>
        <div class="BoxInnerConent">
					<h3>Access to Discounted Hotel Room Rate</h3>
						<ul class="BenefitUL">
							<li>Book your room at $150 / night at Aria Resort and Casino <br> in Las Vegas</li>
						</ul>

            <h3>Full Access to Exhibition Floor</h3>
            <ul class="BenefitUL">
             <li>+100 industry leading vendors</li>
             <li>+50 of the hottest HR startups</li>
             <li>Product demos</li>
             <li>Targeted breakout sessions</li>
             <li>Access to all stages</li>
            </ul>

            <h3>Food &amp; Beverage</h3>
            <ul class="BenefitUL">
             <li>Morning coffee and snacks</li>
             <li>Full course lunch</li>
             <li>Late afternoon refreshments</li>
            </ul>

            <h3>Social Experience</h3>
            <ul class="BenefitUL">
             <li>Award winning mobile app</li>
             <li>Networking with industry thought leaders</li>
             <li>Cocktail party</li>
             <li>Key account manager support</li>
            </ul>

       </div>
   <button class="TicketButton AmericasButtonInverted AmericasButtonInvertedHover popup" data-popupdata="team-5">BOOK NOW</button>
  </div>
  <div class="TicketBox IsoBox Group TicketOne mobilemargin-up" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">TEAM 8 OR MORE</h2>
            <h2 class="TicketPrice">$1,046</h2>
            <h4 class="pTicket">per ticket</h4>
            <h4 class="TicketSmallText">Save 30%</h4>
        </div>
    </div>
        <div class="BoxInnerConent">
					<h3>Access to Discounted Hotel Room Rate</h3>
						<ul class="BenefitUL">
						<li>Book your room at $150 / night at Aria Resort and Casino <br> in Las Vegas</li>
						</ul>

            <h3>Full Access to Exhibition Floor</h3>
            <ul class="BenefitUL">
             <li>+100 industry leading vendors</li>
             <li>+50 of the hottest HR startups</li>
             <li>Product demos</li>
             <li>Targeted breakout sessions</li>
             <li>Access to all stages</li>
            </ul>

            <h3>Food &amp; Beverage</h3>
            <ul class="BenefitUL">
             <li>Morning coffee and snacks</li>
             <li>Full course lunch</li>
             <li>Late afternoon refreshments</li>
            </ul>

            <h3>Social Experience</h3>
            <ul class="BenefitUL">
             <li>Award winning mobile app</li>
             <li>Networking with industry thought leaders</li>
             <li>Cocktail party</li>
             <li>Key account manager support</li>
            </ul>

       </div>
   <button class="TicketButton AmericasButtonInverted AmericasButtonInvertedHover popup" data-popupdata="team-8">BOOK NOW</button>
  </div>

<div class="PopularTicketBox IsoBox Group TicketTwo" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner PopularHeader">
            <h2 class="TicketHeadline">TEAM 12 OR MORE</h2>
            <h2 class="TicketPrice">$971</h2>
            <h4 class="pTicket">per ticket</h4>
            <h4 id="mp" class="TicketSmallText">Save 35%</h4>
            <h4 id="hide" class="TicketSmallText">.</h4>
        </div>
    </div>
        <div class="BoxInnerConent">
					<h3>Access to Discounted Hotel Room Rate</h3>
						<ul class="BenefitUL">
							<li>Book your room at $150 / night at Aria Resort and Casino <br> in Las Vegas</li>
						</ul>

            <h3>Full Access to Exhibition Floor</h3>
            <ul class="BenefitUL">
             <li>+100 industry leading vendors</li>
             <li>+50 of the hottest HR startups</li>
             <li>Product demos</li>
             <li>Targeted breakout sessions</li>
             <li>Access to all stages</li>
            </ul>

            <h3>Food &amp; Beverage</h3>
            <ul class="BenefitUL">
             <li>Morning coffee and snacks</li>
             <li>Full course lunch</li>
             <li>Late afternoon refreshments</li>
            </ul>

            <h3>Social Experience</h3>
            <ul class="BenefitUL">
             <li>Award winning mobile app</li>
             <li>Networking with industry thought leaders</li>
             <li>Cocktail party</li>
             <li>Key account manager support</li>
            </ul>

       </div>
   <button class="TicketButton AmericasButtonInverted AmericasButtonInvertedHover popup" data-popupdata="team-12">BOOK NOW</button>
  </div>
    <!-- GROUP TICKETS END -->
    <!-- INVESTORS -->
      <div class="TicketBox IsoBox Investor TicketFour mobilemargin-up" data-category="Investor">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">INVESTOR/VC</h2>
            <h2 class="TicketPrice">$695</h2>
            <h4 class="TicketSmallText">Save $100</h4>
            <h3 class="TicketDeadline">Until March 31.</h3>
        </div>
    </div>
        <div class="BoxInnerConent">
            <h3>Full Access to Exhibition Floor</h3>
            <ul class="BenefitUL">
             <li>+100 industry leading vendors</li>
             <li>+50 of the hottest HR startups</li>
             <li>Startup competition</li>
             <li>Startup Exhibition</li>
             <li>10 breakout sessions</li>
             <li>Meet &amp; greet with investor/VC delegates</li>
             <li>Main stage and two featured stages</li>
            </ul>

            <h3>Food &amp; Beverage</h3>
            <ul class="BenefitUL">
             <li>Morning coffee and snacks</li>
             <li>Full course lunch</li>
             <li>Late afternoon refreshments</li>
            </ul>

            <h3>Social Experience</h3>
            <ul class="BenefitUL">
             <li>Award winning mobile app</li>
             <li>Cocktail party</li>
             <li>Dedicated networking lounges</li>
            </ul>
       </div>
   <button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover popup" data-popupdata="investor">BOOK NOW</button>
  </div>
  <!-- INVESTORS END -->

  <!-- STARTUP -->
      <div class="TicketBox IsoBox Startup TicketFour mobilemargin-up" data-category="Startup">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">STARTUP</h2>
            <h2 class="TicketPrice">$995</h2>
            <h4 class="TicketSmallText">Save $100</h4>
            <h3 class="TicketDeadline">Until March 31.</h3>
        </div>
    </div>


        <div class="BoxInnerConent">
            <h3>Full Access to Exhibition Floor</h3>
            <ul class="BenefitUL">
             <li>+100 industry leading vendors</li>
             <li>+50 of the hottest HR startups</li>
             <li>Startup competition</li>
             <li>Startup Exhibition</li>
             <li>10 breakout sessions</li>
             <li>Meet &amp; greet with investor/VC delegates</li>
             <li>Main stage and two featured stages</li>
            </ul>

            <h3>Food &amp; Beverage</h3>
            <ul class="BenefitUL">
             <li>Morning coffee and snacks</li>
             <li>Full course lunch</li>
             <li>Late afternoon refreshments</li>
            </ul>

            <h3>Social Experience</h3>
            <ul class="BenefitUL">
             <li>Award winning mobile app</li>
             <li>Cocktail party</li>
             <li>Dedicated networking lounges</li>
            </ul>
       </div>
   <button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover popup" data-popupdata="startup">BOOK NOW</button>
  <!-- STARTUP END -->

 </div>
 </div>

     <div id="ButtonContainer">
     <button id="SeeAllButton" onclick="changeText()" class="red-btn">SEE BENEFITS</button>
    </div>
</section>

<div id="supersaver" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Early Bird</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-13/lkkft" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28508pi_145751_28508" id="145751_28508pi_145751_28508" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28510pi_145751_28510" id="145751_28510pi_145751_28510" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organization Name" class="form-input" name="145751_28506pi_145751_28506" id="145751_28506pi_145751_28506" size="30" maxlength="255" type="text">


            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28502pi_145751_28502" id="145751_28502pi_145751_28502" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28504pi_145751_28504" id="145751_28504pi_145751_28504" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29318pi_145751_29318" id="145751_29318pi_145751_29318" size="30" maxlength="255" type="text" value="Early Bird">
                    <input placeholder="Robot Source" type="text" name="145751_28514pi_145751_28514" id="145751_28514pi_145751_28514" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28516pi_145751_28516" id="145751_28516pi_145751_28516" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                </p>
                <div class="popup-paragraph popup-policy ">
                    <div class="popup-paragraph-small">By submitting data to us you give your consent that data you submit may be processed for the purposes described in the <a href="terms" target="_blank">privacy policy</a>.</div>
                    <div class="popup-accept"><input required="required" id="PolicyAccepted" type="checkbox"><span class="popup-accept-button">Accept</span></div>
                </div>
                <input name="submit" value="submit" type="submit" class="blue-btn TicketSubmit">
            </form>
          </div>
        </div>
    </div>

    <div id="oneday" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>One day Ticket: Day1, Day2</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-13/lkkft" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28508pi_145751_28508" id="145751_28508pi_145751_28508" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28510pi_145751_28510" id="145751_28510pi_145751_28510" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organization Name" class="form-input" name="145751_28506pi_145751_28506" id="145751_28506pi_145751_28506" size="30" maxlength="255" type="text">


            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28502pi_145751_28502" id="145751_28502pi_145751_28502" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28504pi_145751_28504" id="145751_28504pi_145751_28504" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29318pi_145751_29318" id="145751_29318pi_145751_29318" size="30" maxlength="255" type="text" value="One day">
                    <input placeholder="Robot Source" type="text" name="145751_28514pi_145751_28514" id="145751_28514pi_145751_28514" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28516pi_145751_28516" id="145751_28516pi_145751_28516" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                </p>
                <div class="popup-paragraph popup-policy ">
                    <div class="popup-paragraph-small">By submitting data to us you give your consent that data you submit may be processed for the purposes described in the <a href="terms" target="_blank">privacy policy</a>.</div>
                    <div class="popup-accept"><input required="required" id="PolicyAccepted" type="checkbox"><span class="popup-accept-button">Accept</span></div>
                </div>
                <input name="submit" value="submit" type="submit" class="blue-btn TicketSubmit">
            </form>
          </div>
        </div>
    </div>
	
	
    <div id="alacarte" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>A'lacarte</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-13/lkkft" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28508pi_145751_28508" id="145751_28508pi_145751_28508" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28510pi_145751_28510" id="145751_28510pi_145751_28510" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organization Name" class="form-input" name="145751_28506pi_145751_28506" id="145751_28506pi_145751_28506" size="30" maxlength="255" type="text">


            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28502pi_145751_28502" id="145751_28502pi_145751_28502" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28504pi_145751_28504" id="145751_28504pi_145751_28504" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29318pi_145751_29318" id="145751_29318pi_145751_29318" size="30" maxlength="255" type="text" value="Alacarte">
                    <input placeholder="Robot Source" type="text" name="145751_28514pi_145751_28514" id="145751_28514pi_145751_28514" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28516pi_145751_28516" id="145751_28516pi_145751_28516" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                </p>
                <div class="popup-paragraph popup-policy ">
                    <div class="popup-paragraph-small">By submitting data to us you give your consent that data you submit may be processed for the purposes described in the <a href="terms" target="_blank">privacy policy</a>.</div>
                    <div class="popup-accept"><input required="required" id="PolicyAccepted" type="checkbox"><span class="popup-accept-button">Accept</span></div>
                </div>
                <input name="submit" value="submit" type="submit" class="blue-btn TicketSubmit">
            </form>
          </div>
        </div>
    </div>	

    <div id="team-5" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Team 5 or more</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-13/lkkft" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28508pi_145751_28508" id="145751_28508pi_145751_28508" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28510pi_145751_28510" id="145751_28510pi_145751_28510" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organization Name" class="form-input" name="145751_28506pi_145751_28506" id="145751_28506pi_145751_28506" size="30" maxlength="255" type="text">


            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28502pi_145751_28502" id="145751_28502pi_145751_28502" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28504pi_145751_28504" id="145751_28504pi_145751_28504" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29318pi_145751_29318" id="145751_29318pi_145751_29318" size="30" maxlength="255" type="text" value="Team-5">
                    <input placeholder="Robot Source" type="text" name="145751_28514pi_145751_28514" id="145751_28514pi_145751_28514" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28516pi_145751_28516" id="145751_28516pi_145751_28516" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                </p>
                <div class="popup-paragraph popup-policy ">
                    <div class="popup-paragraph-small">By submitting data to us you give your consent that data you submit may be processed for the purposes described in the <a href="terms" target="_blank">privacy policy</a>.</div>
                    <div class="popup-accept"><input required="required" id="PolicyAccepted" type="checkbox"><span class="popup-accept-button">Accept</span></div>
                </div>
                <input name="submit" value="submit" type="submit" class="blue-btn TicketSubmit">
            </form>
          </div>
        </div>
    </div>

    <div id="team-8" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Team 8 or more</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-13/lkkft" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28508pi_145751_28508" id="145751_28508pi_145751_28508" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28510pi_145751_28510" id="145751_28510pi_145751_28510" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organization Name" class="form-input" name="145751_28506pi_145751_28506" id="145751_28506pi_145751_28506" size="30" maxlength="255" type="text">


            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28502pi_145751_28502" id="145751_28502pi_145751_28502" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28504pi_145751_28504" id="145751_28504pi_145751_28504" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29318pi_145751_29318" id="145751_29318pi_145751_29318" size="30" maxlength="255" type="text" value="Team-8">
                    <input placeholder="Robot Source" type="text" name="145751_28514pi_145751_28514" id="145751_28514pi_145751_28514" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28516pi_145751_28516" id="145751_28516pi_145751_28516" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                </p>
                <div class="popup-paragraph popup-policy ">
                    <div class="popup-paragraph-small">By submitting data to us you give your consent that data you submit may be processed for the purposes described in the <a href="terms" target="_blank">privacy policy</a>.</div>
                    <div class="popup-accept"><input required="required" id="PolicyAccepted" type="checkbox"><span class="popup-accept-button">Accept</span></div>
                </div>
                <input name="submit" value="submit" type="submit" class="blue-btn TicketSubmit">
            </form>
          </div>
        </div>
    </div>

    <div id="team-12" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Team 12 or more</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-13/lkkft" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28508pi_145751_28508" id="145751_28508pi_145751_28508" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28510pi_145751_28510" id="145751_28510pi_145751_28510" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organization Name" class="form-input" name="145751_28506pi_145751_28506" id="145751_28506pi_145751_28506" size="30" maxlength="255" type="text">


            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28502pi_145751_28502" id="145751_28502pi_145751_28502" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28504pi_145751_28504" id="145751_28504pi_145751_28504" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29318pi_145751_29318" id="145751_29318pi_145751_29318" size="30" maxlength="255" type="text" value="Team-12">
                    <input placeholder="Robot Source" type="text" name="145751_28514pi_145751_28514" id="145751_28514pi_145751_28514" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28516pi_145751_28516" id="145751_28516pi_145751_28516" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                </p>
                <div class="popup-paragraph popup-policy ">
                    <div class="popup-paragraph-small">By submitting data to us you give your consent that data you submit may be processed for the purposes described in the <a href="terms" target="_blank">privacy policy</a>.</div>
                    <div class="popup-accept"><input required="required" id="PolicyAccepted" type="checkbox"><span class="popup-accept-button">Accept</span></div>
                </div>
                <input name="submit" value="submit" type="submit" class="blue-btn TicketSubmit">
            </form>
          </div>
        </div>
    </div>

    <div id="investor" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>INVESTOR/VC</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-13/lkkft" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28508pi_145751_28508" id="145751_28508pi_145751_28508" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28510pi_145751_28510" id="145751_28510pi_145751_28510" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organization Name" class="form-input" name="145751_28506pi_145751_28506" id="145751_28506pi_145751_28506" size="30" maxlength="255" type="text">


            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28502pi_145751_28502" id="145751_28502pi_145751_28502" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28504pi_145751_28504" id="145751_28504pi_145751_28504" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29318pi_145751_29318" id="145751_29318pi_145751_29318" size="30" maxlength="255" type="text" value="Investor-VC">
                    <input placeholder="Robot Source" type="text" name="145751_28514pi_145751_28514" id="145751_28514pi_145751_28514" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28516pi_145751_28516" id="145751_28516pi_145751_28516" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                </p>
                <div class="popup-paragraph popup-policy ">
                    <div class="popup-paragraph-small">By submitting data to us you give your consent that data you submit may be processed for the purposes described in the <a href="terms" target="_blank">privacy policy</a>.</div>
                    <div class="popup-accept"><input required="required" id="PolicyAccepted" type="checkbox"><span class="popup-accept-button">Accept</span></div>
                </div>
                <input name="submit" value="submit" type="submit" class="blue-btn TicketSubmit">
            </form>
          </div>
        </div>
    </div>

    <div id="startup" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>INVESTOR/VC</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-13/lkkft" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28508pi_145751_28508" id="145751_28508pi_145751_28508" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28510pi_145751_28510" id="145751_28510pi_145751_28510" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organization Name" class="form-input" name="145751_28506pi_145751_28506" id="145751_28506pi_145751_28506" size="30" maxlength="255" type="text">


            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28502pi_145751_28502" id="145751_28502pi_145751_28502" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28504pi_145751_28504" id="145751_28504pi_145751_28504" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29318pi_145751_29318" id="145751_29318pi_145751_29318" size="30" maxlength="255" type="text" value="Startup">
                    <input placeholder="Robot Source" type="text" name="145751_28514pi_145751_28514" id="145751_28514pi_145751_28514" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28516pi_145751_28516" id="145751_28516pi_145751_28516" value="America2018-Tickets" class="text" size="30" maxlength="255"  />
                </p>
                <div class="popup-paragraph popup-policy ">
                    <div class="popup-paragraph-small">By submitting data to us you give your consent that data you submit may be processed for the purposes described in the <a href="terms" target="_blank">privacy policy</a>.</div>
                    <div class="popup-accept"><input required="required" id="PolicyAccepted" type="checkbox"><span class="popup-accept-button">Accept</span></div>
                </div>
                <input name="submit" value="submit" type="submit" class="blue-btn TicketSubmit">
            </form>
          </div>
        </div>
    </div>

@endsection

@section('footerscripts')

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 873672563;
var google_conversion_label = "rChqCJ7M2noQ897MoAM";
var google_remarketing_only = false;
/* ]]> */
$(document).ready(function() {
    $('body').on('click', '.TicketSubmit', function(e) {

		  var gts = document.createElement('script'); gts.type = 'text/javascript'; gts.async = true;
		  gts.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'www.googleadservices.com/pagead/conversion.js';
		  var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(gts, ss);

	});
 });
</script>

<script>
   function changeText(idElement) {
    var element = document.getElementById('SeeAllButton');
    if (element.innerHTML === 'SEE BENEFITS') element.innerHTML = 'CLOSE';
        else {
            element.innerHTML = 'SEE BENEFITS';
        }
    }
</script>


<script>

$('#SeeAllButton').click(function(e) {

     e.preventDefault();

    $('.BoxInnerConent').each(function( key, value ) {

        if ($(this).hasClass('show')) {
            $(this).removeClass('show');
            $(this).parent().removeClass('showp');
            $(this).addClass('hide');
        } else {
          $(this).addClass('show');
          $(this).parent().addClass('showp');
          $(this).removeClass('hide');
          $(this).height('auto');
          $('.BoxInnerConent').css('opacity',1);
        }

        $('#BoxContainer').isotope('layout');

    });
});

</script>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<script>
// init Isotope
var $grid = $('#BoxContainer').isotope({
  itemSelector: '.IsoBox',
  masonry: {
  isFitWidth: true
},
  getSortData: {
    category: '[data-category]'
  },
  filter: '.SummerSaver',
});


// bind filter button click
$('.NavMenuLi').on( 'click', function(e) {

  let filterValue = $(e.target).attr('data-filter');

  // use filterFn if matches value
  $grid.isotope({ filter: filterValue });

  $('.NavMenuLi').removeClass('NavActive');
  $(e.target).addClass('NavActive');

  if ( filterValue == ".SummerSaver"){
     $('#TimelineOther').fadeOut(100, function(){
        $('#TimelineSingle').fadeIn(100);
     });


  } else {
    $('#TimelineSingle').fadeOut(100, function(){
         $('#TimelineOther').fadeIn(100);
    });

  }
});


// bind filter button click
$('.NavIcon').on( 'click', function(e) {

  let filterValue = $(e.target).attr('data-filter');

  // use filterFn if matches value
  $grid.isotope({ filter: filterValue });

  $('.NavMenuLi').removeClass('NavActive');
  $(e.target).parent().addClass('NavActive');

  if ( filterValue == ".SummerSaver"){
     $('#TimelineOther').fadeOut(100, function(){
        $('#TimelineSingle').fadeIn(100);
     });


  } else {
    $('#TimelineSingle').fadeOut(100, function(){
         $('#TimelineOther').fadeIn(100);
    });

  }
});

$(document).ready(function() {
    setTimeout(function(){
        $('.IsoBox').css('visibility','visible');
    }, 50);
});

</script>

<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

@endsection
