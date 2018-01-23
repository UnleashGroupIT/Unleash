		  <!-- {{$session->session_title}} -->
                <div class="Session
                @if($session->category_id == 1)
                  {{$track->color_class}}Color
                @else
                 BreakTextColor BreakTextClass
                @endif " data-agenda_id="{{$session->id}}" data-agenda_day="{{$session->start_time['day']}}" data-agenda_category="{{$session->category_id}}">
                    <div class="SessionTimeContainer">
                        <h3 class="SessionStartTime">{{$session->start_time['time']}}</h3>
                    </div>
                    <div class="SessionContent BreakoutContent">
						<h3 class="SessionTitle" onclick="_gaq.push(['_trackEvent', 'Agenda', 'Toggle', 'RegistrationAndNetworking']);">{{$session->session_title}}
						 @if(isset($session->session_description) || isset($session->speakers[0]))
							<i class="fa fa-angle-down"></i>
						 @endif
						</h3>
					</div> 
                     @if(isset($session->session_description) || isset($session->speakers[0]))
                        <div class="SessionInfo">
                              <!-- Session Info Speakers Grid -->
                               @if(isset($session->speakers[0])) 
                              <div class="SessionInfoSpeakersGrid">
                                @foreach($session->speakers as $speakers)
                                <div class="SessionInfoSpeaker">
                                    <a href="speaker/{{$speakers->id}}" title="{{$speakers->full_name}}"><img src="/storage/speakers/{{$speakers->img_url}}" alt="{{$speakers->full_name}}"></a>
                                        <div class="SessionInfoSpeakerDetails">
                                            <p><a href="speakers/{{$speakers->id}}" title="{{$speakers->full_name}}" class="{{$track->color_class}}Color">{{voku::cleanup($speakers->full_name) }}</a></p>
                                            <p class="SessionInfoSpeakerJobtitle">{{$speakers->job_title}}</p>
                                            <p class="{{$track->color_class}}Color"><a href="{{$speakers->website}}" target="_blank" title="Visit Website" class="{{$track->color_class}}Color">{{$speakers->company}}</a></p>
                                        </div>
                                </div>
                                @endforeach

                              </div>
                              @endif
                             <!-- end Session Info Speakers Grid -->
                              @if(isset($session->session_description))
                             <!-- Session Abstract -->
                             <div class="SessionAbstract">
                              <p>{{$session->session_description}}</p>
                            </div>
                              <!-- end Session Abstract -->
                              @endif
                        </div>
                    @endif
                </div>
                <!-- END {{$session->session_title}} -->