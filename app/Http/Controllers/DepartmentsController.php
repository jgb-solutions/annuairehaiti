<?php

namespace App\Http\Controllers;

use Cache;
use App\Http\Requests;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
	public function index()
	{
		return view('departments.index', [
			'categories' => department::withCount('enterprises')->has('enterprises')->get(),
			'title' => trans('text.departments.all')
		]);
	}

	public function show($slug, Request $request)
	{
		$key = 'department_' . $slug . $request->page;

		$data = Cache::rememberForever($key, function() use ($slug) {
			$department = Department::whereSlug($slug)->firstOrFail();

			$enterprises = $department->paginatedEnterprises(1);

			return [
				'department' => $department,
				'enterprises' => $enterprises,
			];
		});

		$data['page'] = $request->has('page') ? "(page $request->page)" : '';

		return view('departments.show', $data);
	}
}
