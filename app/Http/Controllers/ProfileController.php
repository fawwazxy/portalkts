<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->ic_num = $request->input('ic_num');
        $user->phone_no = $request->input('phone_no');
        $user->email = $request->input('email');
        $user->username = $request->input('username');

        if ($user->save($request->all())) {
            return back()->withStatus(__('Profile successfully updated!'));
        }

        return back()->withErrors('Profile failed to update!');
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);

        $user->password = Hash::make($request->input('password'));

        if ($user->save($request->all())) {
            return back()->withStatus(__('Password successfully updated!'));
        }

        return back()->withErrors('Profile failed to update!');

    }
}
