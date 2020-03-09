<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categories extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function (Blueprint $table) {
			$table->integer('id')->autoIncrement()->unique()->unsigned();
			$table->string('title')->unique();
			$table->string('image');
			$table->string('slag')->unique()->nullable(true);
			$table->integer('cat_id')->nullable(true);
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
		//
	}
}
