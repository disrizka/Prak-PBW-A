<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->get();
        
        return view("users.index", ['users' => $users]);
    }

    public function create()
    {
        return view('users.create',);
    }

    public function store(Request $request)
    {
        User::create($request->validate([
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]));

        return redirect('/users');
    }
    public function show($id)
    {
        $user = User::find($id);

        abort_if(!$user, 404);
        return view('users/show',['user'=>$user,]);
    }
}