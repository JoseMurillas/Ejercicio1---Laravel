@extends('layout');

@section('title')
    TABLA3 | INICIO
@stop

@section('container')
    @section('h1')
        Tabla 3
    @stop
    <a href="{{route('tabla3.create')}}" class="btn btn-primary">Insertar</a>
@stop