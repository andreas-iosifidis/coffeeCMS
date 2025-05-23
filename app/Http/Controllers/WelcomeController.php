<?php

namespace   App\Http\Controllers;

use App\Models\Product\Product;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $products = Product::select()->orderBy('id', 'desc')->take(4)->get();
        return view('welcome', compact('products'));
    }
}
