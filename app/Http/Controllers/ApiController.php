<?php

namespace App\Http\Controllers;

use App\Models\BlogApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
	public function index()
	{

	}

	public function insert(Request $request)
	{
		$insertData = $request->all();
		//Method one Using the DB Facade.
//		if (DB::table('blogs_api')->insert($insertData)) {
//			return response()->json(['status' => true, 'msg' => 'Data was added']);
//		}

		//Method 2 Using Eloquent.
		if (BlogApi::create($insertData)) {
			return response()->json(['status' => true, 'msg' => 'Data was added']);
		}
		return response()->json(['status' => false, 'msg' => 'Data add failed']);
	}


	public function select()
	{
		return response()->json(BlogApi::all());
	}

	public function update(Request $request, $id)
	{
		$id = (int)$id;
		if (BlogApi::where(['id' => $id])->update($request->all()))
			return response()->json(['status' => true, 'msg' => 'Data was updated']);
		else
			return response()->json(['status' => false, 'msg' => 'Failed']);
	}


	public function delete($id)
	{
		$id = (int)$id;
		if (BlogApi::where(['id' => $id])->delete())
			return response()->json(['status' => true, 'msg' => 'Data deleted']);
		else
			return response()->json(['status' => false, 'msg' => 'Failed']);
	}
}
