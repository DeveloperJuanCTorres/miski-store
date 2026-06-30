<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Taxonomy;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $company = Company::first();
        $cartItems = Cart::content();
        $categories = Taxonomy::all();

        return view('cart.index', compact('cartItems', 'company', 'categories'));
    }

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $currentQty = 0;

        foreach (Cart::content() as $item) {
            if (
                $item->id == $product->id &&
                ($item->options->color_id ?? null) == $request->color_id
            ) {
                $currentQty = $item->qty;
                break;
            }
        }

        $qtyRequested = $request->qty;
        $totalQty = $currentQty + $qtyRequested;

        $colorStock = null;

        if ($request->filled('color_id')) {

            $color = Color::with(['products' => function ($q) use ($product) {
                $q->where('product_id', $product->id);
            }])->find($request->color_id);

            $colorStock = $color?->products->first()?->pivot?->stock;
        }

        // if ($totalQty > $product->stock) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Stock insuficiente. Solo quedan ' . $product->stock,
        //     ]);
        // }

        $stockDisponible = $colorStock ?? $product->stock;

        if ($totalQty > $stockDisponible) {
            return response()->json([
                'success' => false,
                'message' => 'Stock insuficiente. Solo quedan ' . $stockDisponible,
            ]);
        }

        $images = json_decode($product->images, true);

        $image = $images[0] ?? null;

        $color = null;

        if ($request->filled('color_id')) {

            $color = Color::find($request->color_id);

        }

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $request->qty ?? 1,
            'price' => $product->price_oferta ?? $product->price,
            'weight' => 0,
            'options' => [
                'image' => $image,
                'color_id' => $request->color_id,
                'color_name' => $color ? $color->name : null,
                'color_hex' => $color ? $color->hexa : null,
            ]
        ]);

        // ARMAR ITEMS MANUALMENTE
        $items = [];

        foreach(Cart::content() as $item)
        {
            $items[] = [
                'rowId' => $item->rowId,
                'name' => $item->name,
                'qty' => $item->qty,
                'price' => $item->price,
                'image' => $item->options->image,
                'color_id' => $item->options->color_id ?? null,
                'color_name' => $item->options->color_name ?? null,
                'color_hex' => $item->options->color_hex ?? null,
            ];
        }

        return response()->json([
            'success' => true,
            'message' => 'Producto agregado al carrito',
            'count' => Cart::count(),
            'subtotal' => Cart::subtotal(),
            'items' => $items
        ]);
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);

        return back();
    }

    public function update(Request $request)
    {
        $rowId = $request->rowId;
        $qty = (int)$request->qty;

        $cartItem = Cart::get($rowId);

        $product = Product::find($cartItem->id);

        if($qty > $product->stock)
        {
            return response()->json([
                'success' => false,
                'message' => 'Solo hay '.$product->stock.' unidades disponibles.'
            ]);
        }

        Cart::update($rowId, $qty);

        $item = Cart::get($rowId);

        $items = Cart::content()->map(function($item){

            return [
                'name' => $item->name,
                'qty' => $item->qty,
                'price' => $item->price,
                'image' => $item->options->image
            ];

        });

        return response()->json([
            'success' => true,
            'qty' => $qty,
            'subtotal' => Cart::subtotal(),
            'total' => Cart::subtotal(),
            'count' => Cart::count(),
            'item_subtotal' => $item->price * $qty,
            'items' => $items
        ]);
    }

    public function destroy(Request $request)
    {
        Cart::remove($request->rowId);

        return response()->json([
            'success' => true,
            'subtotal' => Cart::subtotal(),
            'count' => Cart::count()
        ]);
    }

    public function checkout()
    {
        $company = Company::first();
        $categories = Taxonomy::all();
        $cartItems = Cart::content();

        return view('cart.checkout', compact('cartItems', 'company', 'categories'));
    }
}