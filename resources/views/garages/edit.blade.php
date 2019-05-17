@extends('garages.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Editar Coche del Garaje</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('garages.index') }}"> Atrás</a>

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



<form action="{{ route('garages.update',$garage->id) }}" method="POST">

    @csrf

    @method('PUT')



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong></strong>

                <input type="text" name="marca" class="form-control" placeholder="Marca" value="{{ $garage->marca }}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong></strong>

                <input type="text" name="modelo" class="form-control" placeholder="Modelo" value="{{ $garage->modelo }}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong></strong>

                <input type="text" name="version" class="form-control" placeholder="Versión" value="{{ $garage->version }}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong></strong>

                <input type="date" name="fecha_matriculacion" class="form-control" placeholder="Fecha Matriculación" value="{{ $garage->fecha_matriculacion }}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong></strong>

                <input type="text" name="matricula" class="form-control" placeholder="Matrícula" value="{{ $garage->matricula }}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong></strong>

                <input type="text" name="distintivo_medioambiental_dgt" class="form-control" value="{{ $garage->distintivo_medioambiental_dgt }}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong></strong>

                <input type="src" name="imagen" class="form-control" placeholder="Imagen" value="{{ $garage->imagen }}">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Guardar</button>

        </div>

    </div>



</form>

@endsection
