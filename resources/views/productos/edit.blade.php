@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
    <div class="container-fluid mt--6">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Editar Producto</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('productos.update', [$producto->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="codigo">Código:</label>
                                <input type="text" name="codigo" class="form-control" required value="{{ $producto->codigo }}">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" required value="{{ $producto->nombre }}">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" class="form-control" required>{{ $producto->descripcion }}</textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="cantidad">Cantidad:</label>
                                    <input type="number" name="cantidad" class="form-control" required value="{{ $producto->cantidad }}">
                                </div>
                                <div class="col">
                                    <label for="precio">Precio:</label>
                                    <input type="text" name="precio" class="form-control" required value="{{ $producto->precio }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="categoria_id">Categoría:</label>
                                <select name="categoria_id" class="form-control">
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}" @if($categoria->id === $producto->categoria_id) selected @endif>{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="../../css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
