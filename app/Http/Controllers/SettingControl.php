<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Skill;
use App\Http\Models\Type;

class SettingController extends Controller{
	public function  initSkills(){
		for($i = 0;$i < 3;$i++) {
			$newType = new Type;
			$newType->name = chr($i + 65);
			$newType->created_at = date('Y-m-d H:i:s');
			$newType->updated_at = date('Y-m-d H:i:s');
			$newType->save();

			for($j = 1;$j <= 3;$j++){	
				$newSkill = new Skill;
				$newSkill->skill_type_id = $i + 1;
				$newSkill->name = chr($i + 65) . chr($i * 3 + $j + 96);	
				$newSkill->created_at = date('Y-m-d H:i:s');
				$newSkill->updated_at = date('Y-m-d H:i:s');
				$newSkill->save();
			}
		}
		print_r('done');
		die();
	}
}