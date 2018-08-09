<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $fillable = ['name', 'email', 'password', 'image', 'status'];


	public function getNameAttribute($value)
	{
		return strtoupper($value);
	}

}
