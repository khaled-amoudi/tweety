<?php

namespace App;

use App\Traits\Followable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'avatar', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }


    // public function getAvatarAttribute(){
    //     return "https://i.pravatar.cc/50?u" . $this->email;
    public function getAvatarAttribute($value){
        return asset('storage/' . $value ?: 'images/default-avatar.jpeg');
    }

    public function timeline(){

        // include the auth user tweets
        // and include the tweets of every user that the auth is follow
        // the tweets will be ordered descending

        // first way
        #$ids = $this->follows()->pluck('id');
        #$ids->push($this->id);
        //$this->follows()=> this make it more performance because it just get the id of all users in a collection
        //$this->follows  => but this get all the data of users in a collection
        #return Tweet::whereIn('user_id', $ids)->latest()->get();


        // second way
        $friends_id = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $friends_id)
            ->orWhere('user_id', $this->id)
            ->latest()->paginate(50);

    }

    public function tweets(){
        return $this->hasMany(Tweet::class)->latest();
    }


    // ovverride this method ..
    public function getRouteKeyName(){
        return 'username';
    }

}
