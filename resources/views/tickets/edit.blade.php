@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{url('/tickets/'.$ticket->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            @include('tickets.form',['Modo'=>'editar'])
        </form>
    </div>
@endsection