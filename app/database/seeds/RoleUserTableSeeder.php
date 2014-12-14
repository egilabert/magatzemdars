<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RoleUserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$rolesIds = Role::lists('id');
		$usersIds = User::lists('id');

		foreach(range(1, 100) as $index)
		{

			DB::table('role_user')->insert([
				'role_id' => $faker->randomElement($rolesIds),
				'user_id' => $index

			]);

		}

	}

}