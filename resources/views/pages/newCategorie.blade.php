@extends('pages.page-full')

@section('title')
	Ajouter une nouvelle taxonomie
@stop

@section('page-full')
    <div class="col-sm-12">
        <h2 class="text-center">
            Ajouter une nouvelle catégorie
        </h2>
        <hr>
    </div>
    
    <div class="col-sm-8 col-sm-offset-2">
        <div class="row">
            <div class="col-sm-8">
                {{ Form::open(array('files' => true, 'method' => 'POST')) }}
                    <div class="form-group">
                        <label for="name">Nom de la catégorie</label>
                        <input
                            name="name"
                            type="text"
                            class="form-control"
                            id="name"
                            placeholder="Entrez le nom de la nouvelle catégorie"
                            required="required">
                    </div>

                    <div class="form-group">
                        <label for="description">Description de la catégorie</label>
                        <textarea name="description" id="description" class="form-control" rows="3" required="required" placeholder="Décrivez la catégorie"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image associée</label>
                        <input
                            name="image"
                            type="file"
                            class="form-control"
                            id="image"
                            required="required">
                    </div>

                    <button type="submit" class="btn btn-primary">
                    <i class="fa fa-paper-plane"></i> Ajouter</button>
                </form>
            </div>
        	<div class="col-sm-4 col-xs-6">
                <h3>
                    <a href="/categories">
                        Catégories
                    </a>
                </h3>
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
            </div>
        </div>
    </div>
@stop