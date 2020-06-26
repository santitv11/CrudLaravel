@extends('layouts.app')
@section('content')
    <div class="container">
        @if(Session::has('Mensaje'))
            <div class="alert alert-success" role="alert">
                {{Session::get('Mensaje')}}
            </div>
        @endif
        <h1 class="text-center">Tickets</h1>
        <table class="table table-light table-sm table-hover w-75">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Descripcion</th>
                    <th>Responsable</th>
                    <th>Fecha</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$ticket->descripcion}}</td>
                    <td>{{$ticket->responsable}}</td>
                    <td>{{$ticket->fecha}}</td>
                    <td>
                        <a class="btn btn-sm btn-outline-warning" href="{{url('/tickets/'.$ticket->id.'/edit')}}">Editar</a>
                        <form method="post" action="{{url('/tickets/'.$ticket->id)}}" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{url('tickets/create')}}" class="btn btn-outline-success">Crear Ticket</a>
        {{$tickets->links()}}
    </div>
@endsection