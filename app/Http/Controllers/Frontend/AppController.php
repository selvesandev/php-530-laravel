<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\ApiHelper;
use App\Helpers\MyMailNotificationHelper;
use Facades\App\Helpers\TestRTFacade;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use XY;

class AppController extends Controller
{
	private $_app = 'Frontend.';

	public function home()
	{
		return view($this->_app . 'welcome');
	}

	public function about()
	{
		return view($this->_app . 'about');
	}

	public function contact()
	{
		return view($this->_app . 'contact');
	}
}
