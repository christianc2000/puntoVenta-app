@extends('adminlte::page')

@section('title', 'Recomendaciones de Productos')

@section('content_header')
    <h1>Recomendaciones de Productos</h1>
@stop

@section('content')
    <div class="container-fluid mt-6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h4 class="px-2">Productos Recomendados</h4>
                    </div>
                    <div class="card-body p-4">
                        <table id="table" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col" class="sort" data-sort="id" colspan="1">ID</th>
                                    <th scope="col" class="sort" data-sort="nombre" colspan="1">PRODUCTO</th>
                                    <th scope="col" class="sort" data-sort="precio" colspan="1">PRECIO</th>
                                    <th scope="col" class="sort" data-sort="stock" colspan="1">STOCK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Producto 1 -->
                                <tr>
                                    <td>1</td>
                                    <td>Pepinos frescos</td>
                                    <td>19.99</td>
                                    <td>50</td>
                                </tr>
                                <!-- Producto 2 -->
                                <tr>
                                    <td>2</td>
                                    <td>Uvas Frescas</td>
                                    <td>24.99</td>
                                    <td>30</td>
                                </tr>
                          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</script>
@stop
