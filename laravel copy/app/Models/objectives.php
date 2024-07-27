<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objectives extends Model
{
    use HasFactory;

    protected $table = 'objectives';
    protected $fillable = ['startDate','endDate','title','description', 'user_info_id'];

    public function userInfo(){
        return $this->belongsTo(UserInfo::class, 'user_info_id');
    }

}
