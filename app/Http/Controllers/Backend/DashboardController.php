<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	private $_app = 'Backend';
	private $_page;

	public function __construct()
	{
		$this->_page = $this->_app . '.pages.';
	}


	public function index()
	{
		return view($this->_page . 'dashboard');
	}
}
