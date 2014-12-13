<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$i = 0;

		foreach(range(1, 100) as $index)
		{
			$i++;
			Profile::create([

				'user_id' => $i,
				'location' => $faker->city(),
				'bio' => $faker->sentence($nbWords = 20),
				'rol' => 'webmaster',
				'foto' => 'utils/profile.gif',
				'link1' => 'https://www.facebook.com/'

			]);
		}
	}

}