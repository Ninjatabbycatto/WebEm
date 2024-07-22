<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'user_infos';
    protected $fillable = ['type', 'firstName','lastName','age','gender'];

    public function user() {
        return $this->belongsTo(User::class, 'user_auth');
    }

    //public function workplaces()
    //{
    //    return $this->belongsToMany(UserInfo::class, 'user_workplace');
//
    //}
    public function teams() {
        return $this->belongsToMany(Teams::class, 'user_team', 'user_info_id', 'teams_id');
    }

}


