@extends('layouts.default')

@section('content')
    <section class="content">
        <div class="container">
        		<div class="row">
        			<div class="col-sm-6 col-sm-offset-3 bg-white left-content">
		            <div class="row">
		                @yield('page-small')
		            </div>
        			</div>
        		</div>
        </div>
    </section>

    {{-- @include('inc.cta') --}}

    @include('inc.sponsors')

@stop