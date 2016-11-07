@extends('layouts.default')

@section('content')
    <section class="content">
        <div class="container bg-white left-content">
        {{-- <div class="container"> --}}
            <div class="row">
                @yield('page-full')
            </div>
        </div>
    </section>

    {{-- @include('inc.cta') --}}

    @include('inc.sponsors')

@stop