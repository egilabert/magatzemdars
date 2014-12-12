<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 40) as $index)
		{
			Comment::create([

				'name' => $faker->name(),
				'comment' => $faker->paragraph($nbSentences = 3),
				'commentable_id' => $faker->numberBetween( 1, 11 ),
				'commentable_type' => 'Espectacle'
			]);
		}
	}

}