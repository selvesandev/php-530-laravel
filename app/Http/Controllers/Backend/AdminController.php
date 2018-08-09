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
	private $_data = [];

	public function __construct()
	{
		$this->_page = $this->_app . '.pages.';
	}


	public function index()
	{
		$this->_data['admins'] = Admin::paginate(5);
		return view($this->_page . 'admin.index', $this->_data);
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

	/**
	 * Delete the admin with it's image
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function delete($id)
	{
		$id = (int)$id;
		$admin = Admin::find($id);
		if ($admin->image) {
			if (file_exists(public_path('/img/admin/' . $admin->image)) && unlink(public_path('/img/admin/' . $admin->image))) {
				$admin->delete();
				return redirect()->route('admin')->with('success', 'Admin was removed');
			}
		}
		return redirect()->route('admin')->with('error', 'There was a problem');
	}


	public function updateStatus(Request $request)
	{
		$id = (int)$request->id;
		$actionType = $request->btnstatus;
		$adminModel = Admin::where(['id' => $id]);

		switch ($actionType) {
			case 'enable':
				$data['status'] = 1;
				break;
			case 'disable':
				$data['status'] = 0;
				break;
			default:
				return redirect()->back()->with('error', 'There was a problem');
		}

		$adminModel->update($data);

		return redirect()->back()->with('success', 'Status updated');

	}
}
