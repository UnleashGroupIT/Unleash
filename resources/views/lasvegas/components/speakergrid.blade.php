<!--Speakers-->
	<section class="speakers-grid">
		<div class="speakers-wrap">

		 @foreach ($speakers as $speaker)
			<a href="{{ route('lasvegas.speaker', $speaker->id) }}" class="speaker">
				<img src="{{ URL::asset('storage/speakers') }}/{{$speaker->img_url }}" alt="{{ $speaker->full_name }}">
				<div class="dtls-wrap">
					<h6 class="name">{{ $speaker->full_name }}</h6>
					<p class="title">{{ $speaker->job_title }}</p>
					<span class="company">{{ $speaker->company }}</span>
				</div>
			</a>
		@endforeach	
		
		</div>
	</section>
	<!--Speakers END-->