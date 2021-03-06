<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Session;
use App\Http\Models\User;
use App\Http\Models\Skill;
use App\Http\Models\Mission;

class MatchController extends Controller{

	public static function matchMissions(){
		$user = User::where('id',Session::get('user')[0]->id)->first();

		$userSkills = $user->skills()->get();

		if($userSkills->count() == 0){
	   		return null;
		}

		$missions =  self::getMissions($userSkills);
		$matchResults = array();
		foreach ($missions as $mission) {

			$missionSkills = $mission->skills()->get();
			if($missionSkills->count() > 0){
				$percent = self::matchOneMission($missionSkills, $userSkills);
				if($percent != 0){
					array_push($matchResults, array(
		                    'missionId' => $mission->id,
		                    'title' => $mission->title,
		                    'description' => $mission->description,
		                    'owner' => $mission->user->name,
		                    'payment' => $mission->price,
		                    'payment_type' => $mission->payment_type,
		                    'start_time' => $mission->start_time,
		                    'end_time' => $mission->end_time,
		                    'percent' => round($percent,2),
		                )
		            );
				}
			}
		}

		return $matchResults;
	}

	private static function matchOneMission($missionSkills,$userSkills){

		// $score = 100 / $missionSkills->count();
		// $percent = 0;
		$tototalScore = 0;
		$amountScore = 0;

		foreach ($missionSkills as $missionSkill) {
			$tototalScore = $tototalScore + $missionSkill->id;
			foreach ($userSkills as $userSkill) {
				if($missionSkill->id == $userSkill->id){
					// $percent = $percent + $score;
					$amountScore = $amountScore + $userSkill->id;
				}
			}
		}
		// return $percent;
		return $amountScore/$tototalScore * 100;
		
	}

	private static function getMissions($userSkills){
		$user = User::where('id',Session::get('user')[0]->id)->first();
		
		$missions = Mission::whereHas('skills',function($query) use($userSkills) {
        	foreach($userSkills as $userSkill) {
            	$query->orWhere("skill_id",$userSkill->id);
			}
        })
        ->where('activated',1)
        ->where('user_id', '!=', $user->id)
	    ->get();

	    return $missions;

	}

	public static function getRandomMission(){
		$mission = Mission::inRandomOrder()->first();
		return $mission;
	}

}