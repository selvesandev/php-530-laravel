<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->dateTime('news_date');
			$table->text('summary');
			$table->text('details');
			$table->string('image', 100);
			$table->tinyInteger('priority')->default(0)->comment('0 is low 1 is high');
			$table->text('keywords');
			$table->integer('visits')->unsigned()->nullable();
			$table->integer('admin_id')->unsigned();
			$table->foreign('admin_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
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
		Schema::dropIfExists('news');
	}
}
