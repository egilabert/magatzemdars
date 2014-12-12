<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEspectaclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('espectacles', function(Blueprint $table)
		{
			$table->increments('id');
			$table -> string('title');
			$table -> string('autor');
			$table -> string('adaptacio');	
			$table -> integer('durada');
			$table -> text('obra');
			$table -> text('creacio');
			$table -> text('escenagrafia');
			$table -> integer('pressupost');
			$table-> enum('tipus', array('adult', 'infantil'));
			$table -> string('image');
			$table -> string('video');
			$table -> string('dossier');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('espectacles');
	}

}
