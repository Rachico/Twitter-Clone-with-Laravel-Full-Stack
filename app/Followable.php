<?php


namespace App;


trait Followable
{

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id')->withTimestamps();
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user); // same as $this->follows()->attach($user) but in that case we save the attached in DB
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        return $this->follows()->toggle($user);
    }

    public function following (User $user)
    {
        return $this->follows()->where("following_user_id",$user->id)->exists();
    }
}
