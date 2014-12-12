<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon;

class ClientsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');
		$startDate = Carbon::now();

		foreach(range(1, 100) as $index)
		{
			Client::create([

				'name' => 'Ajuntament de '. $faker->word(),
				'contact_name'	=> $faker->firstName($gender = null|'male'|'female'),
				'contact_familyname' => $faker->lastName(),
				'phone1' => '93'.$faker->numberBetween($min = 1000000, $max = 9999999),
				'phone2' => '93'.$faker->numberBetween($min = 1000000, $max = 9999999),
				'address' => $faker->address(),
				'cp' => $faker->postcode(),
				'email1'	=> $faker->email(),
				'email2'	=> $faker->email(),
				'location'	=> $faker->city(),
				'country'	=> $faker->country(),
				'ref'	=> $faker->randomNumber($nbDigits = 8),
				'picture' => 'utils/client.jpg',
				'sector_id' => $faker->numberBetween($min = 1, $max = 39),
				'type_id' => $faker->numberBetween($min = 1, $max = 10),
				'last_contact_at'	=> $startDate->subMonths($faker->numberBetween( 0, 15 )),//toDateTimeString(),
				'last_contract_at'	=> $startDate->subMonths( $faker->numberBetween( 0, 5 ))

			]);
		}
	}

}