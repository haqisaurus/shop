<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('SKU');
			$table->string('name');
			$table->longText('description');
			$table->integer('status');
			$table->string('price');
			$table->string('price_promo');
			$table->integer('stock');
			$table->decimal('discount', 5, 2);
			$table->boolean('featured');
			$table->integer('category_id');
			$table->integer('supplier_id');
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
		Schema::drop('product');
	}

}
