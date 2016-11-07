@extends('layouts.default')

@section('content')

       <section class="content">

        	<div class="container">
            		<div class="row">
                        {{-- <div class="col-sm-8 left-content bg-white"> --}}
                		<div class="col-sm-8">
                			@yield('page')
                		</div>

                		@include('inc.sidebar')
            		</div>
        	</div>
    	</section>

    {{-- // @include('inc.cta') --}}

    @include('inc.sponsors')

@stop