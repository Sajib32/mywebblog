<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table){
			$table->increments('id')->unsigned();
			$table->integer('author_id')->unsigned()->index();
			$table->string('title');
			$table->text('content');
			$table->string('status');
			$table->integer('comments_count');
			$table->timestamps();
			$table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
