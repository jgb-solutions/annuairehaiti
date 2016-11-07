<?php

namespace App\Http\Controllers;

use Cache;
use App\Models\Town;
use App\Http\Requests;
use Illuminate\Http\Request;

class TownsController extends Controller
{
	public function index()
	{
		return view('towns.index', [
			'towns' => Town::withCount('enterprises')->has('enterprises')->get(),
			'title' => trans('text.towns.all')
		]);
	}

	public function show($slug, Request $request)
	{
		$key = 'town_' . $slug . $request->page;

		$data = Cache::rememberForever($key, function() use ($slug) {
			$town = town::whereSlug($slug)->firstOrFail();

			$enterprises = $town->paginatedEnterprises(1);

			return [
				'town' => $town,
				'enterprises' => $enterprises,
			];
		});

		$data['page'] = $request->has('page') ? "(page $request->page)" : '';

		return view('towns.show', $data);
	}
}
