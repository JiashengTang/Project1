<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MatchController;
use Illuminate\Support\Facades\Input;
use Session;
use App\Http\Models\User;
use App\Http\Models\Skill;
use App\Http\Models\Mission;

class MissionController extends Controller{
	public function linkSkill($missionId){
		$input = Input::all();
		$mission = Mission::where('id',$missionId)->first();
		$mission->skills()->attach($input['skill-id']);
		return redirect('/missions/detail/'.$missionId);
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