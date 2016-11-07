<div class="col-sm-3 col-xs-6">
	<h4>@lang('text.towns.name')</h4>
	<ul>
		@foreach($towns as $town)
			<li>
			   <a href="{{ AH::route('town.show', $town->slug) }}">
			   	{{ $town->name }} ({{ $town->enterprises_count }})
			   </a>
			</li>
		@endforeach
	</ul>
</div>