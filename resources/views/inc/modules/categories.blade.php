<div class="col-sm-3 col-xs-6">
	<h4>@lang('text.categories.name')</h4>
	<ul>
		@foreach($categories as $category)
			<li>
			   <a href="{{ AH::route('category.show', $category->slug) }}">
			   	{{ $category->name }} ({{ $category->enterprises_count }})
			   </a>
			</li>
		@endforeach
	</ul>
</div>