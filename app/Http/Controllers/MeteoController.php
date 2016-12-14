<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meteo;

class MeteoController extends Controller
{
   public function postMeteo(Request $request, $user_id)
   {
   		Meteo::create([
   			'meteo' => $request->meteo,
   			'desc' => $request->description
   		])->attach($user_id);
   		return redirect()->back();
   }
}
