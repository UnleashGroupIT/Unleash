@extends('london.main')

@section('title', 'Tickets')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/london/tickets_old.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/london/flipclock.css') }}">	
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')

	   <!-- Ticket promo code -->
        <section id="ticket-promo-code" class="ticket-promo-code">
            <h3 class="ticket-promo-code-headline">Ticket promo code</h3>

            <form accept-charset="UTF-8" class="form" id="event-bright-form">
                <input id="DiscountField" type="text" name="code" id="code" class="ticket-promo-code-input" size="30" maxlength="40" placeholder="Enter code here" required="required">
                <input id="RegisterDiscount" type="submit" value="REGISTER NOW" class="green-btn">
            </form>

        </section>
        <!-- END Ticket promo code -->		
		
<div style="width:100%; text-align:left; margin:125px 0px 0 0; "><iframe src="//eventbrite.co.uk/tickets-external?eid=34137650632&ref=etckt" frameborder="0" height="1150" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe><div style="font-family:Helvetica, Arial; font-size:12px; padding:10px 0 5px; margin:2px; width:100%; text-align:left;" ></div></div>



@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script>
$("#RegisterDiscount").click(function(t){t.preventDefault(t);var e=$("#DiscountField").val();"undefined"!=typeof e&&""!=e&&window.open("https://www.eventbrite.com/e/hr-tech-world-london-tickets-34137650632?discount="+e+"#tickets","_blank")}),$(".TicketButton").click(function(t){t.preventDefault(t);var e=$(this).data("discount");"undefined"!=typeof e&&""!=e&&window.open("https://www.eventbrite.com/e/hr-tech-world-london-tickets-34137650632?discount="+e+"#tickets","_blank")});
</script>
@endsection
