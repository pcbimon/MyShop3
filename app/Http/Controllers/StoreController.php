<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function Home()
    {
        return view('home');
    }
    public function About()
    {
        return view('about');
    }
}
