<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// $this->call(UsersTableSeeder::class);
		$this->call(AdminTableSeeder::class);
//		factory(App\Models\User::class, 50)->create();
//		factory(\App\Models\Admin::class, 20)->create();
	}
}
