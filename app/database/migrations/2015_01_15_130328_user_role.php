<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRole extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_role', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('level');

			$table->timestamps();

			$table->engine = 'InnoDB';
		});

		// add foreign key after creating the dependency
		Schema::table('users', function($table)
		{
			$table->foreign('user_role_id')->references('id')->on('user_role')->onDelete('set null');
			
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
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_user_role_id_foreign');
		});
		
		Schema::drop('user_role');
	}

}
