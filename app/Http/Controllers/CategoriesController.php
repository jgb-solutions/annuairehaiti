<?php

namespace App\Http\Controllers;

use Cache;
use App\Http\Requests;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
	public function index()
	{
		return view('categories.index', [
			'categories' => Category::withCount('enterprises')->has('enterprises')->get(),
			'title' => trans('text.categories.all')
		]);
	}

	public function show($slug, Request $request)
	{
		$key = 'category_' . $slug . $request->page;

		$data = Cache::rememberForever($key, function() use ($slug) {
			$category = Category::whereSlug($slug)->firstOrFail();

			$enterprises = $category->paginatedEnterprises(1);

			return [
				'category' => $category,
				'enterprises' => $enterprises,
			];
		});

		$data['page'] = $request->has('page') ? "(page $request->page)" : '';

		return view('categories.show', $data);
	}

	// public function create(CreateCategoryRequest $request)
	// {
	// 	$name 			= Input::get('name');
	// 	$description 	= Input::get('description');

	// 	/************ Category Image Uploading *****************/
	// 	$img 			= Input::file('image');
	// 	$imgExt 		= $img->getClientOriginalExtension();
	// 	$imgName 		= Str::slug( $name, '-' ) . '-' . Str::random( 32 ) . '.' . $imgExt;
	// 	$imgUploadPath 	= Config::get('site.imgUploadPath');
	// 	$logoSuccess 	= $img->move( $imgUploadPath, $imgName );

	// 	if ( $logoSuccess )
	// 	{
	// 		$category = new Category;
	// 		$category->name = $name;
	// 		$category->slug = Str::slug($name, '-');
	// 		$category->description = $description;
	// 		$category->image = $imgName;
	// 		$category->save();

	// 		return Redirect::to('/new/categorie');
	// 	} else {
	// 		return 'Failed to create category';
	// 	}
	// }

	// public function deleteCategory( $slug )
	// {
	// 	Category::whereSlug( $slug )->first()->delete();

	// 	return Redirect::to('/new/categorie');
	// }
}
