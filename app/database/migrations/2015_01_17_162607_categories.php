<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
			$table->longText('description');
			$table->integer('level');
			$table->integer('parent_id')->unsigned()->nullable();
			$table->timestamps();

			$table->engine = 'InnoDB';
		});

		// add foreign key after creating the dependency
		Schema::table('categories', function($table)
		{
			$table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop foreign key first 
		Schema::table('categories', function(Blueprint $table) {
			$table->dropForeign('categories_parent_id_foreign');
		});
		Schema::drop('categories');
	}

}
