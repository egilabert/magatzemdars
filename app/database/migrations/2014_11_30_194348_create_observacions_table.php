<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObservacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('observacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('observacions');
			$table->integer('user_id')->unsigned()->references('id')->on('users')->onUpdate('cascade');; //
			$table->integer('observable_id');
			$table->string('observable_type'); //empreses, entitats, ajuntaments, programadors, escoles, teatres, circuits, cases de calonies, persones i treballdors
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
		Schema::drop('observacions');
	}

}
