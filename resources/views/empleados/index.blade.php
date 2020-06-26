@extends('layouts.app')
@section('content')
    <div class="container">
        @if(Session::has('Mensaje'))
            <div class="alert alert-success" role="alert">
                {{Session::get('Mensaje')}}
            </div>
        @endif
        
        <div class="form-row">
            <div class="col">
                <a href="{{url('empleados/create')}}" class="btn btn-success">Agregar Empleado</a>
            </div>
            <div class="col">
                <h1 >Empleados</h1>
            </div>
        </div>

        <table class="table table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" class="img-thubnail img-fluid" width="100"></td>
                    <td>{{$empleado->Nombre}} {{$empleado->ApellidoPaterno}} {{$empleado->ApellidoMaterno}}</td>
                    <td>{{$empleado->Correo}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{url('/empleados/'.$empleado->id.'/edit')}}">Editar</a>
                        <form method="post" action="{{url('/empleados/'.$empleado->id)}}" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$empleados->links()}}
    </div>
@endsection