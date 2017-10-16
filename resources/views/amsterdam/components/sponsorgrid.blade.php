<!--Sponsors-->
	<section class="sponsors">
		<div class="sponsors-wrp">

		 @foreach ($sponsors as $sponsor)
			<div class="sponsor">
				<img src="{{ URL::asset('storage/sponsors/colored') }}/{{$sponsor->logo_url }}" alt="{{$sponsor->company_name }}">
			</div>

		@endforeach	

		</div>
	</section>
	<!--Sponsors END-->