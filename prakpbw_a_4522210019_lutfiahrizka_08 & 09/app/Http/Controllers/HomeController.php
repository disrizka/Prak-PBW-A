<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home'); // Pastikan view `home` sudah ada di resources/views
    }
}
