<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workplaces extends Model
{
    use HasFactory;
    protected $table = 'workplaces';

    protected $fillable = ['name', 'manager', 'teams'];

    protected $guarded = [];

    public function teams()
    {
        return $this->hasMany(Teams::class);
    }
    
}
