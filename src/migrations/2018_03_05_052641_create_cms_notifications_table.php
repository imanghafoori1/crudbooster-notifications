<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmsNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_notifications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cms_users_id')->nullable();
			$table->string('content')->nullable();
			$table->string('url')->nullable();
			$table->boolean('is_read')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cms_notifications');
	}

}
