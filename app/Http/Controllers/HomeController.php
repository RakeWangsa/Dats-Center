<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home', [
            'title' => 'Dats Center - Home',
            'active' => 'home',
        ]);
    }
    public function homeAdmin()
    {
        return view('user.home', [
            'title' => 'Dats Center - Home',
            'active' => 'home',
        ]);
    }
}
