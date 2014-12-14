<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon;

class ObservacionsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');
		$startDate = Carbon::now();

		/*foreach(range(1, 1000) as $index)
		{
			Observacion::create([

				'observacions' => $faker->paragraph($nb = 5),
				'user_id' => $faker->numberBetween( 1, 100 ),
				'observable_id' => $faker->numberBetween( 1, 100 ),
				'observable_type' => 'Client'

			]);
		}*/
	}

}