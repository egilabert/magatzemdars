<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cites', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamp('data_programada');
			$table->text('details');
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
		Schema::drop('cites');
	}

}
