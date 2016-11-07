<?php

namespace App\Http\Controllers;

use Cache;
use App\Models\City;
use App\Http\Requests;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
	public function index()
	{
		return view('cities.index', [
			'cities' => City::withCount('enterprises')->has('enterprises')->get(),
			'title' => trans('text.cities.all')
		]);
	}

	public function show($slug, Request $request)
	{
		$key = 'city_' . $slug . $request->page;

		$data = Cache::rememberForever($key, function() use ($slug) {
			$city = city::whereSlug($slug)->firstOrFail();

			$enterprises = $city->paginatedEnterprises(1);

			return [
				'city' => $city,
				'enterprises' => $enterprises,
			];
		});

		$data['page'] = $request->has('page') ? "(page $request->page)" : '';

		return view('cities.show', $data);
	}
}
