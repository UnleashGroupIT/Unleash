@extends('london.main')

@section('meta')
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
 <meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
 
	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH London - Deleagtes"/>
	<meta property="og:title" content="UNLEASH London - Deleagtes"/>
	<meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
	<meta property="og:url" content="http://www.unleashgroup.io/london/venue">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH London - Deleagtes">
	<meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
		
@endsection

@section('title', 'London - Delegate List')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/london/agenda.css') }}">
<style>
#TableSection{
	margin-top: 150px; 
	overflow-x: auto;
}
.blurSection{
	filter: blur(3px);
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
tbody {
	vertical-align: middle;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
	font-weight: 800;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
#protection{
	position: absolute;
	top: 25%;
	margin: 0 auto;
	text-align: center;
	left: auto;
	right: auto;
	width: 100%;
}
#protbg{
overflow: hidden;
width: 100%;
height: 100%;
position: fixed;
top: 0;
background: rgba(0, 0, 0, 0.52);
}
#pwdContainer{
	background: rgb(243, 243, 243);
    width: 100%;
    margin: 0 auto;
    padding: 50px;
    max-width: 550px;
    box-shadow: #3c3c33 1px 1px 15px 1px;
}
body{
	overflow-y: hidden;
}
.pwdInput{
	padding: 10px;
	margin: 30px 0;
	width: 100%;
	max-width: 300px;
}
</style>
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

<section id="TableSection" class="blurSection">
<h2>Unleash London 2018 - Delegate List</h2>	
<table>
  <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Company</th>
    <th scope="col">Job Title</th>
    <th scope="col">Country</th>
  </tr>

@foreach($delegates as $delegate)
  <tr>
    <td>{{$delegate->first_name}}</td>
    <td>{{$delegate->last_name}}</td>
    <td>{{$delegate->company}}</td>
    <td>{{$delegate->job_title}}</td>
    <td>{{$delegate->country}}</td>
  </tr>
@endforeach  
</table>
</section>	
<div id="protbg">
<div id="protection">
	<div id="pwdContainer">
		<p>Please type in the password!</p>
		<input required type="password" name="pwd" id="pwd" class="pwdInput"><br />
		<button class="red-btn" id="SubmitPWD">Submit</button>
	</div>
</div>
</div>	
<script>
</script>
  <script src="{{ mix('js/minrequire.js') }}" type="text/javascript"></script>		
@endsection

@section('footerscripts')
	
<script>
$(document).on("click","#SubmitPWD",function(o){var e=$("#pwd").val();void 0!==e&&""!=e?axios.post("/api/delegatepwd",{password:e}).then(function(o){1==o.data?($("#TableSection").removeClass("blurSection"),$("#protbg").hide(),$("html, body").css("overflowY","auto")):alert("Invalid password!")}).catch(function(o){console.log(o)}):alert("Please, type in the password!")});
</script>	
@endsection