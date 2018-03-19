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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/london/tickets_closed.css') }}">
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
        <ul id="TimelineList">
            <li class="hideLi"><span>/</span> SUPER SAVER <span>/</span></li>
            <li class="hideLi">EARLY BIRD <span >/</span></li>
            <li class="hideLi">REGULAR  <span>/</span></li>
            <li class="hideLi">LATE<span class="TimeLineActive"> /</span></li>
            <li class="TimeLineActive">ONSITE REGISTRATION</li>
        </ul>
    </div>
 </div>
 <div class="warming">
     <p>Please be informed that our online registration is now closed as we gear up for UNLEASH London on 20-21 March! For new or additional tickets and any other last-minute changes, kindly contact your respective account manager or send an e-mail to <strong>registration@unleashgroup.io.</strong></p>
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
