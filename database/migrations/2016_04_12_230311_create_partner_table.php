<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partner', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pat_name');
			$table->string('pat_speciality');
			$table->string('pat_education');
			$table->string('pat_experience');
			$table->string('pat_facebook');
			$table->string('pat_twitter');
			$table->string('pat_linkedin');
			$table->string('pat_skype');
			$table->string('pat_yearjoin');
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
		Schema::drop('partner');
	}

}
