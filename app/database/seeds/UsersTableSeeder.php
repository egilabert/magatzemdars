<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		User::create([

				'username'	=> 'magars',
				'name'	=> 'Magatzem d\'ars',
				'email'	=> 'info@magatzemdars.com',
				'password'	=> Hash::make('secret'),
				'remember_token' => NULL

			]);

		foreach(range(1, 99) as $index)
		{
			User::create([

				'username'	=> $faker->username(),
				'name'	=> $faker->name(),
				'email'	=> $faker->email(),
				'password'	=> Hash::make($faker->word()),
				'remember_token' => NULL

			]);

		}

	}

}