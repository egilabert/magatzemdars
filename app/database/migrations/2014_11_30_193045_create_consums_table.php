<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('producte', array('activitat', 'bolo', 'curs', 'lloguer', 'producte_empresa', 'altres')); //bolo, producte_empresa, curs, lloguer, activitat, altres
			$table->integer('preu');
			$table->text('observacions');
			$table->integer('user_id')->unsigned()->references('id')->on('users')->onUpdate('cascade');; //
			$table->integer('consumible_id');
			$table->string('consumible_type'); //empreses, entitats, ajuntaments, programadors, escoles, teatres, circuits, cases de calonies, persones i treballdors
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
		Schema::drop('consums');
	}

}
