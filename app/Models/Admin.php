<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
	protected $fillable = ['name', 'email', 'password', 'image', 'status'];


	public function getNameAttribute($value)
	{
		return strtoupper($value);
	}

	public function news()
	{
		return $this->hasMany('App\Models\News', 'admin_id', 'id');
	}

}
