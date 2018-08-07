<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
