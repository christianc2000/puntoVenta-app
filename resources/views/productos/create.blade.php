@extends('adminlte::page')

@section('title', 'Crear Producto')

@section('content_header')
    <h1>Crear Producto</h1>
@stop

@section('content')
    <div class="container-fluid mt--6">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Registrar Producto</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('productos.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="codigo">Código:</label>
                                        <input type="text" name="codigo" id="codigo"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" id="nombre" name="nombre"  required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" id="descripcion"  required="required" class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="cantidad">Cantidad:</label>
                                        <input type="number" id="cantidad" name="cantidad"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="precio">Precio:</label>
                                        <input type="text" id="precio" name="precio"  required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="categoria_id">Categoría:</label>
                                <select name="categoria_id" id="categoria_id" class="form-control">
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-warning py-2 px-5 text-white" type="submit">Guardar</button>
                              <a href="{{ route('categorias.index') }}" class="btn btn-danger py-2 px-5" data-dismiss="modal" type="button">Cancelar</a>
                                {{-- <button type="submit" class="btn btn-primary">Guardar Producto</button>
                                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a> --}}
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
