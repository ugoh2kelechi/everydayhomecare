<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('testimony', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tmy_name');
			$table->string('tmy_email');
			$table->string('tmy_photo');
			$table->text('tmy_desc');
			$table->string('tmy_location');
			$table->string('tmy_status');
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
		Schema::drop('testimony');
	}

}
