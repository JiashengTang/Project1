<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
      	 	return view('user.login')->with('errorMsg', "Can not find this account, please registe first");
       	}
       	else if($user->activated == 0){
			return view('user.login')->with('errorMsg', "Sorry this account has been deactivited, please connect the manager");
       	}
       	else if(Hash::check($input['password'],$user->password)){
			$request->session()->push('user', $user);
   			return view('user.home');
   		}
   		else{
			return view('user.login')->with('errorMsg', "Invalid email or password, please try again");
   		}
       	
	}

	public function  userRegiste(){
		$input = Input::all();
		$user = User::where('email',$input['email'])->first();
		if($user){
			return view('registe')->with('errorMsg', 'This email has been used, please use another one');
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

		return view('user.registe')->with('successMsg', 'Registe successful, please login in.');;
	}

	public function userLogOut(){
		session(['user'=>null]);
		return redirect('/login');
	}

	public function showHomePage(){
		return view('user.home');
	}

	public function showSkillPage(){
		$skills = Skill::All();
		$user = User::where('id',Session::get('user')[0]->id)->first();
		return view('user.skill')->with('skills',$skills)->with('userSkills',$user->skills);
	}

	public function addSkill(){
		$input = Input::all();
		$user = User::where('id',Session::get('user')[0]->id)->first();
		$user->skills()->attach($input['skill-id']);
		return redirect('/skills');
	}

	public function deleteSkill($skillId){
		$user = User::where('id',Session::get('user')[0]->id)->first();
		$user->skills()->detach($skillId);
		return redirect('/skills');
	}

	public function showMissionPage(){
		$user = User::where('id',Session::get('user')[0]->id)->first();
		return view('user.mission')->with('missions',$user->missions()->where('activated', '1')->get())->with('histories',$user->missions()->where('activated', '0')->get());
	}

	public function showCreateMissionPage(){
		return view('user.new-mission');
	}

	public function createMission(){
		$input = Input::all();
		$newMission = new Mission;		
		$newMission->user_id = Session::get('user')[0]->id;
		$newMission->title = $input['title'];
		$newMission->description = $input['description'];
		$newMission->paymnent_type = $input['paymnent-type'];
		$newMission->price = $input['price'];
		if (isset($input['start-time'])){
			$newMission->start_time = date('Y-m-d H:i', strtotime($input['start-time']));
		} 
		if (isset($input['end-time'])){
			$newMission->end_time = date('Y-m-d H:i', strtotime($input['end-time']));
		}
		$newMission->created_at = date('Y-m-d H:i:s');
		$newMission->updated_at = date('Y-m-d H:i:s');
		$newMission->save();
		return redirect('/missions');
	}

	public function deleteMission($missionId){
		$user = User::where('id',Session::get('user')[0]->id)->first();
		$mission = Mission::where('id',$missionId)->first();
		$mission->skills()->detach();
		$mission->update(['activated' => '0']);
		return redirect('/missions');
	}

	
	

}

?>