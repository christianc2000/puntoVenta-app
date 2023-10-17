<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use App\Models\NotaVenta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notaventas = NotaVenta::getOrderFechaDesc();
        return view('venta.index', compact('notaventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        return view('venta.create', compact('productos'));
    }
    public function buscarProductos(Request $request)
    {
        $term = $request->input('term');
        $productos = Producto::where('nombre', 'like', "%$term%")->get();

        return response()->json($productos);
    }
    public function obtenerDetallesProducto(Request $request)
    {
        $productoId = $request->input('productoId');

        // Realiza la lógica para obtener los detalles del producto en función del ID.

        // Por ejemplo, supongamos que tienes un modelo Product y quieres obtener los detalles de un producto:
        $producto = Producto::find($productoId);

        return response()->json($producto);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $carrito = json_decode($request->productos);
        $productos_carrito = $carrito->productos;
        $total = json_decode($carrito->total);

        $nota_venta = NotaVenta::create(['total' => $total]);
        foreach ($productos_carrito as $producto) {
            DetalleVenta::create([
                'precio_unitario' => $producto->precio,
                'cantidad' => $producto->cantidad,
                'sub_total' => $producto->costo,
                'producto_id' => $producto->id,
                'nota_venta_id' => $nota_venta->id
            ]);
        }

        return redirect()->route('ventas.index')->with('success', 'Venta registrada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota_venta = NotaVenta::find($id);
        if (isset($nota_venta)) {
            $detalleVenta = DetalleVenta::with('producto')->where('nota_venta_id', $nota_venta->id)->get();
            return view('venta.show', compact('detalleVenta', 'nota_venta'));
        } else {
            return redirect()->route('ventas.index')->with('fail', 'Nota de venta no encontrada');
        }
    }
    public function anular($id)
    {
        return $id;
        $nota_venta = NotaVenta::find($id);
        if (isset($nota_venta)) {
            $nota_venta->estado = false;
            $nota_venta->save();
            return redirect()->route('ventas.index')->with('success', 'Venta cancelada '.$nota_venta->id);
        } else {
            return redirect()->route('ventas.index')->with('fail', 'Nota de venta no encontrada');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
