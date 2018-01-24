@extends('london.main')

@section('meta')
 <meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
 
	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH London - Agenda"/>
	<meta property="og:title" content="UNLEASH London - Agenda"/>
	<meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
	<meta property="og:url" content="http://www.unleashgroup.io/london/agenda">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH London - Agenda">
	<meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
		
@endsection

@section('title', 'London - Agenda')

@section('headercss')
<link rel="stylesheet" type="text/css" href="{{ mix('css/london/agenda.css') }}">
<style>


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
.SpeakerListContainer{
	margin-top:25px;
}
.SpeakerContent, .SpeakerImgContainer{
	display:inline-block;
}
.SpeakerContent{
	margin-left: 5px;
}
.SpeakerImgContainer{
	width: 60px;
}
.SpeakerContent h3{
	line-height: 1em;
	margin: 0;
}
.SpeakerContent p{
	line-height: 1.3em;
	margin: 0;
}
.SpeakerImage{
	vertical-align: text-bottom;
}
.SpeakerListContainer ul li{
	margin-bottom: 10px;
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
@section('footerscripts')
	<script>
	$('#day2').addClass('hide');

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