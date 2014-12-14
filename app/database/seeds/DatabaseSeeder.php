<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0');
		Eloquent::unguard();

		$this->call('EspectaclesTableSeeder');
		$this->call('SalesTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('SectorsTableSeeder');
		$this->call('ProfilesTableSeeder');
		$this->call('ComunicacionsTableSeeder');
		$this->call('ConsumsTableSeeder');
		$this->call('ClientsTableSeeder');
		$this->call('IncidenciesTableSeeder');
		$this->call('ObservacionsTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('TipusTableSeeder');
		$this->call('CitesTableSeeder');
		$this->call('RoleUserTableSeeder');

		DB::statement('SET FOREIGN_KEY_CHECKS=1');
	}

}

