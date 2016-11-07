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
                {{ Form::open(array(
                                'files' => true,
                                'method' => 'PUT'))
                }}
                    <div class="form-group">
                        <label for="name">Nom de la catégorie</label>
                        <input
                            name="name"
                            type="text"
                            class="form-control"
                            id="name"
                            placeholder="Entrez le nom de la nouvelle catégorie"
                            required="required"
                            value="{{ $category->name }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description de la catégorie</label>
                        <textarea name="description" id="description" class="form-control" rows="3" required="required" placeholder="Décrivez la catégorie" >{{ $category->description }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image associée</label>
                        <input
                            name="image"
                            type="file"
                            class="form-control"
                            id="image">
                    </div>

                    <button type="submit" class="btn btn-primary">
                    <i class="fa fa-paper-plane"></i> Ajouter</button>
                </form>
            </div>
        	<div class="col-sm-4 col-xs-6">
                <h3>Catégories</h3>
                <ul class="list-unstyled">
                    @foreach ( $categories as $category )
                    <li>
                        <a href="/categorie/{{ $category->slug }}">
                            {{ $category->name }}
                        </a>
                        <a href="/categorie/delete/{{ $category->slug }}"
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