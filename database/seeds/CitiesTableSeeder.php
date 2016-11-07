<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
   public function run()
   {
      DB::table('cities')->delete();

		$cities = [
			'Acul-du-Nord',
			'Anse-d\'Hainault',
			'Anse-à-Veau',
			'Aquin',
			'Arcahaie',
			'Bainet',
			'Baradères',
			'Belle-Anse',
			'Borgne',
			'Cap-Haïtien',
			'Cerca-la-Source',
			'Chardonnières',
			'Corail',
			'Coteaux',
			'Croix-des-Bouquets',
			'Dessalines',
			'Fort-Liberté',
			'Grande-Rivière-du-Nord',
			'Gros-Morne',
			'Hinche',
			'Île de la Gonâve',
			'Jacmel',
			'Jérémie',
			'Lascahobas',
			'Léogâne',
			'Les Cayes',
			'Limbé',
			'Marmelade',
			'Miragoâne',
			'Mirebalais',
			'Môle-Saint-Nicolas',
			'Ouanaminthe',
			'Plaisance',
			'Port-au-Prince',
			'Port-de-Paix',
			'Port-Salut',
			'Saint-Louis-du-Nord',
			'Saint-Raphaël',
			'Saint-Marc',
			'Trou-du-Nord',
			'Vallières',
		];

		foreach ($cities as $city) {
			City::create([
				'name' => $city,
				'slug' => $city
			]);
		}
   }
}
