<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories_posts', function($table){
			$table->increments('id')->unsigned();
			$table->integer('categories_id')->unsigned()->index();
			$table->integer('post_id')->unsigned()->index();
			$table->timestamps();
			$table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories_posts');
	}

}
