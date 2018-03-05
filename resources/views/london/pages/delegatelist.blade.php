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
</style>
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

<section id="TableSection">
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
@endsection