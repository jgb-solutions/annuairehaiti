<script>
	window.ah = {searchUrl: '{{ AH::route('search') }}'};
</script>

<script src="{{ AH::asset(elixir('js/vendor.js')) }}"></script>
<script src="{{ AH::asset(elixir('js/app.js')) }}"></script>

{{--@unless ( App::isLocal() )--}}

	{{-- Facebook Page Plugin --}}
	{{--@include('inc.fb-script')--}}

	{{-- Google Analytics --}}
	{{-- @include('inc.ga') --}}

{{--@endunless--}}

@section('scripts')
@show