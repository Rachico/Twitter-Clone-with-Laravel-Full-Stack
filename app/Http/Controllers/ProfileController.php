<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $tweets = $user->tweets()->paginate(5);
        return view('profiles.show', compact('user','tweets'));
    }

    public function edit(User $user)

    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)

    {

        $attributes = request()->validate([
            'name'=> ['required', 'string', 'max:255'],
            'username'=> ['required', 'string', 'max:255', 'alpha_dash',Rule::unique('users')->ignore($user)],
            'email' => ['required', 'string', 'max:255','email',Rule::unique('users')->ignore($user)],
            'avatar'=>['image'],
            'password'=>['required', 'string', 'max:255','min:8','max:255','confirmed'],
        ]);

        if(request('avatar'))
        {
            $attributes['avatar'] = request('avatar')->store('avatars','public');
        }


        $attributes['password'] = Hash::make($attributes['password']);


        $user->update($attributes);

        return redirect($user->path());

    }
}
