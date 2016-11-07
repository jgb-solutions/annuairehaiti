<form role="form" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="email">@lang('form.account.email')</label>
		<input
			name="email" type="email"
			class="form-control" id="email"
			placeholder="@lang('form.account.email')" required
			value="{{old('email')}}">
	</div>
	<div class="form-group">
		<label for="password">@lang('form.account.password')</label>
		<input
			name="password" type="password"
			class="form-control" id="password"
			placeholder="@lang('form.account.password')" required>
	</div>
	<button type="submit" class="btn btn-primary">
		<i class="fa fa-sign-in"></i>
		@lang('form.account.submit.signin')
	</button>
</form>