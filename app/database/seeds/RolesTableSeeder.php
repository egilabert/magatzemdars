<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
	{

		Role::create([
			'name' => 'Membre'
		]);

		Role::create([
			'name' => 'Direcció'
		]);

		Role::create([
			'name' => 'Administrador'
		]);

		Role::create([
			'name' => 'Propietari'
		]);


	}

}