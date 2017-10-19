	<a href="{{ strip_tags( $blogpost[0]['link'] )}}"><div id="BlogpostContainer">
	   @if (isset($blogpost[0]['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['vw_one_fifth_thumbnail']['source_url']))
		<div id="BlogImgContainer"><img src="{{$blogpost[0]['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['vw_one_fifth_thumbnail']['source_url']}}" /></div>
	   @elseif (isset($blogpost[0]['_embedded']['wp:featuredmedia'][0]['source_url']))
	   <div id="BlogImgContainer"><img src="{{$blogpost[0]['_embedded']['wp:featuredmedia'][0]['source_url']}}" /></div>
		@endif
		<div id="BlogDataContainer">
			<h4>{{ strip_tags( voku::cleanup($blogpost[0]['title']['rendered']) )}}</h4>	
		</div>
	</div>
	</a>	
