<?php

namespace App\Http\Controllers;

use Cache;
use App\Models\Category;
use App\Models\Enterprise;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		$enterprises = Cache::rememberForever('pages.home', function() {
			return Enterprise::latest()->take(16)->get();
		});

		return view('pages.home', [
			'enterprises' => $enterprises
		]);
	}

	public function contactPage()
	{
		return view('pages.contact');
	}

	public function categories()
	{
		$categories = Category::orderBy('name')->get();

		return view('pages.categories')
			->with('categories', $categories)
			->with('title', 'Catégories d\'Entreprises');
	}

	public function category( $slug )
	{
		$category = Category::whereSlug( $slug )->first();
		$entreprises = Enterprise::where('category_id', $category->id)->paginate(1);

		return view('pages.category')
			->with('category', $category)
			->with('title', "Catégorie d'Entreprises: $category->name")
			->with('entreprises', $entreprises);
	}

	public function departement( $slug )
	{
		$departement = Departement::whereSlug( $slug )->first();
		$entreprises = Enterprise::where('departement_id', $departement->id)->paginate(1);

		return view('pages.departement')
			->with('title', "Entreprises dans le département: $departement->name")
			->with('entreprises', $entreprises);
	}

	public function ville( $slug )
	{
		$ville = Ville::whereSlug( $slug )->first();
		$entreprises = Enterprise::where('ville_id', $ville->id)->paginate(1);

		return view('pages.ville')
			->with('title', "Entreprises dans la ville de: $ville->name")
			->with('entreprises', $entreprises);
	}

	public function commune( $slug )
	{
		$commune = Commune::whereSlug( $slug )->first();
		$entreprises = Enterprise::where('departement_id', $commune->id)->paginate(1);

		return view('pages.commune')
			->with('title', "Entreprises dans la commune de: $commune->name")
			->with('entreprises', $entreprises);
	}
}