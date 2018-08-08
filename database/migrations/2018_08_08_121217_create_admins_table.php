<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->string('email')->unique();
			$table->string('password');
			$table->boolean('status')->default(1)->comment('1 is enabled and 0 is disabled');
			$table->string('image', 100);
			$table->enum('privilege', ['a', 'sa'])->default('a');
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
		Schema::dropIfExists('admins');
	}
}
