@extends('london.main')

@section('meta')
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/london/tickets_old.css') }}">
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
                <span>/</span> SUPER SAVER <span>/</span></li>
            <li>EARLY BIRD <span class="TimeLineActive">/</span></li>
            <li class="TimeLineActive">REGULAR <div  id="UntilSummer"> <span class="SummerSaverUntil">UNTIL</span> <br class="BRDesktop"> <span class="SummerSaverDate">FEB 28</span></div> <span>/</span></li>
            <li>LATE <span>/</span></li>
            <li>ONSITE REGISTRATION</li>
        </ul>
    </div>
 </div>
</section>

<section id="TicketBoxes">
    <div id="TicketContainer">
        <div id="BoxContainer">
            <div id="ExpoOnly" class="TicketBox IsoBox SummerSaver TicketThree" data-category="SummerSaver">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 id="ticket-type" class="TicketHeadline">EXPO ONLY</h2>
            <h2 class="TicketPrice">&pound;299</h2>
            <h3 class="TicketDeadline">Until February 28.</h3>
        </div>
    </div>
        <div class="BoxInnerConent">
            
            <h3>Access to Exhibition Floor</h3>
            <ul class="BenefitUL">
             <li>+100 industry leading vendors</li>
             <li>+50 of the hottest HR startups</li>
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
            </ul> 
       </div>
  <a href="https://unleash.swoogo.com/unleashlondon/register?reg_type_id=19544" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div>

  <div class="TicketBox PopularTicketBox IsoBox SummerSaver TicketOne" data-category="SummerSaver">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner PopularHeader">
            <h2 class="TicketHeadline">REGULAR</h2>
            <h2 class="TicketPrice">&pound;1795</h2>
            <h3 class="TicketDeadline">UNTIL February 28.</h3>
            <h4 id="hide" class="TicketSmallText">.</h4>
        </div>
    </div>
        <div class="BoxInnerConent">
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
   <a href="https://unleash.swoogo.com/unleashlondon/register?reg_type_id=19040" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div>
  
  

    <div id="GovSector" class="TicketBox IsoBox SummerSaver TicketThree" data-category="SummerSaver">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">PUBLIC &amp; GOVERNMENTAL SECTOR</h2>
            <h2 class="TicketPrice">&pound;1495</h2>
            <h4 class="TicketSmallText">Save &pound;300 off Regular ticket price</h4>
            <h3 class="TicketDeadline">UNTIL MARCH 31.</h3>
        </div>
    </div>
        <div class="BoxInnerConent">
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
   <a href="https://unleash.swoogo.com/unleashlondon/register?reg_type_id=19591" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div>


    <div id="Discount" class="TicketBox IsoBox SummerSaver TicketFour" data-category="SummerSaver">
    <div class="TicketBoxHeader" >
        <div class="TicketBoxHeaderInner" id="Standard">
            <h2 class="TicketHeadline">STANDARD CONFERENCE &amp; EXPO</h2>
            <h2 class="TicketPrice">&pound;1795</h2>
            <h3 class="TicketDeadline">UNTIL FEBRUARY 28.</h3>
            <h4 class="TicketSmallText" style="margin-bottom:10px">Do you have a promo code?</h4>
            <h3 class="TicketDeadline"><input type="text" class="DiscountInput" id="DiscountField" placeholder="Type it here"></h3>
        </div>
    </div>
        <div class="BoxInnerConent">
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
   <button id="RegisterDiscount" class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button>
  </div>

  <!-- SUMMER SAVER END -->


  <!-- GROUP TICKETS -->
  <div class="TicketBox IsoBox Group TicketFour" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">A'LACARTE</h2>

            <p class="AlaCarteText">To gain access to an exclusive and multi-dimensional conference experience, bring your leadership figures with you and enjoy the benefits of a tailor-made package designed to ensure you make the best of your team's away days.</p>

        </div>
    </div>
        <div class="BoxInnerConent">

       </div>
   <button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover popup" data-popupdata="contact">CONTACT US</button>
  </div>
  
 <!--  
  <div class="PopularTicketBox IsoBox Group TicketTwo" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner PopularHeader">
            <h2 class="TicketHeadline">TEAM 5 OR MORE</h2>
            <h2 class="TicketPrice">&pound;1046</h2>
            <h4 class="pTicket">per ticket</h4>
         
            <h4 id="hide" class="TicketSmallText">.</h4>
        </div>
    </div>
        <div class="BoxInnerConent">
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
<a href="https://unleash.swoogo.com/unleashlondon/register?reg_type_id=19040" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div>
  <div class="TicketBox IsoBox Group TicketOne mobilemargin-up" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">TEAM 8 OR MORE</h2>
            <h2 class="TicketPrice">&pound;976</h2>
            <h4 class="pTicket">per ticket</h4>
            
        </div>
    </div>
        <div class="BoxInnerConent">
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
<a href="https://unleash.swoogo.com/unleashlondon/register?reg_type_id=19040" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div>

    <div class="TicketBox IsoBox Group TicketThree mobilemargin-up" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">TEAM 12 OR MORE</h2>
            <h2 class="TicketPrice">&pound;906</h2>
            <h4 class="pTicket">per ticket</h4>
           

        </div>
    </div>
        <div class="BoxInnerConent">
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
<a href="https://unleash.swoogo.com/unleashlondon/register?reg_type_id=19040" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div> -->

  <!-- GROUP TICKETS END -->

  <!-- INVESTORS -->
      <div class="TicketBox IsoBox Investor TicketFour mobilemargin-up" data-category="Investor">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">INVESTOR/VC</h2>
            <h2 class="TicketPrice">&pound;795</h2>
            <h4 class="TicketSmallText"></h4>
            <h3 class="TicketDeadline">Until February 28.</h3>
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
   <a href="https://unleash.swoogo.com/unleashlondon/register?reg_type_id=20519" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div>
  <!-- INVESTORS END -->

  <!-- STARTUP -->
      <div class="TicketBox IsoBox Startup TicketFour mobilemargin-up" data-category="Startup">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">STARTUP</h2>
            <h2 class="TicketPrice">&pound;1095</h2>
            <h4 class="TicketSmallText"></h4>
            <h3 class="TicketDeadline">Until February 28.</h3>
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
   <a href="https://unleash.swoogo.com/unleashlondon/register?reg_type_id=20513" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  <!-- STARTUP END -->



 </div>
 </div>

     <div id="ButtonContainer">
     <button id="SeeAllButton" onclick="changeText()" class="topaz-btn">SEE BENEFITS</button>
    </div>   
</section>

<div id="expo" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Expo Only</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29320pi_145751_29320" id="145751_29320pi_145751_29320" size="30" maxlength="255" type="text" value="Expo only">
                    <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
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

    <div id="earlybird" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>NEW YEAR'S SPECIAL</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29320pi_145751_29320" id="145751_29320pi_145751_29320" size="30" maxlength="255" type="text" value="New year's speacial">
                    <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
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

    <div id="gov" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>PUBLIC &amp; GOVERNMENTAL SECTOR</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29320pi_145751_29320" id="145751_29320pi_145751_29320" size="30" maxlength="255" type="text" value="Governmental">
                    <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
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
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                <input placeholder="Promo Code" class="form-input" name="145751_28518pi_145751_28518" id="145751_28518pi_145751_28518" size="30" maxlength="255" type="text">
        
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29320pi_145751_29320" id="145751_29320pi_145751_29320" size="30" maxlength="255" type="text" value="One-day">
                    <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
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
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29320pi_145751_29320" id="145751_29320pi_145751_29320" size="30" maxlength="255" type="text" value="Alacarte">
                    <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
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
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29320pi_145751_29320" id="145751_29320pi_145751_29320" size="30" maxlength="255" type="text" value="Team-8">
                    <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
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

    <div id="team-13" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Team 5 or more</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29320pi_145751_29320" id="145751_29320pi_145751_29320" size="30" maxlength="255" type="text" value="Team-5">
                    <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
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

    <div id="team-18" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Team 12 or more</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29320pi_145751_29320" id="145751_29320pi_145751_29320" size="30" maxlength="255" type="text" value="Team-12">
                    <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
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

    <div id="investor" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Investor/VC</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29320pi_145751_29320" id="145751_29320pi_145751_29320" size="30" maxlength="255" type="text" value="Investor">
                    <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
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
    <div id="startup" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Startup</h3>
            <p>Thank you for your interest in our event.
Please fill in all the fields below, and we'll get back to you soon.</p>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/145751/2017-12-12/lkgdp" class="form">
                <input required="required" placeholder="Full Name" class="form-input" name="Input1" id="FullName" size="30" maxlength="40" type="text">
                <input required="required" placeholder="Business Email" class="form-input" name="145751_28466pi_145751_28466" id="145751_28466pi_145751_28466" size="30" maxlength="255" type="email">
                <input required="required" placeholder="Mobile Phone" class="form-input" name="145751_28468pi_145751_28468" id="145751_28468pi_145751_28468" size="30" maxlength="40" type="tel">
                <input required="required" placeholder="Organisation Name" class="form-input" name="145751_28464pi_145751_28464" id="145751_28464pi_145751_28464" size="30" maxlength="255" type="text">
                

            <p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
                    <input placeholder="First name" data-field="fname" value="." class="form-input" name="145751_28460pi_145751_28460" id="145751_28460pi_145751_28460" size="30" maxlength="255" type="text">
                    <input placeholder="Last name" data-field="lname" class="form-input" name="145751_28462pi_145751_28462" id="145751_28462pi_145751_28462" size="30" maxlength="255" type="text">
                    <input placeholder="Ticket Type" data-field="type" class="form-input" name="145751_29320pi_145751_29320" id="145751_29320pi_145751_29320" size="30" maxlength="255" type="text" value="Startup">
                    <input placeholder="Robot Source" type="text" name="145751_28472pi_145751_28472" id="145751_28472pi_145751_28472" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
                    <input placeholder="Page Source" type="text" name="145751_28474pi_145751_28474" id="145751_28474pi_145751_28474" value="London2018-Tickets" class="text" size="30" maxlength="255"  />
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

@endsection

@section('footerscripts')

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
/*
  if ( filterValue == ".SummerSaver"){
     $('#TimelineOther').fadeOut(100, function(){
        $('#TimelineSingle').fadeIn(100);
     });
        

  } else {
    $('#TimelineSingle').fadeOut(100, function(){
         $('#TimelineOther').fadeIn(100);
    });    

  }*/
});

$(document).ready(function() {
    setTimeout(function(){ 
        $('.IsoBox').css('visibility','visible');
    }, 50);
});

</script>

<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script>
$("#RegisterDiscount").click(function(a){a.preventDefault(a);a=$("#DiscountField").val();void 0!==a&&""!=a?window.open("https://unleash.swoogo.com/unleashlondon/register?code="+a,"_blank"):window.open("https://unleash.swoogo.com/unleashlondon/","_blank")});
$("#RegisterDiscount .TicketButton").click(function(t){t.preventDefault(t);var e=$(this).data("discount");"undefined"!=typeof e&&""!=e&&window.open("https://unleash.swoogo.com/unleashlondon/register?code="+e,"_blank")});
</script>
@endsection
