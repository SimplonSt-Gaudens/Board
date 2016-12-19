<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meteo;
use App\User;
class MeteoController extends Controller
{

   public function __construct()
   {
        $this->middleware('auth');
   }

   public function postMeteo(Request $request, $id)
   {
   		$meteo = Meteo::create([
   			'meteo' => $request->meteo,
   			'desc' => $request->description
   		]);
   		$meteo->users()->attach($request->id);
   		return redirect()->back();
   }

   public function getList()
   {
   		$meteos = Meteo::all();
         $users = User::all();
   		return view('meteos.list', compact('meteos', 'users'));
   }
}
