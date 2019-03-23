<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class CompletedMission extends Model
{
    protected $table = 'completed';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $guarded=[];

	public function completedUser()
	{
	    return $this->belongsTo('App\Http\Models\User', 'completed_user_id');
	}

	public function mission()
	{
	    return $this->belongsTo('App\Http\Models\Mission', 'mission_id');
	}

}
