<div class="col-sm-3 col-xs-6">
	<h4>@lang('text.cities.name')</h4>
	<ul>
		@foreach($cities as $city)
			<li>
			   <a href="{{ AH::route('city.show', $city->slug) }}">
			   	{{ $city->name }} ({{ $city->enterprises_count }})
			   </a>
			</li>
		@endforeach
	</ul>
</div>