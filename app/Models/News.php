<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $fillable = ['title', 'slug', 'admin_id', 'summary', 'details', 'keywords', 'visits', 'priority', 'news_date', 'image'];
}
