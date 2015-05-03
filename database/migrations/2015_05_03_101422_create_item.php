<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItem extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shop_item', function(Blueprint $table)
		{
			$table->increments('item_id');
			$table->string('item_name');
			$table->string('item_currency');
			$table->text('item_description');
			$table->float('item_price');
			$table->float('item_price_nds');
			$table->string('item_measure');
			$table->integer('item_balance');
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shop_item');
	}

}
