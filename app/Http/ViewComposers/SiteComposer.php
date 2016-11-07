<?php

namespace App\Http\ViewComposers;

use Auth;
use Cache;
use App\Models\City;
use App\Models\Town;
use App\Models\Category;
use Illuminate\View\View;
use App\Models\Department;
use App\Models\Enterprise;

class SiteComposer
{
	public function categories(View $view)
	{
		$key = 'allCategories';

		$categories = Cache::rememberForever($key, function() {
			return Category::withCount('enterprises')
				->has('enterprises')
				->by('name')
				->get();
		});

		$view->with(compact('categories'));
	}

	public function departments(View $view)
	{
		$key = 'allDepartments';

		$departments = Cache::rememberForever($key, function() {
			return Department::withCount('enterprises')
				->has('enterprises')
				->by('name')
				->get();
		});

		$view->with(compact('departments'));
	}

	public function cities(View $view)
	{
		$key = 'allCities';

		$cities = Cache::rememberForever($key, function() {
			return City::withCount('enterprises')
						->has('enterprises')
						->by('name')
						->get();
		});

		$view->with(compact('cities'));
	}

	public function towns(View $view)
	{
		$key = 'allTowns';

		$towns = Cache::rememberForever($key, function() {
			return Town::withCount('enterprises')
						->has('enterprises')
						->by('name')
						->get();
		});

		$view->with(compact('towns'));
	}

	public function sponsors(View $view)
	{
		$key = 'allSponsors';

		$sponsors = Cache::rememberForever($key, function() {
			return Enterprise::featured()->latest()->get();
		});

		$view->with([
			'sponsors' => $sponsors
		]);
	}

	public function navigation(View $view)
	{
		$view->with([
			'user' => Auth::user()
		]);
	}
}