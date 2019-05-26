<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MatchController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Http\Models\User;
use App\Http\Models\Skill;
use App\Http\Models\Mission;

class UserController extends Controller{
	public function userLogin(Request $request){	
		$input = Input::all();
    	$user = User::where('email', $input['email'])->first();
    	if(!$user){
      	 	return view('user.login')->with('errorMsg', "Can not find this account, please regist first");
       	}
       	else if($user->activated == 0){
			return view('user.login')->with('errorMsg', "Sorry this account has been deactivited, please connect the manager");
       	}
   	 	else if(\Auth::attempt(['email' => $input['email'], 'password' => $input['password']])){
    			$request->session()->push('user', $user);
   				return redirect('/');
   		}
   		else{
			return view('user.login')->with('errorMsg', "Invalid email or password, please try again");
   		}
       	
	}

	public function  userRegister(){
		$input = Input::all();
		$user = User::where('email',$input['email'])->first();
		if($user){
			return view('user.register')->with('errorMsg', 'This email has been used, please use another one');
		}
		else if($input['password'] != $input['confirm-password']){
			return view('user.register')->with('errorMsg', 'Comfirm password wrong.');
		}

		$newUser = new User;
		$newUser->email = $input['email'];
		$newUser->name = $input['name'];	
		$newUser->password = Hash::make($input['password']);	
		$newUser->mobile = $input['mobile'];
		$newUser->activated = 1;
		$newUser->created_at = date('Y-m-d H:i:s');
		$newUser->updated_at = date('Y-m-d H:i:s');
		$newUser->save();

		return view('user.register')->with('successMsg', 'Registed successful, please login in.');;
	}

	public function userLogOut(){
		session(['user'=>null]);
		\Auth::logout();
		return redirect('/login');
	}

	public function showHomePage(){
		$matchResults = MatchController::matchMissions();
		if(is_null($matchResults)){
			return self::showSkillPage();
		}
		return view('user.home')->with('matchResults', $matchResults)->with('randomMission', MatchController::getRandomMission());
	}

	public function showSkillPage(){
		$skills = Skill::All();
		$user = User::where('id',Session::get('user')[0]->id)->first();
		return view('user.skill')->with('skills',$skills)->with('userSkills',$user->skills);
	}

	public function addSkill(){
		$input = Input::all();
		$user = User::where('id',Session::get('user')[0]->id)->first();
		if($user->skills()->where('skill_id', $input['skill-id'])->count() == 0){
			$user->skills()->attach($input['skill-id']);
		}
		return redirect('/skills');
	}

	public function deleteSkill($skillId){
		$user = User::where('id',Session::get('user')[0]->id)->first();
		$user->skills()->detach($skillId);
		return redirect('/skills');
	}
}

?>