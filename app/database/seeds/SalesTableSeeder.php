<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 1) as $index)
		{
			Sale::create([

				'sala' => 'Gran',
				'metres' => 90,
				'info' => 'Sala de 90m2 ideal per assajos, cursos o classes. Terra de parquet, espatlleres i miralls de paret que es poden tapar en el cas que no us interessin.',
				'foto1' => '/assets/img/sala_gran1.jpg',
				'foto2' => '/assets/img/sala_gran2.jpg'
			]);

			Sale::create([

				'sala' => 'Petita',
				'metres' => 50,
				'info' => 'Sala de 50m2 ideal per a assajos, cursos o clases amb un gran finestral orientat al carrer. Terra de parquet o linóleum (goma) segons les vostres necessitats i miralls de paret que es poden tapar en el cas que no us interessin.',
				'foto1' => '/assets/img/sala_petita1.jpg',
				'foto2' => '/assets/img/sala_petita2.jpg'
			]);

			Sale::create([

				'sala' => 'Actes',
				'metres' => 200,
				'info' => 'Sala de 200m2 ideals per assajos, cursos, classes, presentacions i representacions de petit format. L’espai disposa d’escenari, bambolines, camerins per homes i dones i lavabos.  També hi ha un sistema de focus i equip de música amb altaveus. Capacitat per 100 persones assegudes.',
				'foto1' => '',
				'foto2' => ''
			]);

			Sale::create([

				'sala' => 'Reunions',
				'metres' => 30,
				'info' => 'Sala de 30m2 ideal per a reunions. Amb una gran taula central i capacitat per 20 persones assegudes.',
				'foto1' => '',
				'foto2' => ''
			]);
		}
	}

}