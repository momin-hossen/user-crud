<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->status = $request->status;
        $user->role = $request->role;
        $user->save();

        return back();
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }

    public function edit($id=null)
    {
        $users = User::find($id);
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->status = $request->status;
        $user->role = $request->role;
        $user->save();

        return redirect('users/index');
    }
}
