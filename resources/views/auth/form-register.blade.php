<form action="{{AH::route('auth.register')}}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="regname">@lang('form.users.firstname')</label>
		<input
			name="firstname"
			type="name"
			class="form-control"
			id="firstname"
			placeholder="@lang('form.users.firstname')"
			required value="{{ old('firstname') }}">
	</div>
	<div class="form-group">
		<label for="regname">@lang('form.users.lastname')</label>
		<input
			name="lastname"
			type="name"
			class="form-control"
			id="lastname"
			placeholder="@lang('form.users.lastname')"
			required
			value="{{ old('lastname') }}">
	</div>
	<div class="form-group">
		<label for="regemail">@lang('form.users.email')</label>
		<input
			name="email"
			type="email"
			class="form-control"
			id="regemail"
			placeholder="@lang('form.users.email')"
			required
			value="{{ old('email') }}">
	</div>
	<div class="form-group">
		<label for="regpassword">@lang('form.users.password')</label>
		<input
			name="password"
			type="password"
			class="form-control"
			id="regpassword"
			placeholder="@lang('form.users.password')"
			required>
	</div>
	<div class="form-group">
		<label for="regpasswordconfirm">@lang('form.users.password_confirm')</label>
		<input
			name="password_confirm"
			type="password"
			class="form-control"
			id="regpasswordconfirm"
			placeholder="@lang('form.users.password_confirm')"
			required>
	</div>

	<button type="submit" class="btn btn-primary">
		<i class="fa fa-user"></i> @lang('form.users.submit.register')
	</button>
</form>