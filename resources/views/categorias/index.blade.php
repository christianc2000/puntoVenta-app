@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Categorías</h1>
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
    <div class="row">
      <div class="col-lg-12 col-12 text-right">
        <a class="btn btn-sm btn-warning" href="{{ route('categorias.create') }}">Añadir</a>
      </div>
    </div>

      @if(count($categorias) >= 1)
        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->
              <div class="card-header border-0">
                <h3 class="mb-0">Categorías</h3>
              </div>
              <!-- Light table -->
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" class="sort" data-sort="codigo">Id</th>
                      <th scope="col" class="sort" data-sort="nombre">Nombre</th>
                      <th scope="col" class="sort" data-sort="fecha">Fecha de adición</th>
                      <th scope="col" class="sort" data-sort="accion" colspan="2">Opciones</th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    @foreach($categorias as $categoria)
                      <tr>
                          <td>{{ $categoria->id }}</td>
                          <td>{{ $categoria->nombre }}</td>
                          <td>{{ $categoria->created_at->format('d-m-Y') }}</td>
                          <td class="tdDatos">

                            <a class="btn" style="padding: 5px; width: 30px !important;" href="{{ route('categorias.edit', $categoria->id) }}" >
                              <i class="fas fa-pen-square" style="color: #F39C12;"></i>
                            </a>
                          </td>
                          <td class="tdDatos">
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button class="btn" style="padding: 5px; width: 30px;" type="submit">
                                <i class="fa fa-trash" style="color: #e50914; font-size: 15px;"></i>
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
          @else
          <div class="card-header border-0">
            <h4 class="mb-0">No hay categorías registradas.</h4>
          </div>
          @endif
        </div>

    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="../../css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop
