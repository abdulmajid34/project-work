<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users,username|min:11',
            'password' => 'required|min:6',
            'nama_akun' => 'required',
            'role' => 'required',
            'status' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('user')->with('success', 'User created successfully');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        dd($request->all());
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user')->with('success', 'User deleted successfully');
    }
}
