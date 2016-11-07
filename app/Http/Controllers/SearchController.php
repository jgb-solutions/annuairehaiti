<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Enterprise;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  	public function index(Request $request)
	{
		$term = $request->q;

		// if ( $term == null ) {
		// 	return redirect('/');
		// }

		$results = Enterprise::search($term)->paginate(5);

		if ($request->ajax()) {
			return $results;
		}

		return view('pages.search', [
			'results' 	=> $results,
			'title' 	=> $results->count() ? "Résultats pour: $term" : "Aucun résultat pour: \"$term\"",
			'term' 		=> $term
		]);
	}
}