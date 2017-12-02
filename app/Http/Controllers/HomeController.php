<?php

namespace App\Http\Controllers;

use App\Product;
use App\Image;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->with('image')->get();
        // foreach ($products as $product) {
        //     $rate = explode('.', $product->rate);  
        //     print_r($rate);
        // }
        // return 'done';
        return view('welcome', compact('products', 'rate'));
    }
}
