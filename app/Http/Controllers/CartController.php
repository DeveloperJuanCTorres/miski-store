<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $company = Company::first();
        $cartItems = Cart::content();

        return view('cart.index', compact('cartItems', 'company'));
    }

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $images = json_decode($product->images, true);

        $image = $images[0] ?? null;

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $request->qty ?? 1,
            'price' => $product->price_oferta ?? $product->price,
            'weight' => 0,
            'options' => [
                'image' => $image
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
                'image' => $item->options->image
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

        $qty = $request->qty;

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
        $cartItems = Cart::content();

        return view('cart.checkout', compact('cartItems', 'company'));
    }
}