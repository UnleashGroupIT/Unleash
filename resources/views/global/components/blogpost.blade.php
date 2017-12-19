	<a href="{{ strip_tags( $blogpost[0]['link'] )}}"><div id="BlogpostContainer">
		<div id="BlogImgContainer"><img src="{{$blogpost[0]['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['vw_one_fifth_thumbnail']['source_url']}}" /></div>
		<div id="BlogDataContainer">
			<h4>{{ strip_tags( voku::cleanup($blogpost[0]['title']['rendered']) )}}</h4>	
		</div>
	</div>
	</a>	
