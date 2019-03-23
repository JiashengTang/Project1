<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $guarded=[];

    public function missions()
    {
        return $this->hasMany('App\Http\Models\Mission', 'user_id', 'id');
    }

    public function completedMissions()
    {
        return $this->hasMany('App\Http\Models\CompletedMisiion', 'completed_user_id', 'id');
    }

	public function skills()
    {
        return $this->belongsToMany('App\Http\Models\Skill', 'user_skill', 'user_id', 'skill_id');
    }
}
