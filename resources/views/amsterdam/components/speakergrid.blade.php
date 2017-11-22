<!--Speakers-->
	<section id="spkrgrd" class="speakers-grid">
		<div class="speakers-wrap">

		 @foreach ($speakers as $speaker)
			<a href="{{ route('ams.speaker', $speaker->slug) }}" class="speaker">
				<img src="{{ URL::asset('storage/speakers') }}/{{$speaker->img_url }}" alt="{{ $speaker->full_name }}">
				<div class="dtls-wrap">
					<h6 class="name">{{$speaker->prefix}} {{ voku::cleanup($speaker->full_name) }}</h6>
					<p class="title">{{ $speaker->job_title }}</p>
					<span class="company">{{ voku::cleanup($speaker->company) }}</span>
				</div>
			</a>
		@endforeach	
		
		</div>
	</section>
	<!--Speakers END-->