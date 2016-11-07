@extends('pages.page-full')

@section('title')
	{{ $title }}
@stop

@section('page-full')
    <div class="col-sm-12">
        <h2 class="text-center">
            {{ $title }}
        </h2>
        <hr>
    </div>
    
    <div class="col-sm-8 col-sm-offset-2">
        <div class="row">
            <div class="col-sm-8">
                {{ Form::open(array('files' => true, 'method' => 'POST')) }}
                    <div class="form-group">
                        <label for="name">Nom du département</label>
                        <input
                            name="name"
                            type="text"
                            class="form-control"
                            id="name"
                            placeholder="Entrez le nom du nouveau département"
                            required="required">
                    </div>

                    <button type="submit" class="btn btn-primary">
                    <i class="fa fa-paper-plane"></i> Ajouter</button>
                </form>
            </div>
        	<div class="col-sm-4 col-xs-6">
                <h3>Départements</h3>
                <ul class="list-unstyled">
                    @foreach ( $departements as $departement )
                    <li>
                        <a href="/departement/{{ $departement->slug }}">
                            {{ $departement->name }}
                        </a>
                        <a href="/departement/delete/{{ $departement->slug }}"
                            title="Effacer le département {{ $departement->name }}">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="/departement/edit/{{ $departement->slug }}"
                            title="Modifier la catégorie {{ $departement->name }}">
                            <i class="fa fa-edit"></i>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop