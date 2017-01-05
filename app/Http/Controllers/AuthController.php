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
    public function findOrCreateUser($githubUser)
    {
    	if($authUser = User::where('github_id', $githubUser->id)->first()){
    		return $authUser;
    	}
        $snake = snake_case($githubUser->nickname);
        $arrName = explode('_', $snake);
    	return User::create([
    			'name' => $githubUser->name,
                'first_name' => title_case($arrName[0]),
                'last_name' => title_case($arrName[1]),
                'fullName' => $githubUser->nickname,
                'email' => $githubUser->email,
                'github_id' => $githubUser->id,
                'avatar' => $githubUser->avatar,
                'github_profile' => $githubUser->user['html_url']
    		]);
    }
}
