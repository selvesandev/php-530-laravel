<?php

namespace App\Providers;

use App\Helpers\ApiHelper;
use Illuminate\Support\ServiceProvider;

class FacadeServiceProvider extends ServiceProvider
{
	public $binding = [

	];

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{

	}

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('apiHelper', function () {
			return new ApiHelper();
		});
	}
}
