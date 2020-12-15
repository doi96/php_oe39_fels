<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Followship extends Model
{
    public function follower()
    {
        return $this->belongsTo(User::class,'follower_id','id');
    }

    public function following()
    {
        return $this->belongsTo(User::class,'followed_id','id');
    }
}
