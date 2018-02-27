@extends('lasvegas.main')

@section('meta')
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH America - Floorplan"/>
        <meta property="og:title" content="UNLEASH America - Floorplan"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/america/floorplan">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH America - Travel">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}">
@endsection

@section('title', 'Floorplan')

@section('headercss')

	<link rel="stylesheet" type="text/css" href="{{ mix('css/lasvegas/floorplan_new.css') }}">
	 <link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.3/dist/leaflet.css" />

    <style>
      html, body, #map, #map2 { display:block; width:100%; height:100%; margin:0; padding:0; z-index: 1; }
      body{ overflow-x: hidden }
      #map, #map2 {
      	transition: all 0.3s;
      }
      .map2init {
      	z-index: 0;
      }
      #ButtonContainer{
      	text-align: center;
		margin: 70px auto;
      }
    </style>	

@endsection

@section('headerjs')
    <script src="https://npmcdn.com/leaflet@1.0.0-rc.3/dist/leaflet.js"></script>
<script>
  let testExp = new RegExp('Android|webOS|iPhone|iPad|' +
    		       'BlackBerry|Windows Phone|'  +
    		       'Opera Mini|IEMobile|Mobile' , 
    		      'i');
  
  if (testExp.test(navigator.userAgent)){
  		var dragging = false;
  }else {
  		var dragging = true;
  }
</script>	
	 <script>
	      var layer;
	      function init() {

	        var mapMinZoom = 0;
	        var mapMaxZoom = 4;
	        var map = L.map('map', {
	          maxZoom: mapMaxZoom,
	          minZoom: mapMinZoom,
	          crs: L.CRS.Simple,
			  dragging: dragging,
			  tap: false
	        }).setView([0, 0], mapMaxZoom);
	        
	        var mapBounds = new L.LatLngBounds(
				map.unproject([0, 2304], mapMaxZoom),
				map.unproject([3072, 0], mapMaxZoom));
	            
	        map.fitBounds(mapBounds);
	        map.scrollWheelZoom.disable();
	        layer = L.tileLayer('/storage/floorplans/america/level1/{z}/{x}/{y}.png', {
	          minZoom: mapMinZoom, maxZoom: mapMaxZoom,
	          bounds: mapBounds,
	          attribution: false,
	          noWrap: true,
	          tms: false
	        }).addTo(map);
	      }
	    </script>    

	 <script>
	      var layer;
	      function init2() {

	        var mapMinZoom = 0;
	        var mapMaxZoom = 4;
	        var map = L.map('map2', {
	          maxZoom: mapMaxZoom,
	          minZoom: mapMinZoom,
	          crs: L.CRS.Simple,
			  dragging: dragging,
			  tap: false
	        }).setView([0, 0], mapMaxZoom);
	        
	        var mapBounds = new L.LatLngBounds(
				map.unproject([0, 2304], mapMaxZoom),
				map.unproject([3072, 0], mapMaxZoom));
	            
	        map.fitBounds(mapBounds);
	        map.scrollWheelZoom.disable();
	        layer = L.tileLayer('/storage/floorplans/america/level2/{z}/{x}/{y}.png', {
	          minZoom: mapMinZoom, maxZoom: mapMaxZoom,
	          bounds: mapBounds,
	          attribution: false,
	          noWrap: true,
	          tms: false
	        }).addTo(map);

	        $("#map2").css("display","none");
	        $("#map2").removeClass("map2init");
	      }
	    </script>  	    
@endsection

@section('maincontent')
<section id="ButtonContainer">
	<button class="red-btn popup" onclick="mapOne()">Level 1</button>
	<button class="red-btn popup" onclick="mapTwo()">Level 2</button>
</section>	


    <div id="map" class="active"></div>
    <div id="map2" class="map2init"></div>
  <p align="center">UNLEASH reserves the right to change the layout of the floor plan at any time during the preparation period.</p>
@endsection

@section('footerscripts')
	<script>
		jQuery( document ).ready(function() {
		    init();
		    init2();
		    
		});
		function mapOne(){
			$("#map2").fadeOut(function(){
				$(this).removeClass('active');
			});
			$("#map").fadeIn(function(){
				$(this).addClass('active');

			});

		}
		function mapTwo(){
			$("#map").fadeOut(function(){
				$(this).removeClass('active');
			});
			$("#map2").fadeIn(function(){
				$(this).addClass('active');

			});

		}		
	</script>	
			
@endsection
			
			