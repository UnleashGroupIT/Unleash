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

	<section class="agenda" id="AgendaSection">


  <ais-index
    app-id="{{ config('scout.algolia.id') }}"
    api-key="{{ config('scout.algolia.key') }}"
    index-name="agenda_sessions"
  >
    <ais-search-box></ais-search-box>

     <agenda-session attribute-name="start_time.day"></agenda-session>

 <agenda-session customorder=true attribute-name="tracks.track_name"></agenda-session>

   {{--  <ais-refinement-list limit="30" attribute-name="tracks.track_name"></ais-refinement-list> --}}

    <ais-results>
      <template slot-scope="{ result }">
        <p>
            @{{ result.session_title }}
          {{-- <ais-highlight :result="result" attribute-name="session_title"></ais-highlight> --}}
            
        </p>
      </template>
    </ais-results>
  </ais-index>


{{--     <div id="SearchBoxContainer">
        <input type=text name="searchBar" id="searchBar" v-model="searchField" @keyup="doSearch()">

    </div>
         <div id="Results"></div>     --}}

  



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
