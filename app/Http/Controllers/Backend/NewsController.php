<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Admin;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class NewsController extends BackendController
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->_data['news'] = News::all();

		return view($this->_page . 'news.index', $this->_data);
	}


	public function add()
	{
		$categories = Category::all();

		return view($this->_page . 'news.add', ['categories' => $categories]);
	}

	public function addAction(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|unique:news,title|min:6',
			'category' => 'required',
			'news_date' => 'required',
			'keywords' => 'required',
			'summary' => 'required',
			'details' => 'required',
			'cover_image' => 'required'
		]);

		$data['title'] = $request->input('title');
		$data['slug'] = str_slug($request->title);

		$data['news_date'] = $request->input('news_date') . ':00';
		$data['keywords'] = $request->input('keywords');
		$data['details'] = $request->input('details');
		$data['summary'] = $request->input('summary');
		$data['admin_id'] = Auth::guard('admin')->user()->id;


		if ($request->hasFile('cover_image')) {
			$file = $request->file('cover_image');
			$newName = str_random() . '.' . strtolower($file->getClientOriginalExtension());

			if (!file_exists(public_path('/img/news'))) {
				mkdir(public_path('img/news'));
			}

			$intervention = Image::make($file);

			$intervention->resize(null, 300, function ($ratio) {
				$ratio->aspectRatio();
			})->crop(500, 300)->save(public_path('/img/news/' . $newName));
			$data['image'] = $newName;
		}

		if ($news = News::create($data)) {
			$lastInsertedId = $news->id;
			$selectedCategories = $request->category;

			foreach ($selectedCategories as $category) {
				DB::table('news_categories')->insert(['news_id' => $lastInsertedId, 'category_id' => $category]);
			}

			return redirect()->route('news')->with('success', 'News was added');
		}
		return redirect()->back()->with('error', 'News add failed');
	}

	public function updatePriority(Request $request)
	{
		$id = (int)$request->id;
		if (!$id) return redirect()->back()->with('error', 'There was a problem');

		$news = News::find($id);
		if (!$news) return redirect()->back()->with('error', 'There was a problem');


		News::where(['priority' => 1])->update(['priority' => 0]);

		News::where(['id' => $id])->update(['priority' => 1]);

		return redirect()->route('news')->with('success', 'Priority updated');

	}
}
