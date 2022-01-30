<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function Home()
    {
        $products = Product::orderBy('created_at','desc')->limit(7)->get();
        return view('home',['products'=>$products]);
    }
    public function About()
    {
        return view('about');
    }
}
