<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function redirectToProvider()
    {
    	return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
    	try{
    		$user = Socialite::driver('github')->user();
    	}catch (Exeception $e){
    		return redirect('/auth/github');
    	}

    	$authUser = $this->findOrCreateUser($user);

    	Auth::login($authUser, true);

    	return redirect('/home');
    }

    public function getLogout()
    {
        if(Auth::check()){
            Auth::logout();
            return redirect('/login');
        }
    }
    private function findOrCreateUser($githubUser)
    {
    	if($authUser = User::where('github_id', $githubUser->id)->first()){
    		return $authUser;
    	}

    	return User::create([
    			'name' => $githubUser->name,
    			'email' => $githubUser->email,
    			'github_id' => $githubUser->id,
    			'avatar' => $githubUser->avatar
    		]);
    }
}
