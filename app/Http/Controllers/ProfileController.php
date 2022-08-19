<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{

    public function show(User $user){
        return view('profile-show', [
            'user' => $user,
            'tweets' => $user->tweets()->paginate(3),
        ]);
    }

    public function edit(User $user){

        # 1
        // if($user->isNot(auth()->user())){
        //     abort(404);
        // }

        # 2
        // abort_if($user->isNot(auth()->user()), 404);

        # 3
        $this->authorize('edit', $user);

        return view('profile-edit', compact('user'));
    }

    public function update(User $user){
        $attributes = request()->validate([
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user)],
            'name' => ['required', 'string', 'max:255'],
            'avatar' => ['file'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:30', 'confirmed'],
        ]);

        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);

        return redirect(route('profile.show', $user));

    }


}
