<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('contact_name');
			$table->string('contact_familyname');
			$table->integer('phone1')->unsigned();
			$table->integer('phone2')->unsigned();
			$table->string('address');
			$table->string('cp');
			$table->string('email1');
			$table->string('email2');
			$table->string('location');
			$table->string('country');
			$table->string('ref');
			$table->string('picture');
			$table->integer('sector_id')->unsigned()->references('id')->on('sectors')->onUpdate('cascade');
			$table->integer('type_id')->unsigned()->references('id')->on('sectors')->onUpdate('cascade');
			$table->timestamp('last_contact_at');
			$table->timestamp('last_contract_at');
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
		Schema::drop('clients');
	}

}
