<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIncidenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incidencies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('tipus', array('queixa', 'suggeriment', 'altres')); //queixa, suggeriment, altres
			$table->text('observacions');
			$table->integer('user_id')->unsigned()->references('id')->on('users')->onUpdate('cascade');; //
			$table->integer('incidible_id');
			$table->string('incidible_type'); //empreses, entitats, ajuntaments, programadors, escoles, teatres, circuits, cases de calonies, persones i treballdors
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
		Schema::drop('incidencies');
	}

}
