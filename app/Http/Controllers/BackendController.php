<?php

namespace App\Http\Controllers;

class BackendController extends Controller
{
	protected $_app = 'Backend';
	protected $_page;
	protected $_data = [];

	public function __construct()
	{
		$this->_page = $this->_app . '.pages.';
	}
}
