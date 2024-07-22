<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = ['startDate','endDate','title','description'];

    public function user(){
        return $this->belongsTo(UserInfo::class, 'users');
    }
    public function workplace(){
        return $this->belongsTo(Workplaces::class, 'workplaces'); 
    }

    public function department(){
        return $this->belongsTo(Departments::class, 'departments');
    }

}
