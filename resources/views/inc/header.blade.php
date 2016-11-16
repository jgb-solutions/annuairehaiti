@include('inc.head')

<section class="header">
    <div class="container">
        <header>
        <h1 class="text-center">
            <a href="{{ AH::route('home') }}" rel="home"
            	title="{{ config('site.name') }}">
                	<img src="{{ AH::asset(config('site.banner_url'))}}" height="100">
            </a>
            {{-- <small>{{config('site.slogan')}}</small> --}}
        </h1>
        </header>
    </div>
</section>

@include('inc.navigation')

<section id="search-area" class="paddingTopBottom40" style="display:none;">
    <div class="container">
        <div class="row">
            {{-- <div class="col-sm-12"> --}}
                @include('inc.searchform')
            {{-- </div> --}}
        </div>
    </div>
</section>