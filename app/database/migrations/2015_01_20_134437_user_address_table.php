<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_address', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('province_id');
			$table->integer('city_id');
			$table->integer('regency_id');
			$table->longText('address');
			$table->string('phone');
			$table->integer('user_id');
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
		Schema::drop('user_address');
	}

}
