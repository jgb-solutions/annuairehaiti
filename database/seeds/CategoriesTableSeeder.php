<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('categories')->delete();

		$categories = [
			'Administrations',
			'Agences de voyages',
			'Agroalimentaire',
			'Associations Professionnelles',
			'Automobile',
			'Autre',
			'Bar / Nightclub',
			'Bâtiment et Construction',
			'Boutique',
			'Coiffure / Beauté',
			'Commerce',
			'Communication',
			'Décoration',
			'Éducation',
			'Emploi',
			'Énergie',
			'Finance',
			'Formation',
			'Gymnastique',
			'Hygiène',
			'Immobilier',
			'Import / Export',
			'Industrie',
			'Informatique',
			'Internet',
			'Librairie',
			'Loisirs',
			'Papeterie',
			'Publicité',
			'Ressources Humaines',
			'Restaurant',
			'Santé',
			'Service',
			'Sport',
			'Télécommunication',
			'Tourisme',
			'Transport',
			'Urgence'
		];

		foreach ($categories as $categorie) {
			Category::create([
				'name' => $categorie,
				'slug' => $categorie
			]);
		}
	}
}
