<?php

namespace App\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

class ApiHelperFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'apiHelper';
	}
}