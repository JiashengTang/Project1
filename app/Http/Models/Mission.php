<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $table = 'missions';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $guarded=[];

    public function completed()
    {
        return $this->hasMany('App\Http\Models\CompletedMission', 'mission_id', 'id');
    }

	public function user()
	{
	    return $this->belongsTo('App\Http\Models\User', 'user_id');
	}

    public function skills()
    {
        return $this->belongsToMany('App\Http\Models\Mission', 'mission_skill', 'mission_id', 'skill_id');
    }
}
