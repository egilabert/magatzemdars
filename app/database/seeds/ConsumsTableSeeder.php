<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon;

class ConsumsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');
		$startDate = Carbon::now();

		foreach(range(1, 1000) as $index)
		{
			Consum::create([

				'producte' => 'bolo',
				'preu' => $faker->numberBetween( 1000, 14000 ),
				'observacions' => $faker->paragraph($nb = 5),
				'user_id' => $faker->numberBetween( 1, 100 ),
				'consumible_id' => $faker->numberBetween( 1, 100 ),
				'consumible_type' => 'Client'

			]);
		}
	}

}