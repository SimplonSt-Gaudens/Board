<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function list()
	{
		$users = User::all();
		return view('users.list', compact('users'));
	}
	
	public function show($id)
	{
		$user = User::findOrFail($id);
		return view('users.show', compact('user'));
	}

	public function getEdit()
	{
		$user = Auth::user();
		return view('users.edit', compact('user'));
	}

	public function postEdit(Request $request, $id)
	{
		$user = User::find($id);
		$user->update([
			"first_name" => $request->first_name,
			"last_name" => $request->last_name,
			"email" => $request->email
		]);
		// dd($request->all());
		$user->save();
		return redirect('/home');
	}
}
