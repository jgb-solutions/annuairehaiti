@extends('layouts.default')

@section('content')
    <section class="content">
        <div class="container">
        		<div class="row">
        			<div class="col-sm-8 col-sm-offset-2 bg-white left-content">
		            <div class="row">
		                @yield('page-average')
		            </div>
        			</div>
        		</div>
        </div>
    </section>

    {{-- @include('inc.cta') --}}

    @include('inc.sponsors')

@stop