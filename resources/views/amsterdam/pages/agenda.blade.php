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
</style>

	<section class="agenda" id="AgendaSection">


  <ais-index
    app-id="{{ config('scout.algolia.id') }}"
    api-key="{{ config('scout.algolia.key') }}"
    index-name="agenda_sessions"
  >
  <div id="SearchBoxContainer">
    <ais-search-box></ais-search-box>
  </div> 

<div id="DateSelectorContainer">
     <agenda-session-date attribute-name="start_time.day"></agenda-session-date>

</div>

 <agenda-session customorder=true attribute-name="tracks.track_name"></agenda-session>

   {{--  <ais-refinement-list limit="30" attribute-name="tracks.track_name"></ais-refinement-list> --}}

    <ais-results>
      <template slot-scope="{ result }">
        <div class="Session">
         <div class="">
         </div> 
        <h3>
            @{{ result.session_title }}   
        </h3>
        <div class="SessionInnerContainer">
          @{{ result }}
        </div>  
      </div>
      </template>
    </ais-results>
  </ais-index>



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
