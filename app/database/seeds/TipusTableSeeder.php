<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TipusTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 1) as $index)
		{
			Tipu::create([
				'tipus' => 'Ajuntament'
			]);

			Tipu::create([
				'tipus' => 'Casa de colònies'
			]);

			Tipu::create([
				'tipus' => 'Companyia'
			]);

			Tipu::create([
				'tipus' => 'Empresa'
			]);

			Tipu::create([
				'tipus' => 'Entitat'
			]);

			Tipu::create([
				'tipus' => 'Escola'
			]);

			Tipu::create([
				'tipus' => 'Persona'
			]);

			Tipu::create([
				'tipus' => 'Programador'
			]);

			Tipu::create([
				'tipus' => 'Teatre'
			]);

			Tipu::create([
				'tipus' => 'Treballador'
			]);
		}
	}

}