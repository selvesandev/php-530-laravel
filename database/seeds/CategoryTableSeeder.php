<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categories')->insert([
			[
				'name' => 'Business'
			],
			[
				'name' => 'Politics'
			],
			[
				'name' => 'Weather'
			],
			[
				'name' => 'Entertainment'
			],
			[
				'name' => 'Sports'
			]
		]);
	}
}
