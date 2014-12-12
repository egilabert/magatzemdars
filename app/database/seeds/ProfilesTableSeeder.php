<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 1) as $index)
		{
			Profile::create([

				'user_id' => 1,
				'location' => 'Barcelona',
				'bio' => $faker->sentence($nbWords = 20),
				'rol' => 'webmaster',
				'foto' => 'utils/profile.gif',
				'link1' => 'https://www.facebook.com/enric.gilabert'

			]);
		}
	}

}