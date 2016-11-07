@extends('pages.page-full')

@section('title')
    {{ $title }}
@stop

@section('page-full')

    <h2 class="text-center">
        <span class="fa fa-th"></span>
        {{ $title }}
    </h2>

    @if ( $categories )
        @foreach ( $categories as $category )
        @if ( $category->enterprises->count() > 0 )
            <div class="col-sm-6">
                <hr>
                <div class="row">
                    <div class="col-sm-5 col-xs-5">
                        <a href="/categorie/{{ $category->slug }}">
                            <img
                                src="/uploads/images/{{ $category->image }}"
                                class="img-responsive img-rounded img-bordered"
                                alt="{{ $category->name }}"
                                height="319" width="319">
                        </a>
                    </div>
                    <div class="col-sm-7 col-xs-7">
                        <h3 class="noMarginTop forced">
                            <a
                                href="/categorie/{{ $category->slug }}"
                                title="Cette catégorie {{ $category->entreprises->count() ? 'a ' . $category->entreprises->count() . ' entreprises' : 'n\'a pas encore d\'entreprises' }}">
                                {{ $category->name }}
                                ({{ $category->entreprises->count() }})
                            </a>
                        </h3>
                        {{ $category->description }}
                    </div>
                </div>
            </div>
        @endif
        @endforeach
    @endif
@stop