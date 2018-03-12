@extends('lasvegas.main')

@section('meta')
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018.">
 <meta name="google-site-verification" content="n0SN8rSlfzJtkCBmSexzIG6dT59FadZc03C1eYF1qeg" />
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH America - Agenda"/>
        <meta property="og:title" content="UNLEASH America - Agenda"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/america">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH America - Agenda">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}">
		
@endsection

@section('title', 'Las Vegas - Agenda')

@section('headercss')
<link rel="stylesheet" type="text/css" href="{{ mix('css/lasvegas/agenda_beta.css') }}">
<style>
#Algolia{
	text-align: right;
    padding: 2em;
    max-width: 1170px;
    margin: 0 auto;
}



</style>
@endsection

@section('headerjs')

@endsection

@section('maincontent')
	{{-- SESSIONS --}}
 <section id="Agenda" class="agenda"> 
<!--<section id="Sessions" class="agenda hiddenTab">-->	
		<div class="title-section">
			<h1 id="TestAgendaText">AGENDA</h1>
			<h4>Las Vegas May 15-16 2018 </h4>
		</div>
		<div class="content-section">
			<div class="inner-wrp">
			<div class="tabs-wrp">
				<nav>
					<ul class="side tabs">
				    	<li @click="changeDay(day0, 0)" class="tab" id = "s_day-0">May 14. PRE-EVENT</li>
				    	<li @click="changeDay(day1, 1)" class="tab active" id = "s_day-1">May 15.</li>
				    	<li @click="changeDay(day2, 2)" class="tab" id = "s_day-2">May 16.</li>  
					</ul>
				</nav>
			</div>

			<div id="SearchBarContainer">
				<input v-model="searchbar" class="SearchBar" type="text" id="SessionSearchBar" name="SessionSearchBar" placeholder="Search ...">
			</div>
			
			<div id="SessionContentSectionContainer">
			<div id="SessionFilterSection">
				<div class="FilterInnerSection">
					  <div>
						 <input id="SelectAllFilter" v-model="allfilters" type="checkbox" value="0"> SELECT ALL
					 </div>				
					@foreach($AgendaTracks as $TrackFilters)
						 @if($TrackFilters->track_status == 1)
							<div>
								<input class="AgendaFilters" v-model="filters" type="checkbox" value="{{$TrackFilters->id}}"> {{ $TrackFilters->track_name }}
							</div>						 
						 @endif	 

					@endforeach

				</div>	
			</div>	
			<div class="contents-bg" id="SessionList">
				<div class="contents-wrp">				
					<div id="SessionContent" class="tabContent active">

						
						  <agenda-sessions ref="Sessions" :agendadata="agendasession"></agenda-sessions>
		    			    			   			


					</div>

				</div>
			</div>
		 </div>
		 </div>
		 <section id="Algolia">
<img src="https://www.algolia.com/static_assets/images/pricing/pricing_new/algolia-powered-by-14773f38.svg" alt="Algolia">
</section>
	 </div>	
	</section>	
{{-- END SESSIONS --}}
@endsection
@section('footerscripts')
	<script>
	$('#day2').addClass('hide');
	$('#day0').addClass('hide');

	$('#day-1').click(function() { 
		if (!$(this).hasClass('active')) {
			$('#day1').removeClass('hide');
			/*$('#day1').show();*/
			$('#day-1').addClass('active');
			$('#day-2').removeClass('active');
			$('#day2').addClass('hide');
			/*$('#day2').hide();*/
		}
	});
	$('#day-2').click(function() { 
		if (!$(this).hasClass('active')) {
			$('#day2').removeClass('hide');
			/*$('#day2').show();*/
			$('#day-2').addClass('active');
			$('#day-1').removeClass('active');
			$('#day1').addClass('hide');
			/*$('#day1').hide();*/
		}
	});


	</script>
  <script src="{{ mix('js/agenda.js') }}" type="text/javascript"></script>	
@endsection