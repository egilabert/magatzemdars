<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon;

class ComunicacionsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');
		$startDate = Carbon::now();

		foreach(range(1, 1000) as $index)
		{
			Comunicacion::create([

				'tipus' => 'trucada',
				'hora_progamada' => $startDate->addDays($faker->numberBetween( 0, 14 )),
				'observacions' => $faker->paragraph($nb = 5),
				'user_id' => $faker->numberBetween( 1, 100 ),
				'comunicable_id' => $faker->numberBetween( 1, 100 ),
				'comunicable_type' => 'Client'

			]);
		}
	}

}