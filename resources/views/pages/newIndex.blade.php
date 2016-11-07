@extends('pages.page-full')

@section('title')
	Ajouter une nouvelle taxonomie
@stop

@section('page-full')
    <div class="col-sm-12">
        <h2 class="text-center">
            Ajouter une nouvelle taxonomie
        </h2>
        <hr>
    </div>

	<div class="col-sm-3 col-xs-6">
        <h3>Catégories</h3>
        <ul class="list-unstyled">
            @foreach ( $categories as $category )
            <li>
                <a href="/categorie/{{ $category->slug }}">
                    {{ $category->name }}
                </a>
                <a
                    href="/categorie/delete/{{ $category->slug }}"
                    onclick="return confirm('Êtes-vous sûr?')"
                    title="Effacer la catégorie {{ $category->name }}">
                    <i class="fa fa-trash"></i>
                </a>
                <a href="/categorie/edit/{{ $category->slug }}"
                    title="Modifier la catégorie {{ $category->name }}">
                    <i class="fa fa-edit"></i>
                </a>
            </li>
            @endforeach
        </ul>

        <a
            class="btn btn-primary"
            href="/new/categorie">Nouvelle Catégorie</a>
    </div>

    <div class="col-sm-3 col-xs-6">
        <h3>Départements</h3>
        <ul class="list-unstyled">
            @foreach ( $departements as $departement )
            <li>
                <a href="/departement/{{ $departement->slug }}">
                    {{ $departement->name }}
                </a>
                <a
                    href="/departement/delete/{{ $departement->slug }}"
                    onclick="return confirm('Êtes-vous sûr?')"
                    title="Effacer le département {{ $departement->name }}">
                    <i class="fa fa-trash"></i>
                </a>
                <a href="/departement/edit/{{ $departement->slug }}"
                    title="Modifier le département {{ $departement->name }}">
                    <i class="fa fa-edit"></i>
                </a>
            </li>
            @endforeach
        </ul>

        <a
            class="btn btn-primary"
            href="/new/departement">Nouveau département
        </a>
    </div>

    <div class="col-sm-3 col-xs-6">
        <h3>Ville</h3>
        <ul class="list-unstyled">
            @foreach ( $villes as $ville )
            <li>
                <a href="/ville/{{ $ville->slug }}">
                    {{ $ville->name }}
                </a>
                <a
                href="/ville/delete/{{ $ville->slug }}"
                onclick="return confirm('Êtes-vous sûr?')"
                title="Effacer la ville {{ $ville->name }}">
                <i class="fa fa-trash"></i>
            </a>
            <a href="/ville/edit/{{ $ville->slug }}"
                title="Modifier la ville {{ $ville->name }}">
                <i class="fa fa-edit"></i>
            </a>
            </li>
            @endforeach
        </ul>

        <a
            class="btn btn-primary"
            href="/new/ville">Nouvelle Ville
        </a>
    </div>

    <div class="col-sm-3 col-xs-6">
        <h3>Communes</h3>
        <ul class="list-unstyled">
            @foreach ( $communes as $commune )
            <li>
                <a href="/commune/{{ $commune->slug }}">
                    {{ $commune->name }}
                </a>
                <a
                    href="/commune/delete/{{ $category->slug }}"
                    onclick="return confirm('Êtes-vous sûr?')"
                    title="Effacer la commune {{ $commune->name }}">
                    <i class="fa fa-trash"></i>
                </a>
                <a href="/commune/edit/{{ $commune->slug }}"
                    title="Modifier la commune {{ $commune->name }}">
                    <i class="fa fa-edit"></i>
                </a>
            </li>
            @endforeach
        </ul>

        <a
            class="btn btn-primary"
            href="/new/commune">Nouvelle Commune
        </a>
    </div>
@stop