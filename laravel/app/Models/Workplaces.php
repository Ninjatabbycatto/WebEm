<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workplaces extends Model
{
    use HasFactory;
    protected $table = 'workplaces';

    protected $fillable = ['name', 'manager'];


    public function manager()
    {
        return $this->belongsTo(UserInfo::class, 'manager');
    }
}
