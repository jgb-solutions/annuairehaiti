<form action="{{AH::route('account.update')}}" method="post">
	{{ csrf_field() }}
	{{ method_field('PUT') }}

	<div class="form-group">
		<label for="regname">@lang('form.account.firstname')</label>
		<input
			name="firstname"
			type="name"
			class="form-control"
			id="firstname"
			placeholder="@lang('form.account.firstname')"
			required value="{{ $user->firstname }}">
	</div>
	<div class="form-group">
		<label for="regname">@lang('form.account.lastname')</label>
		<input
			name="lastname"
			type="name"
			class="form-control"
			id="lastname"
			placeholder="@lang('form.account.lastname')"
			required
			value="{{ $user->lastname }}">
	</div>
	<div class="form-group">
		<label for="regemail">@lang('form.account.email')</label>
		<input
			name="email"
			type="email"
			class="form-control"
			id="regemail"
			placeholder="@lang('form.account.email')"
			required
			value="{{ $user->email }}">
	</div>
	<div class="form-group">
		<label for="regpassword">@lang('form.account.password')</label>
		<input
			name="password"
			type="password"
			class="form-control"
			id="regpassword"
			placeholder="@lang('form.account.password')">
	</div>
	<div class="form-group">
		<label for="regpasswordconfirm">@lang('form.account.password_confirmation')</label>
		<input
			name="password_confirm"
			type="password"
			class="form-control"
			id="regpasswordconfirm"
			placeholder="@lang('form.account.password_confirmation')">
	</div>

	<button type="submit" class="btn btn-primary">
		<i class="fa fa-user"></i> @lang('form.account.submit.edit')
	</button>
</form>