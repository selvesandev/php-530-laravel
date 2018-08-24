<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $fillable = ['title', 'slug', 'admin_id', 'summary', 'details', 'keywords', 'visits', 'priority', 'news_date', 'image'];


	public function admin()
	{
		return $this->belongsTo('App\Models\Admin', 'admin_id', 'id');
	}


	public function categories()
	{
		return $this->belongsToMany('App\Models\Category','news_categories','news_id','category_id');
	}
}
