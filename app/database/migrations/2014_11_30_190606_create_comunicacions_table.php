<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComunicacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comunicacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('tipus', array('cita', 'mail', 'reunió', 'sms', 'trucada')); //trucada, cita, reunió, mail, sms
			$table->timestamp('hora_progamada');
			$table->text('observacions');
			$table->integer('comunicable_id');
			$table->string('comunicable_type'); //empreses, entitats, ajuntaments, programadors, escoles, teatres, circuits, cases de calonies, persones i treballdors
			$table->integer('user_id')->unsigned()->references('id')->on('users')->onUpdate('cascade');; //
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
		Schema::drop('comunicacions');
	}

}
