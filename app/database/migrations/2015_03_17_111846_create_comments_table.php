<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table){ 
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('posts');
			$table->increments('id');
			$table->string('author');
			$table->string('author_email');
			$table->text('content');
			$table->string('status');

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
		Schema::drop(comments);
	}

}
