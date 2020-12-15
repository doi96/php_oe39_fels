<?php

use App\Models\Followship;

    function isFollowing($id)
    {
        if (Followship::where('followed_id', $id)->where('follower_id', auth()->user()->id)->exists()) {
            return 'following';
        }else{
            return 'follow';
        }
    }
