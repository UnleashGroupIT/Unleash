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

.TrackSelectToggle{
     transition: all 0.3s;
     opacity: 0;   
}

</style>
	<section class="agenda" id="AgendaSection">
  <!-- Agenda Desktop -->
        <div id="AgendaDesktop">
            <div class="cnt">
                <div class="agendaWrap">
                    <div class="arrow prev" @click="prevItem()"></div>
                    <!-- Agenda Navigation Desktop -->
                    <div id="AgendaNavDesktop" class="SidebarCustom PaddingTopBigTexts PaddingBottomMedium">

                        <div class="BreakoutDesktop" @click="changesessions(20)" data-desktopstage="20">
                            <div class="TooltipContent">Home</div>
                            <div class="BreakoutDesktopIcon" id="HomeIcon"></div>
                        </div>

                        <div id="futurework" class="BreakoutDesktop" @click="changesessions(1)" data-desktopstage="1">
                            <div class="TooltipContent ActiveTooltipContent">Future of Work</div>
                            <div class="BreakoutDesktopIcon ActiveBreakoutIcon" id="FutureOfWorkIcon"></div>
                        </div>
        				
                        <div class="BreakoutDesktop" @click="changesessions(2)" data-desktopstage="2">
                            <div class="TooltipContent">HR Tech</div>
                            <div class="BreakoutDesktopIcon" id="HRTechIcon"></div>
                        </div>
        				

                        <div class="BreakoutDesktop" @click="changesessions(3)" data-desktopstage="3">
                            <div class="TooltipContent">iRecruit</div>
                            <div class="BreakoutDesktopIcon" id="iRecruitIcon"></div>
                        </div>


                        <div class="BreakoutDesktop" @click="changesessions(15)" data-desktopstage="15">
                            <div class="TooltipContent">Digital HR</div>
                            <div class="BreakoutDesktopIcon" id="GoDigitalIcon"></div>
                        </div>

                        <div class="BreakoutDesktop" @click="changesessions(16)" data-desktopstage="16">
                            <div class="TooltipContent">Talent Management</div>
                            <div class="BreakoutDesktopIcon" id="TalentManagementIcon"></div>
                        </div>
        				
                        <div class="BreakoutDesktop" @click="changesessions(7)" data-desktopstage="7">
                            <div class="TooltipContent">Adoption</div>
                            <div class="BreakoutDesktopIcon" id="AdoptionIcon"></div>
                        </div>				

                        <div class="BreakoutDesktop" @click="changesessions(5)" data-desktopstage="5">
                            <div class="TooltipContent">Smart Data</div>
                            <div class="BreakoutDesktopIcon" id="SmartDataIcon"></div>
                        </div>

                        <div class="BreakoutDesktop" @click="changesessions(6)" data-desktopstage="6">
                            <div class="TooltipContent">Learning &AMP; Development</div>
                            <div class="BreakoutDesktopIcon" id="LearningIcon"></div>
                        </div>

        				<div class="BreakoutDesktop" @click="changesessions(10)" data-desktopstage="10">
                            <div class="TooltipContent">HR Tech Analysts</div>
                            <div class="BreakoutDesktopIcon" id="HRTechAnalystsIcon"></div>
                        </div>
        						

                        <div class="BreakoutDesktop" @click="changesessions(11)" data-desktopstage="11">
                            <div class="TooltipContent">Wellbeing &AMP; Rewards </div>
                            <div class="BreakoutDesktopIcon" id="WellbeingAndRewardsIcon"></div>
                        </div>

                        <div class="BreakoutDesktop" @click="changesessions(9)" data-desktopstage="9">
                            <div class="TooltipContent">Think Tank </div>
                            <div class="BreakoutDesktopIcon" id="ThinkTankIcon"></div>
                        </div>		
        				
        				
                        <div class="BreakoutDesktop" @click="changesessions(13)" data-desktopstage="13">
                            <div class="TooltipContent">Product Demo</div>
                            <div class="BreakoutDesktopIcon" id="ProductDemosIcon"></div>
                        </div>


                        <div class="BreakoutDesktop" @click="changesessions(12)" data-desktopstage="12">
                            <div class="TooltipContent">Startup Stage</div>
                            <div class="BreakoutDesktopIcon" id="disruptHRBetaPitchIcon"></div>
                        </div>


        				<div class="BreakoutDesktop" @click="changesessions(17)" data-desktopstage="17">
                            <div class="TooltipContent">Speed Conferencing I</div>
                            <div class="BreakoutDesktopIcon" id="GovIcon"></div>
                        </div>

        				<div class="BreakoutDesktop" @click="changesessions(18)" data-desktopstage="18">
                            <div class="TooltipContent">Speed Conferencing II</div>
                            <div class="BreakoutDesktopIcon" id="GovIcon"></div>
                        </div>
        				
                    </div>
                    <!-- END Agenda Navigation Desktop -->
                    <div class="arrow next" @click="nextItem()"></div>
                </div>
            </div>



        <!-- Agenda Navigation Mobile -->
        <section id="AgendaNavMobile">
            @foreach ($tracks as $track)
              <!-- Main Stage mobile -->
                <div class="BreakoutMobile pardotTrackClick" onClick="_gaq.push(['_trackEvent', 'Agenda', 'BreakOut', '{{$track->url}}']);" id="MobileMainStage" data-mobilestage="{{$track->id}}" data-currstate="0">
                    <div class="BreakoutHeaderMobile" data-mobilestage="{{$track->id}}">
                        <img class="MobileStageIcon" src="/gfx/amsterdam/agenda/icons/color/{{$track->url}}.svg" alt="Icon">
                        <h2 class="MobileStageName {{$track->color_class}}Color">{{$track->track_name}}</h2>
                        <i data-mobilestage="{{$track->id}}" class="fa fa-caret-down"></i>
                    </div>
                    <!-- Breakout Content -->
                    <div class="BreakoutCollapsibleMobile" data-mobilecontstage="{{$track->id}}">


                      <!-- Session Content -->
                <div class="LocationContainerMobile" data-mobilestage="{{$track->id}}">
                 <div class="LocationLevel">{{$track->level}}<span class="RoomData-{{$track->id}}">{{$track->room}}</span></div>

                </div>


 <!-- Day 1 Sessions -->
             <p class="StageTextMobile"></p>
            <h3 class="AgendaDateClass AgendaDateDayOne">{{$track->event->first_day['textFormat']}} <span class="AgendaDateDay">DAY 1</span></h3>

            <!-- Day 1 Data -->
            <div class="SessionBoxMobileOne SessionsList">

						  
        @if ($track->sessions->get(0)['extra_category'] == 'A')
			<h3 class="ExtraSessionType">{{$track->track_name}} A</h3>
			@foreach($track->sessions as $session)
				@if ('24' == $session->start_time['day'] && $session->extra_category == 'A')
					 @include('amsterdam.components.agendasession')
				@endif    
			@endforeach	

			<h3 class="ExtraSessionType">{{$track->track_name}} B</h3>
			@foreach($track->sessions as $session)
				@if ('24' == $session->start_time['day'] && $session->extra_category == 'B')
					 @include('amsterdam.components.agendasession')
				@endif    
			@endforeach				
		@else
						  
			@foreach($track->sessions as $session)
				@if ('24' == $session->start_time['day'])
					 @include('amsterdam.components.agendasession')
				@endif    
			@endforeach
		@endif

            </div>
            <!--  END Day 1 Data -->

            <!-- END Day 1 Sessions -->





            <!-- Day 2 Sessions -->
               <h3 class="AgendaDateClass AgendaDateDayTwo">{{$track->event->second_day['textFormat']}} <span class="AgendaDateDay">DAY 2</span></h3>
             <!-- Day 1 Data -->
               <div class="SessionBoxMobileTwo SessionsList">
					<?php $extraOne = 0; ?>
					@if ($track->sessions->get(0)['extra_category'] == 'A')
						<h3 class="ExtraSessionType">{{$track->track_name}} A</h3>
						@foreach($track->sessions as $session)
							@if ('25' == $session->start_time['day'] && $session->extra_category == 'A')
								 @include('amsterdam.components.agendasession')
							@endif    
						@endforeach	

						<h3 class="ExtraSessionType">{{$track->track_name}} B</h3>
						@foreach($track->sessions as $session)
							@if ('25' == $session->start_time['day'] && $session->extra_category == 'B')
								 @include('amsterdam.components.agendasession')
							@endif    
						@endforeach				
					@else
									  
						@foreach($track->sessions as $session)
							@if ('25' == $session->start_time['day'])
								 @include('amsterdam.components.agendasession')
							@endif    
						@endforeach
					@endif
  

              </div>
            <!-- END Day 2 Data -->

            <!-- END Day 2 Sessions -->












                        <p class="MobileCloseSession" data-mobilestage="{{$track->id}}" data-closetrack="{{$track->id}}"><i class="fa fa-caret-up"></i><span>Close Session</span><i class="fa fa-caret-up"></i></p>
                    </div>
                    <!-- end Breakout Content -->
                </div>
                <!-- END Main Stage mobile --> 

            @endforeach


            <div id="canvasloader-container" class="wrapper MarginBottomMedium"></div>
        </section>
        <!-- END Agenda Navigation Mobile -->


        <!-- Desktop Agenda -->
        <section id="DesktopAgenda" :style="{ opacity: DesktopAgendaToggle }" class="MarginBottomMedium TrackSelectToggle">
            <div id="LocationContainerDesktop" :style="{color: trackData.main_color}">
                <div id="LocationLevel"><var id="LevelNum">@{{trackData.level}}</var><span id="RoomData">@{{trackData.room}}</span></div>

            </div>

            <!-- Day 1 -->
            <h2 id="AgendaStageTitle" :class="trackData.color_class+'Color'">@{{trackData.track_name}} </h2>
            <p id="SelectedStageText">@{{ trackData.description }}</p>

            <h3 class="AgendaDateClass" v-if="dayoneset" id="AgendaDayOne"> @{{trackData.event.first_day.textFormat}} <span class="AgendaDateDay">DAY 1</span></h3>
            <div class="SessionsList" id="SessionsDayOne">


                <agenda-session day="24" daycode="1" ref="dayone"></agenda-session>


            </div>
            <!-- END Day 1  -->


            <!-- Day 2  -->
            <h3 class="AgendaDateClass" v-if="daytwoset" id="AgendaDayTwo">@{{trackData.event.second_day.textFormat}} <span class="AgendaDateDay">DAY 2</span></h3>
            <div class="SessionsList" id="SessionsDayTwo">

                <agenda-session day="25" daycode="2" ref="daytwo"></agenda-session>

            </div>
            <!-- END Day 2 -->

        </section>
        <!-- END Desktop Agenda -->


<div id="AgendaBottomNavigation">
<button id="PrevAgendaTrack" class="blue-btn" @click="prevItem()">Previous Track</button>

<button id="NextAgendaTrack" class="blue-btn" @click="nextItem()">Next Track</button>
</div>		
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
