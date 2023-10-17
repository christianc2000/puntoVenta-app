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

        $notaventas = NotaVenta::all();

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
