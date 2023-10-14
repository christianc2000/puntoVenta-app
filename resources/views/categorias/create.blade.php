@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Categorías</h1>
@stop

@section('content')


    <!-- Page content -->
    <div class="container-fluid mt--6">
      
        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->
              <div class="card-header border-0">
                <h3 class="mb-0">Categorías</h3>
              </div>
              <!-- Light table -->
              <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong></strong> Hay algunos problemas con los datos.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="form-solicitud" data-parsley-validate class="form-horizontal form-label-left" method="POST"
                    action="{{ route('categorias.store') }}">
                    @csrf
                    <div class="col">                        
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="nombre">Nombre<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="nombre" name="nombre" required="required" class="form-control">
                          </div>
                        </div>
                        <div class="item form-group">
                          <div class="col-md-6 col-sm-6 ">
                            <div class="modal-footer">
                              <button class="btn btn-warning" type="submit">Guardar</button>
                              <a href="{{ route('categorias.index') }}" class="btn btn-danger" data-dismiss="modal" type="button">Cancelar</a>                              
                            </div>
                          </div>
                        </div>
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