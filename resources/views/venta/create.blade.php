@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
    <h1>Venta</h1>
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

        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h3 class="mb-0">Nota de Ventas</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column position-relative">
                                    <input type="text" id="busqueda" class="form-control"
                                        placeholder="Buscar productos...">
                                    <select id="resultados" class="form-control" size="5"
                                        style="display: none; position: absolute; top: 100%;"></select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        {{-- <div class="row g-3">
                            <div class="col-md-12"> --}}

                        <div class="mb-3">
                            <label for="producto" class="form-label">Producto</label>
                            <input type="text" class="form-control" id="producto" name="producto"
                                aria-describedby="productoHelp" readonly>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-3 mb-3">
                                <label for="stockDisponible" class="form-label">Stock Disponible</label>
                                <input type="number" class="form-control" id="stock" name="stock"
                                    aria-describedby="stockDisponibleHelp"readonly>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="precio" class="form-label">Precio de venta</label>
                                <input type="text" class="form-control" id="precio" name="precio"
                                    aria-describedby="precioHelp" readonly>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad"
                                    aria-describedby="cantidadHelp" step="1" readonly>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="costo" class="form-label">Costo</label>
                                <input type="number" class="form-control" id="costo" name="costo"
                                    aria-describedby="costoHelp" readonly>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="button" class="btn btn-sm btn-warning py-2 px-5 text-white w-100"
                                    id="btn-agregar">
                                    <span class="fw-bold mx-2" style="font-size: 18px;">Agregar Producto</span>
                                </button>
                            </div>
                        </div>

                        {{-- </div>
                    </div> --}}
                        <div class="mb-3">
                            <h3>Detalles de Venta</h3>
                        </div>
                        <div class="mb-3">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <th>Eliminar</th>
                                    <th>Producto</th>
                                    <th>Precio Venta</th>
                                    <th>Cantidad</th>
                                    <th>Sub Total</th>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td colspan="4">
                                            <strong class="d-grid gap-2 d-md-flex justify-content-md-end">Total</strong>
                                        </td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-primary" id="btn-recomendacion">
                                <span class="fw-bold mx-2" style="font-size: 18px;">Ver productos recomendados</span>
                            </button>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 mb-2">
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-sm btn-warning py-2 px-5 text-white w-100"
                                            id="btn-guardar">
                                            <span class="fw-bold mx-2" style="font-size: 18px;">Guardar</span>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-sm btn-danger py-2 px-5 text-white w-100"
                                            id="btn-cancelar"><span class="fw-bold mx-2"
                                                style="font-size: 18px;">Cancelar</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')
    {{-- <link rel="stylesheet" href="../../css/admin_custom.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"> --}}
@stop

@section('js')
    <script>
        $(document).ready(function() {
            // Elementos HTML
            var $table = $('#table');
            var $busqueda = $('#busqueda');
            var $resultados = $('#resultados');
            var $productoInput = $('#producto');
            var $stockInput = $('#stock');
            var $cantidadInput = $('#cantidad');
            var $precioInput = $('#precio');
            var $costoInput = $('#costo');
            var $agregar = $('#btn-agregar');
            var $totalRow = $table.find('tbody tr:last');
            // Manejar clic en el campo de búsqueda
            $busqueda.on('click', function() {
                $resultados.show();
            });

            // Manejar clic en cualquier otro lugar de la página
            $(document).on('click', function(e) {
                if (!$resultados.is(e.target) && !$busqueda.is(e.target) && $resultados.has(e.target)
                    .length === 0) {
                    $resultados.hide();
                }
            });

            // Manejar entrada en el campo de búsqueda
            $busqueda.on('input', function() {
                var term = $busqueda.val();

                // Realizar una solicitud AJAX para buscar productos
                $.get('/buscar-productos', {
                    term: term
                }, function(productos) {

                    $resultados.empty();
                    productos.forEach(function(producto) {
                        console.log(producto);
                        $resultados.append('<option value="' + producto.id + '"">' +
                            producto
                            .nombre + '</option>');
                    });
                });
            });

            // Manejar selección de producto
            $resultados.on('change', function() {
                var productoId = $resultados.val();
                $busqueda.val("");
                console.log(productoId);
                if (productoId) {
                    // Realizar una solicitud AJAX para obtener los detalles del producto seleccionado
                    $.get('/obtener-detalles-producto', {
                        productoId: parseInt(productoId)
                    }, function(detalles) {
                        $cantidadInput.removeAttr('readonly');
                        console.log("retorno: ", detalles);
                        // Rellenar los campos con los detalles del producto
                        $productoInput.val(detalles.nombre);
                        $stockInput.val(detalles.cantidad);
                        $cantidadInput.val(1);
                        $costoInput.val(1 * detalles.precio);
                        $precioInput.val(detalles.precio)
                        $agregar.prop('disabled', false);
                        $resultados.hide();
                    });

                }
            });
            $cantidadInput.on('input', function() {
                var cantidad = parseInt($cantidadInput.val());
                var precio = parseFloat($precioInput.val());

                // Verificar que cantidad y precio sean números válidos
                if (!isNaN(cantidad) && !isNaN(precio)) {
                    var costo = cantidad * precio;
                    $costoInput.val(costo);
                } else {
                    // En caso de que la cantidad o el precio no sean números válidos, establecer el valor de costo en 0 o un valor predeterminado.
                    $costoInput.val(0);
                }
            });
            $cantidadInput.on('input', function() {
                var valor = $(this).val();

                // Verificar si el valor no es un número entero
                if (!Number.isInteger(parseFloat(valor))) {
                    // Restablecer el valor a un valor válido (por ejemplo, 0)
                    $(this).val('0');
                }
                if (valor.startsWith('0') && valor.length > 1) {
                    // Elimina el cero si el valor comienza con '0' y tiene más de un carácter
                    $(this).val(valor.substr(1));
                }
            });
            // Manejar clic en el botón Agregar
            $agregar.on('click', function() {
                var productoId = $resultados.val();
                if (productoId) {
                    var producto = $productoInput.val();
                    var stock = $stockInput.val();
                    var precio = $precioInput.val();
                    var cantidad = $cantidadInput.val();
                    var costo = $costoInput.val();
                    $cantidadInput.prop('readonly', true);

                    // Agregar una nueva fila a la tabla con los valores del producto
                    var row = '<tr>';
                    row += '<td><div class="btn btn-danger btn-eliminar">x</div></td>';
                    row += '<td>' + producto + '</td>';
                    row += '<td>' + precio + '</td>';
                    row += '<td>' + cantidad + '</td>';
                    row += '<td>' + costo + '</td>';
                    row += '</tr>';

                    // Agregar la nueva fila antes de la fila del total
                    $(row).insertBefore($totalRow);
                    // Actualizar el valor total
                    updateTotal();
                    // Limpiar los campos de entrada
                    $productoInput.val('');
                    $stockInput.val('');
                    $precioInput.val('');
                    $cantidadInput.val('');
                    $costoInput.val('');
                }

                function updateTotal() {
                    var total = 0;

                    // Iterar a través de las filas de la tabla y sumar los subtotales
                    $table.find('tbody tr').each(function() {
                        var subtotal = parseFloat($(this).find('td:eq(4)').text());
                        if (!isNaN(subtotal)) {
                            total += subtotal;
                        }
                    });

                    // Actualizar el valor de la última fila (fila de total) con el nuevo total
                    $totalRow.find('td:eq(1)').text(total.toFixed(2));
                }
            });
        });
    </script>
@stop
