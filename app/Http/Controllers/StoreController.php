<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Company;
use App\Models\Product;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    // public function index(Request $request)
    // {
    //     $company = Company::first();
    //     $query = Product::with(['brand', 'taxonomy']);

    //     // FILTRO POR CATEGORÍA
    //     if($request->category)
    //     {
    //         $query->where('taxonomy_id', $request->category);
    //     }

    //     $products = $query->latest()->paginate(9);

    //     $brands = Brand::all();

    //     $categories = Taxonomy::all();

    //     return view('tienda', compact(
    //         'products',
    //         'brands',
    //         'categories',
    //         'company'
    //     ));
    // }

    public function index(Request $request)
    {
        $company = Company::first();

        $query = Product::with(['brand', 'taxonomy']);

        // CATEGORÍA
        if($request->filled('category'))
        {
            $query->where('taxonomy_id', $request->category);
        }

        // BÚSQUEDA
        if($request->filled('search'))
        {
            $query->where(function($q) use ($request){

                $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');

            });
        }

        $products = $query->latest()->paginate(9);

        $brands = Brand::all();

        $categories = Taxonomy::all();

        return view('tienda', compact(
            'products',
            'brands',
            'categories',
            'company'
        ));
    }

    public function filter(Request $request)
    {
        $query = Product::with(['taxonomy','brand']);

        // BÚSQUEDA
        if($request->filled('search'))
        {
            $query->where(function($q) use ($request){

                $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');

            });
        }

        if($request->category)
        {
            $query->where('taxonomy_id', $request->category);
        }

        if($request->brand)
        {
            $query->where('brand_id', $request->brand);
        }

        if($request->price)
        {
            $query->where('price', '<=', $request->price);
        }

        switch($request->sort)
        {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;

            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;

            default:
                $query->latest();
                break;
        }

        $products = $query->paginate(9);

        return view('partials.products-grid', compact('products'))->render();
    }

    // public function filter(Request $request)
    // {
    //     $query = Product::with(['taxonomy','brand']);

    //     if($request->category)
    //     {
    //         $query->where('taxonomy_id', $request->category);
    //     }

    //     if($request->brand)
    //     {
    //         $query->where('brand_id', $request->brand);
    //     }

    //     if($request->price)
    //     {
    //         $query->where('price', '<=', $request->price);
    //     }

    //     switch($request->sort)
    //     {
    //         case 'price_asc':
    //             $query->orderBy('price', 'asc');
    //             break;

    //         case 'price_desc':
    //             $query->orderBy('price', 'desc');
    //             break;

    //         default:
    //             $query->latest();
    //             break;
    //     }

    //     $products = $query->paginate(9);

    //     return view('partials.products-grid', compact('products'))->render();
    // }
}
