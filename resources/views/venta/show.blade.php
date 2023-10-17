@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
    <h1>NOTA DE VENTA</h1>
@stop

@section('content')
    <div class="container-fluid mt-6">
        <div class="row ">
            <div class="col ">
                <div class="card ">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="d-flex align-items-center">
                            <a href="{{ route('ventas.index') }}" style="color: black"><i
                                    class="fa fa-lg fa-arrow-left"></i></a>
                            <h4 class="px-2">Venta/mostrar/{{ $nota_venta->id }}</h4>
                        </div>
                    </div>
                    <div class="card-body p-4">

                        <div class="row g-3">
                            <div class="col-md-12" style="text-align: center">
                                <h4>Minimarket Elena</h4>
                            </div>
                            <div class="col-md-12 d-flex">
                                <label for="nro_nota" class="form-label" style="width: 130px">Nro de Nota: </label>
                                <p class="mx-2">{{ $nota_venta->id }}</p>
                            </div>
                            <div class="col-md-12 d-flex">
                                <label for="fecha_venta" class="form-label" style="width: 130px">Fecha de Venta: </label>
                                <p class="mx-2">{{ $nota_venta->created_at }}</p>
                            </div>

                        </div>
                        <div class="mt-3">
                            <label for="fecha_venta" class="form-label">Detalle de Venta</label>
                            <table id="table" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col" class="sort" data-sort="id" colspan="1">ID</th>
                                        <th scope="col" class="sort" data-sort="total" colspan="1">PRODUCTO</th>
                                        <th scope="col" class="sort" data-sort="fecha" colspan="1">PRECIO</th>
                                        <th scope="col" class="sort" data-sort="estado" colspan="1">CANTIDAD</th>
                                        <th scope="col" class="sort" data-sort="accion" colspan="1">SUBTOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleVenta as $dv)
                                        <tr>
                                            <td>{{ $dv->id }}</td>
                                            <td>{{ $dv->producto->nombre }}</td>
                                            <td>{{ $dv->precio_unitario }}</td>
                                            <td>{{ $dv->cantidad }}</td>
                                            <td>{{ $dv->sub_total }}</td>
                                        </tr>
                                    @endforeach
                                    <tr >
                                        <td colspan="4" style="background: #F39C12">
                                            <strong class="d-grid gap-2 d-md-flex justify-content-md-end">Total</strong>
                                        </td>
                                        <td style="background: #F39C12">{{ $nota_venta->total }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
        // new DataTable('#table', {
        //     order: []
        // });
    </script>
@stop
