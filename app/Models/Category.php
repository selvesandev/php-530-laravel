<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function news()
	{
		return $this->belongsToMany('App\Models\News', 'news_categories', 'category_id', 'news_id');
	}
}
