<!--Sponsors-->
	<section id="spnsrgrd" class="sponsors">
		<div class="sponsors-wrp">

		 @foreach ($sponsors as $sponsor)
			<div class="sponsor">
				<a href="{{ route('ams.sponsor', $sponsor->slug) }}"><img src="{{ URL::asset('storage/sponsors/colored') }}/{{$sponsor->logo_url }}" alt="{{$sponsor->company_name }}"></a>
			</div>

		@endforeach	

		</div>
	</section>
	<!--Sponsors END-->