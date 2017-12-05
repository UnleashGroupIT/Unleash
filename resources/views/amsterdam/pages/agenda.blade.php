@extends('amsterdam.main')

@section('title', 'Agenda')

@section('headercss')
	 <link rel="stylesheet" type="text/css" href="{{ mix('css/amsterdam/agenda.css') }}"> 

	<style>
	 .Session {
		 cursor:pointer;
	 }
	 p{
		line-height: 1.5em; 
	 }
	</style>
@endsection

@section('headerjs')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

@endsection


@section('maincontent')

<style>
#AgendaSection{
  background-color: #f2f2f2;
}

.AgendaDateItem, .AgendaDateItem_Active{
    width: 100%;
    max-width: 235px;
    display: inline-block;
    text-align: center;
    margin: 20px 2px;
}

.AgendaDateItem{
 background-color: #e9e9e9;

}

.AgendaDateItem_Active{
  background-color: #e7d0d0;
}
 
.DateSelector{ 
  padding: 15px 30px; 
}
  
#DateSelectorContainer{
      text-align: center;
}
#TrackFilters, #SearchResults{
  display:inline-block;
}
#TrackFilters {
  vertical-align: top;
}
#SearchResults{
    width: 100%;
    max-width: 1100px;
}

.Session{
  background-color: #fff;
  margin: 0px 0 20px 0;
  -webkit-box-shadow: 6px 6px 11px 1px rgba(0, 0, 0, 0.06);
  -moz-box-shadow: 6px 6px 11px 1px rgba(0, 0, 0, 0.06);
  box-shadow: 6px 6px 11px 1px rgba(0, 0, 0, 0.06);
}
.LeftSection, .RightSection, .SessionLocation, .SessionDuration{
    display:inline-block;
}
.RightSection{
      max-width: 80%;
}
.LeftSection{
  vertical-align: top;
   width: 215px;
}

.SpeakerImage, .SpeakerInfo, .SpeakerTitle, .SpeakerCompany, .ExtraCategory{
    display:inline-block;
}
.SpeakerImage{
    width: 40px;
}
.SessionLocation{
  margin: 0 38px 0 0;
}
.SessionUpperInfoRibbon{
  margin: 15px 0;
}
</style>

	<section class="agenda" id="AgendaSection">


  <ais-index
    app-id="{{ config('scout.algolia.id') }}"
    api-key="{{ config('scout.algolia.key') }}"
    index-name="agenda_sessions"

  >


<div id="DateSelectorContainer">
     <agenda-session-date attribute-name="start_time.day"></agenda-session-date>

</div>

  <div id="SearchBoxContainer">
    <agenda-searchbox></agenda-searchbox>
  </div> 


 <div id="TrackFilters">
  <agenda-session customorder=true attribute-name="tracks.track_name"></agenda-session>
 </div>
 

 <div id="SearchResults">
    <ais-results>
      <template slot-scope="{ result }">
        <div class="Session">
         <div class="LeftSection">
            <p>@{{ result.start_time.month }} @{{ result.start_time.day }}.</p>
            <h3>@{{ result.start_time.time }}</h3>
            <p>@{{ result.tracks.track_name }}</p>
         </div>
        <div class="RightSection"> 
          <div class="SessionUpperInfoRibbon">
            <p class="SessionLocation"><i class="fa fa-map-marker" aria-hidden="true"></i> @{{result.tracks.level}} - @{{result.tracks.room}}</p>
            <p class="SessionDuration"><i class="fa fa-clock-o" aria-hidden="true"></i> @{{ getMinutesBetweenDates(result.start_timestamp, result.end_timestamp) }} mins</p>
            <p class="ExtraCategory" v-if="result.extra_category">| @{{result.extra_category}}</p>
         </div>
           <h3>@{{ result.session_title }}</h3>
          <div class="SessionInnerContainer">
             <p>@{{ result.session_description }}</p>
             <div class="SessionSpeaker" v-for="speaker in result.speakers">
              <img class="SpeakerImage" :src="'/storage/speakers/'+speaker.img_url">
               
               <div class="SpeakerInfo">
                 <p class="SpeakerName">@{{ speaker.full_name }}</p>
                  <p class="SpeakerTitle">@{{ speaker.job_title }}</p>
                  <p class="SpeakerCompany">@{{ speaker.company }}</p>
               </div>
                   
             </div>
          </div>  
        </div>
      </div>
      </template>
    </ais-results>
  </ais-index>
</div>



	</section>
@endsection

@section('footerscripts')
<script type="text/javascript">
    document.getElementById("header-menu").style.backgroundColor = "#000";
</script>
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script type="text/javascript" src="{{ URL::asset('js/amsterdam/agenda.js') }}"></script>
@endsection
