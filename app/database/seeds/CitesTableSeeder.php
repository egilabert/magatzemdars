<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon;


class CitesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');
		$startDate = Carbon::now();

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '6', '16', '30', '00')	,
				'details' => 'Caperucita y el lobo al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '7', '12', '30', '00')	,
				'details' => 'Caperucita y el lobo al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '13', '16', '30', '00')	,
				'details' => 'Caperucita y el lobo al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '14', '12', '30', '00')	,
				'details' => 'Caperucita y el lobo al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '20', '16', '30', '00')	,
				'details' => 'Caperucita y el lobo al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '21', '12', '30', '00')	,
				'details' => 'Caperucita y el lobo al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '27', '16', '30', '00')	,
				'details' => 'Caperucita y el lobo al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '28', '12', '30', '00')	,
				'details' => 'Caperucita y el lobo al TEATRENEU',
				'user_id' => '1'

			]);






		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '6', '17', '00', '00')	,
				'details' => 'Blancaneus al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '7', '17', '00', '00')	,
				'details' => 'Blancaneus al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '13', '17', '00', '00')	,
				'details' => 'Blancaneus al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '14', '17', '00', '00')	,
				'details' => 'Blancaneus al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '20', '17', '00', '00')	,
				'details' => 'Blancaneus al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '21', '17', '00', '00')	,
				'details' => 'Blancaneus al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '27', '17', '00', '00')	,
				'details' => 'Blancaneus al TEATRENEU',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '28', '17', '00', '00')	,
				'details' => 'Blancaneus al TEATRENEU',
				'user_id' => '1'

			]);



		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '19', '18', '30', '00')	,
				'details' => 'Rateta a Valencia',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '20', '18', '00', '00')	,
				'details' => 'Rateta a Valencia',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '21', '17', '00', '00')	,
				'details' => 'Rateta a Valencia',
				'user_id' => '1'

			]);




		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '6', '17', '00', '00')	,
				'details' => 'La Sireneta al Teatre AQUITANIA',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '7', '12', '00', '00')	,
				'details' => 'La Sireneta al Teatre AQUITANIA',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '13', '17', '00', '00')	,
				'details' => 'La Sireneta al Teatre AQUITANIA',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '14', '17', '00', '00')	,
				'details' => 'La Sireneta a BESCANÓ',
				'user_id' => '1'

			]);


		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '21', '12', '00', '00')	,
				'details' => 'La Sireneta al Teatre AQUITANIA',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '27', '17', '00', '00')	,
				'details' => 'La Sireneta al Teatre AQUITANIA',
				'user_id' => '1'

			]);

		Cite::create([

				'data_programada' => Carbon::create('2014', '12', '28', '12', '00', '00')	,
				'details' => 'La Sireneta al Teatre AQUITANIA',
				'user_id' => '1'

			]);







		foreach(range(1, 1000) as $index)
		{
			Cite::create([

				'data_programada' => $startDate->addDays($faker->numberBetween(0,14)),
				'details' => $faker->paragraph($nb = 5),
				'user_id' => $faker->numberBetween( 2, 101 )

			]);
		}
	}

}