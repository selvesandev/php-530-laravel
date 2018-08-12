<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

	public function index()
	{
		return view('Backend.login');
	}

	public function loginAction(Request $request)
	{
		$data['email'] = $request->email;
		$data['password'] = $request->password;

		$remember = false;
		if ($request->input('remember')) {
			$remember = true;
		}

		if (Auth::guard('admin')->attempt($data, $remember)) {
			return redirect()->intended(route('admin-dashboard'));
		}
		return redirect()->back()->with('error', 'Invalid credentials');
	}

	public function logout()
	{
		Auth::guard('admin')->logout();
		return redirect()->route('admin-auth');
	}
}
