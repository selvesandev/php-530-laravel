<?php

namespace App\Helpers;


class MyMailNotificationHelper
{
	private $_model, $_api_key;

	public function __construct($apiKey, $googleInstance, $model)
	{
		echo 'test';
		$this->_model = $model;
		$this->_api_key = $apiKey;
	}


	public function getKey()
	{
		echo $this->_api_key;
		dd($this->_model);
	}


}