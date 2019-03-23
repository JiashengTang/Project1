<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $guarded=[];

    public function skills()
    {
        return $this->hasMany('App\Http\Models\Skill', 'skill_type_id', 'id');
    }
}
