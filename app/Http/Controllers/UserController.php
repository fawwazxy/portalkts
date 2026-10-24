<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
//    public function index(User $model)
//    {
//        return view('users.index');
//    }

    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('management.index', compact('users'));

    }

    public function add()
    {
        return view('management.add');
    }

    public function store(StoreUserRequest $request)
    {

        $users = new User();

        $users->name = $request->input('name');
        $users->ic_num = $request->input('ic_num');
        $users->phone_no = $request->input('phone_no');
        $users->email = $request->input('email');
        $users->username = $request->input('username');
        $users->password = Hash::make($request->input('password'));


        if ($users->save()) {

            return redirect(route('management.index'))->withStatus('Successfully add new user!');
        }

        return back()->withErrors('Failed to add new user!');
    }

    public function edit($id)
    {
        $user = User::find($id); //single data of user
        return view('management.edit', compact('user'));
    }

    public function update($id, UpdateUserRequest $request)
    {
        $users = User::findOrFail($id);

        $users->name = $request->input('name');
        $users->ic_num = $request->input('ic_num');
        $users->phone_no = $request->input('phone_no');
        $users->email = $request->input('email');
        $users->username = $request->input('username');


        if ($users->save($request->all())) {
            return redirect(route('management.index'))->withStatus('Successfully update!');
        }

        return back()->withErrors('Failed to update!');
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);

        if ($users->delete()) {
            return redirect(route('management.index'))->withStatus('Successfully delete user!');
        }

        return back()->withErrors('Failed to delete user!');
    }

    public function show($id)
    {
        $users = User::find($id); //single data of user
        return view('management.show', compact('users'));
    }

}
