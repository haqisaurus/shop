<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{

			$table->increments('id');
			$table->string('email')->unique();
            $table->string('photo');
            $table->string('name');
            $table->string('password');

            // required for Laravel 4.1.26
            $table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->integer('user_role_id')->unsigned()->nullable();

			$table->engine = 'InnoDB';
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
