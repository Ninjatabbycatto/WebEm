<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;


    protected $table = 'events';

    protected $fillable = ['title', 'desc'];

    public function workplace() {
        return $this->belongsTo(Workplaces::class, 'workplaces');
    }
}
