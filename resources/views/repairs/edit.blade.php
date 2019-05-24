@extends('repairs.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Editar Acción en el Coche</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('repairs.index') }}"> Atrás</a>

        </div>

    </div>

</div>



@if ($errors->any())

<div class="alert alert-danger">

    <strong>Vaya!</strong> Hay algun problema con este dato.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif



<form action="{{ route('repairs.update',$repair->coche_id) }}" method="POST">

    @csrf

    @method('PUT')



    <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">
            
                        <strong></strong>
            
                        <input type="text" name="coche_id" class="form-control" placeholder="coche_id" value="{{ $repair->coche_id }}">
            
                    </div>
            
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
    
                <div class="form-group">
    
                    <strong></strong>
    
                    <input type="text" name="accion" class="form-control" placeholder="Acción" value="{{ $repair->accion }}">
    
                    {{-- <input type="checkbox" name="mantenimiento" value="Mantenimiento"> Mantenimiento 
                    <input type="checkbox" name="reparacion" value="Reparación"> Reparación 
                    <input type="checkbox" name="mejora" value="Mejora"> Mejora  --}}
    
                </div>
    
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12">
    
                <div class="form-group">
    
                    <strong></strong>
    
                    <input type="text" name="kilometros" class="form-control" placeholder="Kilometros" value="{{ $repair->kilometros }}">
    
                </div>
    
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12">
    
                <div class="form-group">
    
                    <strong></strong>
    
                    <input type="date" name="fecha" class="form-control" placeholder="Fecha" value="{{ $repair->fecha }}">
    
                </div>
    
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12">
    
                <div class="form-group">
    
                    <strong></strong>
    
                    <input type="text" name="precio" class="form-control" placeholder="precio" value="{{ $repair->precio }}">
    
                </div>
    
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12">
    
                <div class="form-group">
    
                    <strong></strong>
    
                    <input type="text" name="descripcion" class="form-control" placeholder="Descripción" value="{{ $repair->descripcion }}">
                    
    
                </div>
    
            </div>
    
            
            <div class="col-xs-12 col-sm-12 col-md-12">
    
                <div class="form-group">
    
                    <strong></strong>
    
                    <input type="src" name="imagen" class="form-control" placeholder="Imagen" value="{{ $repair->imagen }}">
      
                </div>
    
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    
                <button type="submit" class="btn btn-primary">Guardar</button>
    
            </div>
    
        </div>
    
    
    
    </form>
    
    @endsection