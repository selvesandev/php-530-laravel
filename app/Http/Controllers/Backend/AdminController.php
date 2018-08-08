<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Image;

class AdminController extends Controller
{
	private $_app = 'Backend';
	private $_page;

	public function __construct()
	{
		$this->_page = $this->_app . '.pages.';
	}


	public function index()
	{
		return view($this->_page . 'admin.index');
	}

	public function add()
	{
		return view($this->_page . 'admin.add');
	}

	public function addAction(Request $request)
	{
		$this->validate($request, [
			'name' => "required|min:3",
			'email' => 'required|email|unique:admins,email',
			'password' => 'required|min:6|confirmed',
			'profile' => 'required|image'
		]);

		$data = [];
		$data['name'] = $request->name;
		$data['email'] = $request->email;
		$data['password'] = bcrypt($request->password);
		$data['image'] = 'test.jpg';
		$newName = '';
		if ($request->hasFile('profile')) {
			$file = $request->file('profile');
			$newName = str_random(20) . '.' . $file->getClientOriginalExtension();

			$image = Image::make($file);

			if (!file_exists(public_path('img/admin'))) {
				mkdir(public_path('img/admin'));
			}

			$image->resize(300, null, function ($ar) {
				$ar->aspectRatio();
			})->crop(200, 200)->save(public_path('img/admin/' . $newName));
		}

		$data['image'] = $newName;

		if (Admin::create($data)) {
			return redirect()->route('admin')->with('success', 'Admin was added');
		}
		return redirect()->back()->with('error', 'There was a problem');
	}
}
