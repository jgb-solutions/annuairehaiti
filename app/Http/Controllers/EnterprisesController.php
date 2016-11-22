<?php

namespace App\Http\Controllers;

use AH;
use Auth;
use Cache;
use App\Models\City;
use App\Models\User;
use App\Models\Town;
use App\Models\Category;
use App\Models\Enterprise;
use App\Models\Department;
use App\Http\Requests\CreateEnterpriseRequest;
use App\Http\Requests\UpdateEnterpriseRequest;

class EnterprisesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->only([
			'getCreateForm',
			'create'
		]);
	}

	public function index()
	{
		$enterprises = Enterprise::latest()->paginate(10);

		return view('enterprises.index', compact('enterprises'));
	}

	public function show($slug)
	{
		$key = 'enterprise_' . $slug;

		$data = Cache::rememberForever($key, function() use ($slug) {
			$enterprise = Enterprise::with(
				'category', 'department', 'city', 'town'
			)->bySlug($slug)->first();

			$related = Enterprise::related($enterprise)->get();

			return [
				'enterprise' => $enterprise,
				'related' => $related,
			];
		});

		return view('enterprises.show', $data);
	}

	public function getCreateForm()
	{
		$key = 'enterprise_create';

		$data = Cache::rememberForever($key, function() {
			return [
				'categories'	=> Category::all(),
				'cities'			=> City::all(),
				'towns' 			=> Town::all(),
				'departments' 	=> Department::all()
			];
		});

		return view('enterprises.create', $data);
	}

	public function create(CreateEnterpriseRequest $request)
	{
		if (Enterprise::whereEmail($request->email)->whereName($request->name)->exists()) {
			return redirect(AH::route('enterprises.index'))
				->withMessage(trans('messages.enterprises.exists'))
				->withStatus('warning');
		}

		$uploadedLogo = AH::store($request->file('logo'));

		$uploadedHeaderImage = AH::store($request->file('header_image'));

		if ($uploadedLogo->success && $uploadedHeaderImage->success) {
			Auth::user()->enterprises()->create([
				'name' 			=> $request->name,
				'slug'			=> str_slug($request->name),
				'telephone' 	=> $request->telephone,
				'fax' 			=> $request->fax,
				'email' 			=> $request->email,
				'website' 		=> $request->website,
				'address' 		=> $request->address,
				'category_id' 	=> $request->category_id,
				'department_id'=> $request->department_id,
				'city_id' 		=> $request->city_id,
				'town_id' 		=> $request->town_id,
				'details' 		=> $request->details,
				'logo' 			=> $uploadedLogo->name,
				'header_image' => $uploadedHeaderImage->name,
				'facebook' 		=> $request->facebook,
				'twitter' 		=> $request->twitter,
				'google' 		=> $request->google,
				'map' 			=> $request->map,
			]);

			return redirect(AH::route('enterprises.index'))
				->withMessage(trans('messages.enterprises.created'))
				->withStatus('success');
		}

		Cache::forget('pages.home');
	}

	public function getEditForm(Enterprise $enterprise)
	{
		$key = 'taxonomies_all';

		$data = Cache::rememberForever($key, function() {
			return [
				'categories'	=> Category::all(),
				'cities'			=> City::all(),
				'towns' 			=> Town::all(),
				'departments' 	=> Department::all()
			];
		});

		$data['enterprise'] = $enterprise;

		return view('enterprises.edit', $data);
	}

	public function update(UpdateEnterpriseRequest $request, Enterprise $enterprise)
	{
		$key = 'enterprise_' . $enterprise->slug;

		$enterprise->name 			= $request->name;
		$enterprise->slug			= str_slug($request->name);
		$enterprise->telephone 		= $request->telephone;
		$enterprise->fax 			= $request->fax;
		$enterprise->email 			= $request->email;
		$enterprise->website 		= $request->website;
		$enterprise->address 		= $request->address;
		$enterprise->category_id 	= $request->category_id;
		$enterprise->department_id	= $request->department_id;
		$enterprise->city_id 		= $request->city_id;
		$enterprise->town_id 		= $request->town_id;
		$enterprise->details 		= $request->details;
		$enterprise->facebook 		= $request->facebook;
		$enterprise->twitter 		= $request->twitter;
		$enterprise->google 		= $request->google;
		$enterprise->map 			= $request->map;
		$enterprise->featured 		= $request->featured ? 1 : 0;

		if ($request->hasFile('logo')) {
			$uploadedLogo = AH::store($request->file('logo'));

			if ($uploadedLogo->success) {
				$enterprise->logo = $uploadedLogo->name;
			}
		}

		if ($request->hasFile('header_image')) {
			$uploadedHeaderImage = AH::store($request->file('header_image'));

			if ($uploadedHeaderImage->success) {
				$enterprise->header_image = $uploadedHeaderImage->name;
			}
		}

		$enterprise->save();

		Cache::forget('pages.home');
		Cache::forget($key);
		Cache::forget('allSponsors');

		return redirect($enterprise->url)
			->withMessage(trans('messages.enterprises.updated'))
			->withStatus('success');
	}

	public function destroy(Enterprise $enterprise)
	{
		$key = 'enterprise_' . $enterprise->slug;

		$this->authorize('destroy', $enterprise);

		$enterprise->delete();

		Cache::forget('pages.home');
		Cache::forget($key);
		Cache::forget('allSponsors');

		return redirect('/')
			->withMessage(trans('messages.enterprises.deleted'))
			->withStatus('success');
	}
}