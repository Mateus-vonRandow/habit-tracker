<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    
    public function index ()
    {
        $name = 'Mateus';
        $habits = ['Reading', 'Coding', 'Traveling', 'Cooking'];

        return view('home', compact('name', 'habits'));
    }


    public function dashboard()
    {
        return view('dashboard');
    }
}

