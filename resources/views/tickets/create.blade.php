@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{url('/tickets')}}" class="form-horizontal" method="post">
            {{csrf_field()}}
            @include('tickets.form',['Modo'=>'crear'])
        </form>
    </div> 
@endsection