@extends('layouts.page')

@section('title')
    {{$title = $city->name }}
@stop

@section('page')

    <h2 class="text-center">
        <span class="fa fa-th"></span> {{$city->name }} <small>{{ $page }}</small>
    </h2>

    <br>

    @include('inc.alert')

   @if ($enterprises->count())
      <div class="row">
      @foreach( $enterprises as $enterprise )
         <div class="col-sm-4 col-xs-6">
            @include('enterprises.unit')
         </div>
      @endforeach
      </div>

        <div class="col-sm-12 text-center">

            {{ $enterprises->links() }}

        </div>
    @else
        <p>
            Nous sommes d'&eacute;sol&eacute;s, mais il n'y a pas encore
            d'entreprises dans la cat&eacute;gorie "<b>{{ $city->name }}</b>"
        </p>
    @endif

@stop