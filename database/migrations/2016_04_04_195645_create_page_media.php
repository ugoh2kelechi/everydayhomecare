<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageMedia extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('page_media', function(Blueprint $table)
		{
			$table->increments('pm_id');
			$table->string('media');
			$table->string('media_describe');
			$table->string('media_type');
			$table->integer('user_id');
			$table->integer('content_id')->unsigned();
			$table->foreign('content_id')->references('pc_id')->on('page_content');
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
		Schema::drop('page_media');
	}

}
