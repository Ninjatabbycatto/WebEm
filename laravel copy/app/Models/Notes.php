<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $table = 'notes';
    protected $fillable = ['content', 'title', 'user_info_id', 'done'];

    public function user_info_id () {
        return $this->belongsTo(UserInfo::class, 'user_info_id');
    }

}
