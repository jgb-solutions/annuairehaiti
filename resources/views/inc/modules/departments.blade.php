<div class="col-sm-3 col-xs-6">
	<h4>@lang('text.departments.name')</h4>
	<ul>
		@foreach($departments as $department)
			<li>
			   <a href="{{ AH::route('department.show', $department->slug) }}">
			   	{{ $department->name }} ({{ $department->enterprises_count }})
			   </a>
			</li>
		@endforeach
	</ul>
</div>