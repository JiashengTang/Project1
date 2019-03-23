<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $guarded=[];

	public function type()
	{
	    return $this->belongsTo('App\Http\Models\Type', 'skill_type_id');
	}

    public function users()
    {
        return $this->belongsToMany('App\Http\Models\User', 'user_skill', 'skill_id', 'user_id');
    }

    public function missions()
    {
        return $this->belongsToMany('App\Http\Models\Mission', 'mission_skill', 'skill_id', 'mission_id');
    }
}
