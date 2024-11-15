<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('users', function () {
    $users = [
        ['id' => 1, 'name' => 'John Doe'],
    ];
    return view('users.index', ['users' => $users]);
});
