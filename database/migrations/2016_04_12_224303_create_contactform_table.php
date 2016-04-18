<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactformTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactform', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('contact_name');
			$table->string('contact_email');
			$table->string('contact_phone');
			$table->string('contact_message');
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
		Schema::drop('contactform');
	}

}
