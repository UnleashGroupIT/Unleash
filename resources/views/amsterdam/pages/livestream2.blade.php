@extends('amsterdam.main')

@section('title', 'Live')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/amsterdam/stream.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/common.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

            <section class="stream livevideos">
        <div class="conent-wrapper">
            <div class="video-sec">
                <div id="MainStreamContainer" class="video cover">
                    <iframe id="stream" src="https://www.ustream.tv/embed/23388802?html5ui&autoplay=true" style="border: 0 none transparent;"  webkitallowfullscreen allowfullscreen frameborder="no"></iframe>
                </div>
                <div class="smll-vids">
                    <div class="vid-wrp">
                        <div class="dtls">
                            <h4>HR Tech Stage</h4>
                            <p>Ensure you and your organization stay ahead of the crowd - be a leader and not just a ...</p>
                        </div>
                        <div class="vid cover switchplayer" data-streamid="2">
                         <iframe id="stream" src="https://www.ustream.tv/embed/23433246?html5ui&autoplay=false" style="border: 0 none transparent;"  webkitallowfullscreen allowfullscreen frameborder="no"></iframe>
                        </div>
                    </div>
                    <div class="vid-wrp">
                        <div class="dtls">
                            <h4>Show Stream</h4>
                            <p>Can’t make it to our biggest show yet? Catch tidbits from around the conference...</p>
                        </div>
                        <div class="vid cover switchplayer" data-streamid="3">
                            <iframe id="stream" src="https://www.ustream.tv/embed/23388802?html5ui&autoplay=false" style="border: 0 none transparent;"  webkitallowfullscreen allowfullscreen frameborder="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details-sec">
                <h3>Live Stream</h4>
                <h1>3 Live Streams</h1>
                <div>
                    <h4>Future of work Stage</h4>
                    <p>Innovations in robotics, AI, intelligent apps, cognitive computing and chatbots are changing the reality of what it means to live and work in the Digital Age. Catch Arianna Huffington, Nick Bostrom, Corinne Vigreux and more on our Future of Work stage.</p>
                </div>
                <button id="watchbutton" class="blue-btn">Watch Now</button>
            </div>
        </div>
    </section>

@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<script>
			var stream = [];
			stream[1] = "https://www.ustream.tv/embed/23433245?html5ui&autoplay=false";	
	        stream[2] = "https://www.ustream.tv/embed/23433246?html5ui&autoplay=false";
			stream[3] = "https://www.ustream.tv/embed/23388802?html5ui&autoplay=false";
		    var live = "1";
			
                    $('body').on('click', '.switchplayer ', function (event) {
					    let selectedStream = $(this).data('streamid');
						
						$('#MainStreamContainer').html('');
						var ifrm = document.createElement("iframe");
							ifrm.setAttribute("src", stream[selectedStream]);
						   document.getElementById('MainStreamContainer').appendChild(ifrm);
					
					
					    live = selectedStream;
						
				     document.getElementById('stream').contentWindow.location.reload(true);	
					 document.getElementById('stream2').contentWindow.location.reload(true);
					 document.getElementById('stream3').contentWindow.location.reload(true);					 
                    });
			
		</script>
@endsection