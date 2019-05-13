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
		return view('user.home')->with('matchResults', $matchResults);
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

	public function linkSkill($missionId){
		$input = Input::all();
		$mission = Mission::where('id',$missionId)->first();
		$mission->skills()->attach($input['skill-id']);
		return redirect('/missions/detail/'.$missionId);
	}

	public function deleteSkill($skillId){
		$user = User::where('id',Session::get('user')[0]->id)->first();
		$user->skills()->detach($skillId);
		return redirect('/skills');
	}

	public function unlinkSkill($missionId,$skillId){
		$mission = Mission::where('id',$missionId)->first();
		$mission->skills()->detach($skillId);
		return redirect('/missions/detail/'.$missionId);
	}

	public function showMissionPage(){
		return view('user.mission');
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
		$newMission->payment_type = $input['payment-type'];
		$newMission->price = $input['price'];
		if (isset($input['start-time'])){
			$newMission->start_time = date('Y-m-d H:i', strtotime($input['start-time']));
		} 
		if (isset($input['end-time'])){
			$newMission->end_time = date('Y-m-d H:i', strtotime($input['end-time']));
		}
		$newMission->activated = 1;
		$newMission->created_at = date('Y-m-d H:i:s');
		$newMission->updated_at = date('Y-m-d H:i:s');
		$newMission->save();
		return redirect('/missions');
	}

	public function deleteMission($missionId){
		$user = User::where('id',Session::get('user')[0]->id)->first();
		$mission = Mission::where('id',$missionId)->first();
		$mission->skills()->detach();
		$mission->update(['activated' => 0]);
		return redirect('/missions');
	}

	public function reactiveMission($missionId){
		$user = User::where('id',Session::get('user')[0]->id)->first();
		$mission = Mission::where('id',$missionId)->first()->update(['activated' => 1]);
		return redirect('/missions');
	}

	public function showMissionDetailPage($missionId){
		$skills = Skill::All();
		$mission = Mission::where('id',$missionId)->first();
		return view('user.mission-detail')->with('mission',$mission)->with('skills',$skills);
	}

	public function showMissionSearchPage(){
		$skills = Skill::All();
		return view('user.mission-search')->with('skills',$skills);
	}

	public function showMissionSearchResultPage(){
		$input = Input::all();
		$keywords = $input['keyword'];
		$skillIds = $input['skill'];

		if(is_null($keywords) && is_null($skillIds)){
	   		return view('user.mission-search-result')->with('missions', Mission::All());
		}
		
		$missions = Mission::where(function ($query) use($keywords) {
			if(isset($keywords)){
				foreach(explode(" ",$keywords) as $keyword) {
					$query->orWhere('description', 'like', '%' . $keyword . '%')
					->orWhere('title', 'like', '%' . $keyword . '%');
				}
			}
	    })
	    ->whereHas('skills',function($query) use($skillIds) {
            if(isset($skillIds)){
            	foreach(explode(" ",$skillIds) as $skillId) {
                	$query->where("skill_id",$skillId);
				}
            }
        })
        ->where('activated',1)
	    ->get();
	    return view('user.mission-search-result')->with('missions',$missions);
	}

	public function showGotMissionPage(){
		return view('user.mission-got');
	}

	public function showGetMissionPage($missionId){
		$skills = Skill::All();
		$mission = Mission::where('id',$missionId)->first();
		return view('user.mission-get')->with('mission',$mission)->with('skills',$skills);
	}

	public function getMission($missionId){
		$user = Session::get('user')[0]->first();
		$user->gotMissions()->attach($missionId);
		return redirect('/missions/get');
	}
	

}

?>