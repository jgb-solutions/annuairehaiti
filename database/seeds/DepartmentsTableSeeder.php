<?php

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
   public function run()
   {
		DB::table('departments')->delete();

		$departments = [
			'Artibonite',
			'Autre',
			'Centre',
			'Grand\'Anse',
			'Nippes',
			'Nord',
			'Nord-Est',
			'Nord-Ouest',
			'Ouest',
			'Sud',
			'Sud-Est'
		];

		foreach ($departments as $department) {
			Department::create([
				'name' => $department,
				'slug' => $department
			]);
		}
   }
}
