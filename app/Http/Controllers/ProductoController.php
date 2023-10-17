<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('categoria')->get();
    
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = CategoriaModel::all();
        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        // dd('llego hasta aqui');
        Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto creado exitosamente.');
    }

    public function edit(Producto $producto)
    {
        $categorias = CategoriaModel::all();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'codigo' => 'required|unique:productos,codigo,' . $producto->id,
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado exitosamente.');
    }
}
