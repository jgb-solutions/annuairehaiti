<script src="{{ AH::asset(elixir('js/all.js')) }}"></script>

@unless ( App::isLocal() )

	{{-- Facebook Page Plugin --}}
	@include('inc.fb-script')

	{{-- Google Analytics --}}
	{{-- @include('inc.ga') --}}

@endunless

<script>
	window.ah = {
		searchUrl: '{{ AH::route('search') }}'
	};
</script>
@section('scripts')
@show