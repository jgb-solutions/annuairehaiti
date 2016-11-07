<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Departement;
use App\Models\Ville;
use App\Models\Commune;

class TaxController extends Controller
{
	public function get_index()
	{
		$categories 	= Category::orderBy('name')->get();
		$departements 	= Departement::orderBy('name')->get();
		$villes 		= Ville::orderBy('name')->get();
		$communes 		= Commune::orderBy('name')->get();

		return view('pages.newIndex')
					->with('categories', $categories)
					->with('departements', $departements)
					->with('villes', $villes)
					->with('communes', $communes);
	}

	public function get_categorie()
	{
		$categories = Category::all();

		return view('pages.newCategorie')
					->with('categories', $categories);
	}

	public function post_categorie()
	{
		$name 			= Input::get('name');
		$description 	= Input::get('description');

		/************ Category Image Uploading *****************/
		$img 			= Input::file('image');
		$imgExt 		= $img->getClientOriginalExtension();
		$imgName 		= Str::slug( $name, '-' ) . '-' . Str::random( 32 ) . '.' . $imgExt;
		$imgUploadPath 	= Config::get('site.imgUploadPath');
		$logoSuccess 	= $img->move( $imgUploadPath, $imgName );

		if ( $logoSuccess )
		{
			$category = new Category;
			$category->name = $name;
			$category->slug = Str::slug($name, '-');
			$category->description = $description;
			$category->image = $imgName;
			$category->save();

			return Redirect::to('/new/categorie');
		} else {
			return 'Failed to create category';
		}
	}

	public function deleteCategory( $slug )
	{
		Category::whereSlug( $slug )->first()->delete();

		return Redirect::to('/new/categorie');
	}

	public function editCategory( $slug )
	{
		$categories = Category::all();
		$category = Category::whereSlug( $slug )->first();

		return view('pages.editCategory')
					->with('categories', $categories)
					->with('category', $category)
					->with('title', "Modifier la catégorie $category->name");
	}

	public function updateCategory( $slug )
	{
		$name 			= Input::get('name');
		$description 	= Input::get('description');

		$category = Category::whereSlug( $slug )->first();

		$category->name = $name;
		$category->description = $description;
		$category->slug = Str::slug($name, '-');

		/************ Category Image Uploading *****************/
		if ( Input::file('image') )
		{
			$img 			= Input::file('image');
			$imgExt 		= $img->getClientOriginalExtension();
			$imgName 		= Str::slug( $name, '-' ) . '-' . Str::random( 32 ) . '.' . $imgExt;
			$imgUploadPath 	= Config::get('site.imgUploadPath');
			$uploadSuccess 	= $img->move( $imgUploadPath, $imgName );

			if ( $uploadSuccess )
			{
				$category->image = $imgName;
			}
		}
		$category->save();

		return Redirect::to('/new/categorie');

	}

	public function get_departement()
	{
		$departements = Departement::all();

		return view('pages.newDepartement')
					->with('departements', $departements)
					->with('title', 'Ajouter un nouveau département');
	}

	public function post_departement()
	{
		$name = Input::get('name');
		$slug = Str::slug($name, '-');

		$departement = new Departement;
		$departement->name = $name;
		$departement->slug = $slug;
		$departement->save();

		return Redirect::to('/new/departement');
	}

	public function get_ville()
	{
		return view('pages.newVille');
	}

	public function get_commune()
	{
		return view('pages.newCommune');
	}
}