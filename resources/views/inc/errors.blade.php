@if(count($errors))
	<div class="panel panel-danger">
		 <div class="panel-heading">
	    	<h3 class="panel-title">
	    		<i class="fa fa-exclamation-triangle"></i>
	    		@lang('messages.correct-error')
	    	</h3>
	  	</div>
		<ul class="list-group">
			@foreach ($errors->all() as $error)
				<li class="list-group-item">{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif