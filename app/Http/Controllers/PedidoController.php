<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Company;
use App\Models\Order;
use App\Models\OrderItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PedidoController extends Controller
{
    public function pedido(Request $request)
    {
        try {

            $request->validate([
                'nombres' => 'required',
                'apellidos' => 'required',
                // 'telefono' => 'required',
                'email' => 'required|email',
                'direccion' => 'required',
                'departamento' => 'required',
                'provincia' => 'required',
                'distrito' => 'required',
                'comprobante' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
            ]);

            $business = Company::find(1);

            $total = Cart::content()->sum(function ($item) {
                return $item->price * $item->qty;
            });

            /*
            |--------------------------------------------------------------------------
            | REGISTRAR ORDEN
            |--------------------------------------------------------------------------
            */

            $comprobantePath = null;

            if ($request->hasFile('comprobante')) {

                $comprobantePath = $request->file('comprobante')
                    ->store('comprobantes', 'public');
            }

            $orden = Order::create([
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'telefono' => $request->codigo . $request->telefono,
                'email' => $request->email,
                'direccion' => $request->direccion,
                'departamento' => $request->departamento,
                'provincia' => $request->provincia,
                'distrito' => $request->distrito,
                'referencia' => $request->referencia,
                'comprobante' => $comprobantePath,
                'total' => $total
            ]);

            /*
            |--------------------------------------------------------------------------
            | REGISTRAR ITEMS
            |--------------------------------------------------------------------------
            */

            foreach (Cart::content() as $item) {

                OrderItem::create([
                    'order_id' => $orden->id,
                    'product_id' => $item->id,
                    'quantity' => $item->qty,
                    'price' => $item->price,
                    'subtotal' => $item->price * $item->qty,
                ]);
            }

            /*
            |--------------------------------------------------------------------------
            | PDF
            |--------------------------------------------------------------------------
            */

            $data = [
                'orden' => $orden,
                'items' => Cart::content(),
                'business' => $business,
                'total' => $total
            ];

            ini_set('memory_limit', '512M');

            $pdf = Pdf::loadView('partials.pdf', $data);

            $pdfPath = 'pedido_' . $orden->id . '.pdf';

            Storage::put(
                'public/pedidos/' . $pdfPath,
                $pdf->output()
            );

            $orden->update([
                'pdf' => 'pedidos/' . $pdfPath
            ]);

                        

            /*
            |--------------------------------------------------------------------------
            | LIMPIAR CARRITO
            |--------------------------------------------------------------------------
            */

            Cart::destroy();

            return redirect()
                ->route('home')
                ->with('pedido_success', true);

        } catch (\Throwable $th) {

            return back()->with('error', $th->getMessage());
        }
    }
}
