<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;

    protected $table = 'announcements';
    protected $fillable = ['title','content','isread'];

    public function user() {
        return $this->belongsTo(UserInfo::class, 'users');
    }

    public function workplace() {
        return $this->belongsTo(Workplaces::class, 'workplaces');        
    }

}