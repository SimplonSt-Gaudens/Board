<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
}
