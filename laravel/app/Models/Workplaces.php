<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workplaces extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'manager_id', 'team_id', 'announcement_id'];

    // Define relationship with User (manager)
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    // Define relationship with Team

    // add function after making each table
    //public function team()
    //{
    //    return $this->belongsTo(Team::class, 'team_id');
    //}
//
    //// Define relationship with Announcement
    //public function announcement()
    //{
    //    return $this->belongsTo(Announcement::class, 'announcement_id');
    //}
}
