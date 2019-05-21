@extends('repairs.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Añadir Reparación Mantenimiento o Mejora</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('repairs.create') }}"> Añadir nueva acción</a>

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

            <th>Accion</th>

            <th>Kilometros</th>

            <th>Fecha</th>

            <th>Precio</th>

            <th>Descripción</th>

            <th>Imagen</th>

            <th width="280px">Acción</th>

        </tr>

        @foreach ($repairs as $repair)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $repair->accion }}</td>

            <td>{{ $repair->kilometros }}</td>

            <td>{{ $repair->fecha }}</td>

            <td>{{ $repair->precio }}</td>

            <td>{{ $repair->descripcion }}</td>

            <td>{{ $garage->imagen }}</td>
            

            <td>

                <form action="{{ route('repairs.destroy',$repair->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('repairs.show',$repair->id) }}">Mostrar</a>

    

                    <a class="btn btn-primary" href="{{ route('repairs.edit',$repair->id) }}">Editar</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Eliminar</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $repairs->links() !!}

      

@endsection