<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tweet extends Model
{

    protected $guarded = [];

    public function user(){
        return $this->BelongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function like($user = null, $liked = true){
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id()
        ],
        [
            'liked' => $liked
        ]);
    }

    public function dislike($user = null){
        return $this->like($user, false);
    }





    public function isLikedBy(User $user){ 
    //$this->likes()->where('user_id', $user->id)->exists();  // n+1 problem because there is alot of loops will be runed

        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', true)->count();

    }

    public function isDisLikedBy(User $user){

        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', false)->count();

    }
}
