@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>
        Venta</h1>
@stop

@section('content')
    <div class="container-fluid mt--6">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row ">
            <div class="col ">
                <div class="card ">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">Nota de Ventas</h3>
                            <a class="btn btn-sm btn-warning py-2 px-5 text-white" href="{{ route('ventas.create') }}">
                                <i class="fas fa-plus"></i><span class="fw-bold mx-2" style="font-size: 18px;">
                                    Añadir</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <table id="table" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col" class="sort" data-sort="id" colspan="1">ID</th>
                                    <th scope="col" class="sort" data-sort="total" colspan="1">TOTAL</th>
                                    <th scope="col" class="sort" data-sort="fecha" colspan="1">FECHA</th>
                                    <th scope="col" class="sort" data-sort="estado" colspan="1">ESTADO</th>
                                    <th scope="col" class="sort" data-sort="accion" colspan="2">OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notaventas as $nv)
                                    <tr>
                                        <td>{{ $nv->id }}</td>
                                        <td>{{ $nv->total }}</td>
                                        <td>{{ $nv->created_at }}</td>
                                        <td class="p-2">
                                            @if ($nv->estado)
                                                <div style="text-align: center; border-radius: 10px; background: #00A65A; color:white">
                                                    <strong>REALIZADO</strong>
                                                </div>
                                            @else
                                                <div style="text-align: center; border-radius: 10px; background: #DD4B39; color:white">
                                                    <strong>CANCELADO</strong>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="tdDatos">
                                            <a class="btn btn-warning text-white px-2" href="{{ route('ventas.edit', $nv->id) }}" >
                                                <i class="far fa-edit" style="font-size: 15px;"></i>
                                            </a>
                                        </td>
                                        <td class="tdDatos">
                                            <form action="{{ route('ventas.destroy', $nv->id) }}" method="POST">
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
    </div>
@stop
@section('css')
    {{-- <link rel="stylesheet" href="../../css/admin_custom.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
       
    </script>
@stop
