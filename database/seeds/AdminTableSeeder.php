<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('admins')->insert([
				[
					'name' => 'james',
					'password' => bcrypt('password'),
					'email' => 'james@gmail.com',
					'image' => 'user.jpg'
				],
				[
					'name' => 'john',
					'password' => bcrypt('password'),
					'email' => 'john@gmail.com',
					'image' => 'user.jpg'
				]
			]
		);

	}
}
