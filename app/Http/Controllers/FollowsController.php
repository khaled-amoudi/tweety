<?php

namespace App\Http\Controllers;

use App\Traits\Followable;
use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    use Followable;

    public function store(User $user){

        auth()->user()->toggleFollow($user);
        return back();
    }
}
