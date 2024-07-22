<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $guarded = [];
    protected $fillable = ['role','desc'];

    public function users() {
        return $this->belongsToMany(UserInfo::class, 'user_team', 'teams_id', 'user_info_id');
        
    }

    public function workplace() {
        return $this->belongsTo(Workplaces::class, 'workplace'); 
    }

    public function department() {
        return $this->belongsTo(Departments::class);
    } 
}
