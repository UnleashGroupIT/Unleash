@extends('admin.main')
       
@section('title', 'Agenda')


@section('customcss')
   <link href="{{ mix('css/style.css', '/admin') }}" rel="stylesheet">

<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/bootstrap.min.css', '/admin') }}" rel="stylesheet" type="text/css">
  
 
 <link href="{{ mix('css/agenda.css', '/admin') }}" rel="stylesheet" type="text/css">
  <link href="{{ mix('css/common.css', '/admin') }}" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.4.1/dist/instantsearch.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.4.1/dist/instantsearch-theme-algolia.min.css"> 


    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

<style>
.hiddenTab{
	display:none;

} 
.activeTab{
	display:block;
}

.tab{
	transition: all 0.3s;
}
.tab:hover{
	background-color: rgb(175, 201, 40);
	color:#fff !important;
}
#SessionFilterSection, #SessionList{
	display: inline-block;
	text-align: left;

}
#SessionFilterSection{
	vertical-align: top;
}
#SessionContentSectionContainer{
	margin: 0 auto;
	text-align: center;
}
#SearchBarContainer{
	margin: 3vw auto;
text-align: center;
}
.SearchBar{
	background-color: rgba(191, 194, 194, 0.32);
	width: 50%;
	margin: 0 auto;
	text-align: left;
	height: 36px;

}
</style> 

@endsection
@section('content')
<div id="PageContainer">
 <section id="GridSection">
<p>Event Selector</p>
  <div id="GridInnerContainer">

            <select name="EventSelect" id ="EventSelect" v-model="eventid">
            	@foreach ($events as $event)
            		@if($event->event_code == Config::get('unleash.admin.default_event'))
		              <option value="{{ $event->id }}" selected>
		                {{ $event->event_name }}
		              </option>
		             @else
		              <option value="{{ $event->id }}">
		                {{ $event->event_name }}
		              </option>		             
		             @endif
            	@endforeach

            </select>

  </div>
 </section>
 				<div class="tabs-wrp admin-wrp">
					<nav>
						<ul class="side tabs">
							<li @click="selectPage('Sessions')" class="tab adminActive" id = "SessionButton">Sessions</li> 
							<li @click="selectPage('NewSession')" class="tab" id="NewSessionButton">Create new Session</li> 
					    	<li @click="selectPage('Tracks')" class="tab" id="TrackButton">Tracks</li>
					    	
						</ul>
					</nav>
				</div>
	

 </div>

{{-- TRACKS --}}
	<section id="Tracks" class="agenda hiddenTab">
		<div class="title-section">
			<h1>Tracks</h1>
			<h4>London 20-21 March 2018 | ExCeL</h4>
		</div>
		<div class="contents-bg">
			<div class="contents-wrp">
				<div class="tabs-wrp">
					<nav>
						<ul class="side tabs">
					    	<li class="tab active" id = "day-1">March 20.</li>
					    	<li class="tab" id = "day-2">March 21.</li>  
						</ul>
					</nav>
				</div>
				<div id="day1" class="tabContent active">

					<!-- Main Stage -->
	    			<div class="cnt-wrp main-stage">
	    				<div class="left-side">
	    					<div class="upper-side">
		    					<div class="date">
		    						<h4>March 20.</h4>
		    					</div>

		    					<div class="session-name">
		    						<h3>Main Stage</h3>
		    					</div>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>ICC Auditorium</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Inspiration Visionaries, Entrepreneurs and Thinkers.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Inspirational Visionaries, Entrepreneurs and Thinkers who get the challenges of the tech revolution and what it means for business and organizations. Our Main Stage is second to none when it comes to helping you better understand and meet the challenges posed by technology. Let our speakers inspire you to create a better and brighter future world of work, and improved organizations that feel at ease in their ability to meet the challenge of disruptive innovation.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Main Stage -->

					<!-- HR Tech -->
	    			<div class="cnt-wrp hr-tech">
	    				<div class="left-side">
	    					<div class="upper-side">
		    					<div class="date">
		    						<h4>March 20.</h4>
		    					</div>
		    					<div class="time">
		    						<h2>08:00</h2>
		    					</div>
		    					<div class="session-name">
		    						<h3>HR Tech</h3>
		    					</div>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 14</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Get behind the scene on tech-driven transformation.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Get behind the scenes and take a good hard look at what HR Technology does and does not offer. Does it do what it’s supposed to do, and if not, why not? Tech driven transformation is never going to be easy in a world where the range of solutions is bewildering. Hear from senior executives who have been there and done that to benefit from their insights about how they’d do things differently with the benefit of hindsight.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END HR Tech -->

	    			    			   			


				</div>
				<div id="day2" class="tabContent">

			<!-- Main Stage -->
	    			<div class="cnt-wrp main-stage">
	    				<div class="left-side">
	    					<div class="upper-side">
		    					<div class="date">
		    						<h4>March 21.</h4>
		    					</div>
		    					<div class="time">
		    						<h2>08:00</h2>
		    					</div>
		    					<div class="session-name">
		    						<h3>Main Stage</h3>
		    					</div>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>ICC Auditorium</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Inspiration Visionaries, Entrepreneurs and Thinkers.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Inspirational Visionaries, Entrepreneurs and Thinkers who get the challenges of the tech revolution and what it means for business and organizations. Our Main Stage is second to none when it comes to helping you better understand and meet the challenges posed by technology. Let our speakers inspire you to create a better and brighter future world of work, and improved organizations that feel at ease in their ability to meet the challenge of disruptive innovation.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Main Stage -->

					<!-- HR Tech -->
	    			<div class="cnt-wrp hr-tech">
	    				<div class="left-side">
	    					<div class="upper-side">
		    					<div class="date">
		    						<h4>March 21.</h4>
		    					</div>
		    					<div class="time">
		    						<h2>08:00</h2>
		    					</div>
		    					<div class="session-name">
		    						<h3>HR Tech</h3>
		    					</div>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 14</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Get behind the scene on tech-driven transformation.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Get behind the scenes and take a good hard look at what HR Technology does and does not offer. Does it do what it’s supposed to do, and if not, why not? Tech driven transformation is never going to be easy in a world where the range of solutions is bewildering. Hear from senior executives who have been there and done that to benefit from their insights about how they’d do things differently with the benefit of hindsight.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END HR Tech -->

	    				    	

				</div>
			</div>
		</div>
	</section>

{{-- END TRACKS --}}


{{-- NEW SESSION --}}
	<section id="NewSession" class="hiddenTab">
		
                      
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add New Session</h4>
                                        </div>
                                            
                                            <form id="NewSpeakerForm" role="form" v-on:submit.prevent="newSessionSubmit">
                                            <div class="modal-body">
                                              

                                                <label class="sr-only" for="session_name">Session Name</label>
                                                <input type="text" required name="session_name" id="session_name" placeholder="Session Name" class="form-control m-t-10">



			 <input type="text" name="daterange" value="01/01/2015 - 01/31/2015" />

                                                <br />
                                                <textarea name="description" id="description" placeholder="Session Description"></textarea>
                                                <br />

                                                                                              

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-succes">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                 

	</section>	
{{-- END NEW SESSION --}}

{{-- SESSIONS --}}
<section id="Sessions" class="agenda activeTab">
		<div class="title-section">
			<h1 id="TestAgendaText">Sessions</h1>
			<h4>London 20-21 March 2018 | ExCeL</h4>
		</div>
		<div id="SearchBarContainer">
			<input v-model="searchbar" class="SearchBar" type="text" id="SessionSearchBar" name="SessionSearchBar">
		</div>
		<div id="SessionContentSectionContainer">
		<div id="SessionFilterSection">
			<div class="FilterInnerSection">
				@foreach($AgendaTracks as $TrackFilters)
					<input v-model="filters" type="checkbox" value="{{$TrackFilters->id}}"> {{ $TrackFilters->track_name }} <br />
				@endforeach
				
			</div>	
		</div>	
		<div class="contents-bg" id="SessionList">
			<div class="contents-wrp">
				<div class="tabs-wrp">
					<nav>
						<ul class="side tabs">
					    	<li @click="changeDay(day1, 1)" class="tab active" id = "s_day-1">March 20.</li>
					    	<li @click="changeDay(day2, 2)" class="tab" id = "s_day-2">March 21.</li>  
						</ul>
					</nav>
				</div>
				<div id="SessionContent" class="tabContent active">

					
					  <agenda-sessions ref="Sessions" :agendadata="agendasession"></agenda-sessions>
	    			    			   			


				</div>

			</div>
		</div>
	 </div>	
	</section>	
{{-- END SESSIONS --}}


    

@endsection

@section('customscripts')
  <script src="{{ mix('js/agenda.js', '/admin') }}" type="text/javascript"></script>
  

	<script>
	jQuery('#day2').addClass('hide');

	jQuery('#day-1').click(function() { 
		if (!jQuery(this).hasClass('active')) {
			jQuery('#day1').removeClass('hide');
			/*jQuery('#day1').show();*/
			jQuery('#day-1').addClass('active');
			jQuery('#day-2').removeClass('active');
			jQuery('#day2').addClass('hide');
			/*jQuery('#day2').hide();*/
		}
	});
	jQuery('#day-2').click(function() { 
		if (!jQuery(this).hasClass('active')) {
			jQuery('#day2').removeClass('hide');
			/*jQuery('#day2').show();*/
			jQuery('#day-2').addClass('active');
			jQuery('#day-1').removeClass('active');
			jQuery('#day1').addClass('hide');
			/*jQuery('#day1').hide();*/
		}
	});
	</script>


<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<script>


jQuery(function() {
   jQuery('input[name="daterange"]').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    });
});

</script>	
@endsection
