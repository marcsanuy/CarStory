@extends('garages.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>CARSTORY - GARAJE</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('garages.create') }}"> Añadir nuevo coche</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Marca</th>

            <th>Modelo</th>

            <th>Versión</th>

            <th>Fecha Matriculación</th>

            <th>Matrícula</th>

            <th>Distintivo Medioambiental DGT</th>

            <th>Imagen</th>

            <th width="280px">Acción</th>

        </tr>

        @foreach ($garages as $garage)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $garage->marca }}</td>

            <td>{{ $garage->modelo }}</td>

            <td>{{ $garage->version }}</td>

            <td>{{ $garage->fecha_matriculacion }}</td>

            <td>{{ $garage->matricula }}</td>

            <td>{{ $garage->distintivo_medioambiental_dgt }}</td>

            <td>{{ $garage->imagen }}</td>
            

            <td>

                <form action="{{ route('garages.destroy',$garage->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('garages.show',$garage->id) }}">Mostrar</a>

    

                    <a class="btn btn-primary" href="{{ route('garages.edit',$garage->id) }}">Editar</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Eliminar</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $garages->links() !!}

      

@endsection