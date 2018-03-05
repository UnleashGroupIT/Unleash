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
            <li>EARLY BIRD <span >/</span></li>
            <li>REGULAR  <span class="TimeLineActive">/</span></li>
            <li class="TimeLineActive">LATE <div  id="UntilSummer"> <span class="SummerSaverUntil">UNTIL</span> <br class="BRDesktop"> <span class="SummerSaverDate">MARCH 18. </span></div><span> /</span></li>
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
            <h2 class="TicketPrice"><span style="font-size:75%">&pound;</span>499</h2>
            <h3 class="TicketDeadline">Until March 18.</h3>
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
            <h2 class="TicketPrice"><span style="font-size:75%">&pound;</span>1695</h2>
            <h3 class="TicketDeadline">Until March 18.</h3>
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
   <a href="https://unleash.swoogo.com/unleashlondon/application?reg_type_id=25155" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div>
  
  

    <div id="GovSector" class="TicketBox IsoBox SummerSaver TicketThree" data-category="SummerSaver">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">PUBLIC &amp; GOVERNMENTAL SECTOR</h2>
            <h2 class="TicketPrice"><span style="font-size:75%">&pound;</span>1195</h2>
            <!--<h4 class="TicketSmallText">Save <span style="font-size:75%">&pound;</span>300 off Regular ticket price</h4>-->
			<h4 class="TicketSmallText">&nbsp;</h4>
            <h3 class="TicketDeadline">Until March 18.</h3>
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
            <h2 class="TicketPrice"><span style="font-size:75%">&pound;</span>1695</h2>
            <h3 class="TicketDeadline">UNTIL MARCH 18.</h3>
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
  
 
  <div class="PopularTicketBox IsoBox Group TicketTwo" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner PopularHeader">
            <h2 class="TicketHeadline">TEAM 5 OR MORE</h2>
            <h2 class="TicketPrice"><span style="font-size:75%">&pound;</span>1046</h2>
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
<a href="https://unleash.swoogo.com/unleashlondon/register?reg_type_id=22981" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div>
  <div class="TicketBox IsoBox Group TicketOne mobilemargin-up" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">TEAM 8 OR MORE</h2>
            <h2 class="TicketPrice"><span style="font-size:75%">&pound;</span>976</h2>
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
<a href="https://unleash.swoogo.com/unleashlondon/application?reg_type_id=22982" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div>

    <div class="TicketBox IsoBox Group TicketThree mobilemargin-up" data-category="Group">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">TEAM 12 OR MORE</h2>
            <h2 class="TicketPrice"><span style="font-size:75%">&pound;</span>906</h2>
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
<a href="https://unleash.swoogo.com/unleashlondon/application?reg_type_id=22984" target="_blank"><button class="TicketButton AmsterdamButtonInverted AmsterdamButtonInvertedHover">BOOK NOW</button></a>
  </div> 
  <!-- GROUP TICKETS END -->

  <!-- INVESTORS -->
      <div class="TicketBox IsoBox Investor TicketFour mobilemargin-up" data-category="Investor">
    <div class="TicketBoxHeader">
        <div class="TicketBoxHeaderInner">
            <h2 class="TicketHeadline">INVESTOR/VC</h2>
            <h2 class="TicketPrice"><span style="font-size:75%">&pound;</span>795</h2>
            <h4 class="TicketSmallText"></h4>
            <h3 class="TicketDeadline">Until March 18.</h3>
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
            <h2 class="TicketPrice"><span style="font-size:75%">&pound;</span>1095</h2>
            <h4 class="TicketSmallText"></h4>
            <h3 class="TicketDeadline">Until March 18.</h3>
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
