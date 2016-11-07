@if (session('message'))
	<div class="alert alert-{{ session('status') }} fade in" role="alert" id="alert" @if(isset($dismissable)) {{'dismissable'}} @endif>
		<button type="button" class="close" data-dismiss="alert">
			<span aria-hidden="true">×</span>
			<span class="sr-only">@lang('messages.close')</span>
		</button>
		<p>
			<strong>{!! session('message') !!}</strong>
		</p>
   </div>
@endif