<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;

use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    public function delete(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }
}
