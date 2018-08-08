<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BlogApi extends Model
{
	protected $table = 'blogs_api';

	protected $fillable = [
		'title', 'summary', 'details'
	];
}
