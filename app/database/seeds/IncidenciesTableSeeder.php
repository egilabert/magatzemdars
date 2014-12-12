<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon;

class IncidenciesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');
		$startDate = Carbon::now();

		foreach(range(1, 1000) as $index)
		{
			Incidencie::create([

				'tipus' => 'queixa',
				'observacions' => $faker->paragraph($nb = 5),
				'user_id' => $faker->numberBetween( 1, 100 ),
				'incidible_id' => $faker->numberBetween( 1, 100 ),
				'incidible_type' => 'Client'

			]);
		}
	}

}