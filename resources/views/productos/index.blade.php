@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <!-- Page content -->
    <div class="container-fluid mt--6">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (count($productos) >= 1)
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">Productos</h3>
                            <a class="btn btn-sm btn-warning py-2 px-5 text-white" href="{{ route('productos.create') }}">
                                <i class="fas fa-plus"></i><span class="fw-bold mx-2" style="font-size: 18px;"> Añadir</span>
                            </a>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="codigo">Código</th>
                                    <th scope="col" class="sort" data-sort="id">ID</th>
                                    <th scope="col" class="sort" data-sort="nombre">Nombre</th>
                                    <th scope="col" class="sort" data-sort="cantidad">Cantidad</th>
                                    <th scope="col" class="sort" data-sort="precio">Precio</th>
                                    <th scope="col" class="sort" data-sort="fecha">Fecha de adición</th>
                                    <th scope="col" class="sort" data-sort="categoria">Categoría</th>
                                    <th scope="col" class="sort" data-sort="accion" colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->codigo }}</td>
                                        <td>{{ $producto->id }}</td>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->cantidad }}</td>
                                        <td>{{ $producto->precio }}</td>
                                        <td>{{ $producto->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $producto->categoria->nombre }}</td> <!-- Muestra el nombre de la categoría -->
                                        <td class="tdDatos">
                                            <a class="btn btn-warning text-white px-2" href="{{ route('productos.edit', $producto->id) }}" >
                                                <i class="far fa-edit" style="font-size: 15px;"></i>
                                            </a>
                                        </td>
                                        <td class="tdDatos">
                                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger text-white" style="padding: 5px; width: 30px;" type="submit">
                                                    <i class="fa fa-trash" style="font-size: 15px;"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="card-header border-0">
            <h4 class="mb-0">No hay productos registrados.</h4>
        </div>
        @endif
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="../../css/admin_custom.css"> --}}
@stop

@section('js')

    <script> console.log('Hi!'); </script>
@stop
