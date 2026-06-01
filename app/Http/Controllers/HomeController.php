<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Company;
use App\Models\Product;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $company = Company::first();
        $banners = Banner::all();
        $categories = Taxonomy::all();
        $products_mas_vendidos = Product::where('is_active', 1)->where('is_liquidacion', 0)->take(8)->get();
        $products_en_liquidacion = Product::where('is_active', 1)->where('is_liquidacion', 1)->take(8)->get();
        return view('home', compact('company', 'banners', 'categories', 'products_mas_vendidos', 'products_en_liquidacion'));
    }
}
