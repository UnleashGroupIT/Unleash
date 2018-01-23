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
                <div id="MainStreamContainer" data-streamid"3" class="video cover">
                    <iframe id="stream" src="https://www.ustream.tv/embed/23388802?html5ui&autoplay=false" style="border: 0 none transparent;"  webkitallowfullscreen allowfullscreen frameborder="no"></iframe>
                </div>
                <div class="smll-vids">
                    <div class="vid-wrp">
                        <div class="dtls">
                            <h4 data-streamname="2" id="StreamTwoName">HR Tech Stage</h4>
                            <p>Ensure you and your organization stay ahead of the crowd - be a leader and not just a ...</p>
                        </div>
                        <div class="vid cover switchplayer" id="StreamTwo" data-streamid="2">
                          <iframe id="stream" src="https://www.ustream.tv/embed/23433246?html5ui&autoplay=false" style="border: 0 none transparent;"  webkitallowfullscreen allowfullscreen frameborder="no"></iframe>                  
                        </div>
                    </div>
                    <div class="vid-wrp">
                        <div class="dtls">
                            <h4 data-streamname="1" id="StreamThreeName">Future of work Stage</h4>
                            <p>Can’t make it to our biggest show yet? Catch tidbits from around the conference...</p>
                        </div>
                        <div class="vid cover switchplayer" id="StreamThree" data-streamid="1">
                           <iframe id="stream" src="https://www.ustream.tv/embed/23433245?html5ui&autoplay=false" style="border: 0 none transparent;"  webkitallowfullscreen allowfullscreen frameborder="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details-sec">
                <h3>Live Stream</h4>
                <h1>3 Live Streams</h1>
                <div>
                    <h4 data-streamname="3" id="MainShowText">Show Stream</h4>
                    <p>Innovations in robotics, AI, intelligent apps, cognitive computing and chatbots are changing the reality of what it means to live and work in the Digital Age. Catch Arianna Huffington, Nick Bostrom, Corinne Vigreux and more on our Future of Work stage.</p>
                </div>
                <button id="PlayStream" class="blue-btn">Watch Now</button>
            </div>
        </div>
    </section>

@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<script>
			var stream = [];
			var streamname = [];
			stream[1] = "https://www.ustream.tv/embed/23433245?html5ui&autoplay=false";	
	        stream[2] = "https://www.ustream.tv/embed/23433246?html5ui&autoplay=false";
			stream[3] = "https://www.ustream.tv/embed/23388802?html5ui&autoplay=false";
			
			streamname[1] = "Future of work Stage";	
	        streamname[2] = "HR Tech Stage";
			streamname[3] = "Show Stream";
			
		    var live =  {};
			live.selected = 3;
			
                    $('body').on('click', '.switchplayer ', function (event) {
					    let selectedStream = $(this).data('streamid');
						var SelectedID = $(this).attr("id");
						
						
						$('#MainStreamContainer').html('');
						var ifrm = document.createElement("iframe");
							ifrm.setAttribute("src", stream[selectedStream]);
							ifrm.setAttribute("style", "border: 0 none transparent");
							ifrm.setAttribute("webkitallowfullscreen", " ");
							ifrm.setAttribute("allowfullscreen", " ");
							ifrm.setAttribute("frameborder", "no");
							
						   document.getElementById('MainStreamContainer').appendChild(ifrm);
						   
						$('#'+SelectedID+'Name').html(streamname[live.selected]); 						
						$('#MainShowText').html(streamname[selectedStream]); 
												   
					
					$('#'+SelectedID).html('');
					var ifrm2 = document.createElement("iframe");
							ifrm2.setAttribute("src", stream[live.selected]);
							ifrm2.setAttribute("style", "border: 0 none transparent");
							ifrm2.setAttribute("webkitallowfullscreen", " ");
							ifrm2.setAttribute("allowfullscreen", " ");
							ifrm2.setAttribute("frameborder", "no");							
							$('#'+SelectedID).append(ifrm2);
							
							
							$('#MainStreamContainer').data('streamid',selectedStream);
							$('#'+SelectedID).data('streamid',live.selected);
							
						$('#'+SelectedID+'Name').data('streamname',live.selected);
						$('#MainShowText').data('streamname',selectedStream); 
						
						
					
					    live.selected = selectedStream;
						
				    document.getElementById('stream').contentWindow.location.reload(true);	
					 document.getElementById('stream2').contentWindow.location.reload(true);
					 document.getElementById('stream3').contentWindow.location.reload(true);					 
                    });
			
		</script>
		
		<script>
		$('body').on('click', '#PlayStream ', function (event) {
				$('#MainStreamContainer').html('');
						var ifrm = document.createElement("iframe");
							ifrm.setAttribute("src", "https://www.ustream.tv/embed/23388802?html5ui&autoplay=true");
						   document.getElementById('MainStreamContainer').appendChild(ifrm);
		});
		</script>
@endsection