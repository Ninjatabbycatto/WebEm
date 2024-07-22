<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $table = 'notes';
    protected $fillable = ['content', 'title'];

    public function owner () {
        return $this->belongsTo(UserInfo::class, 'users');
    }

}
