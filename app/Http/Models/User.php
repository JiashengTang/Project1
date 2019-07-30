<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function gotMissions()
    {
        return $this->belongsToMany('App\Http\Models\Mission', 'user_got', 'mission_id', 'user_id');
    }

    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute) {
            parent::setAttribute($key, $value);
        }
    }
}
