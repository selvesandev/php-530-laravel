<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//most the features provided by laravel can be accessed in this function.
		View::composer('Backend.*', function ($view) {
			$view->with('loggedAdmin', Auth::guard('admin')->user());
		});
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('NHelper', function () {
			return new \App\Helpers\MyMailNotificationHelper(config('app.name'), 'instance', new User());
		});

	}
}
