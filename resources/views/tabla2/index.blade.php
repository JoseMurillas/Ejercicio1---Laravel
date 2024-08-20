@extends('layout');

@section('title')
    TABLA2 | INICIO
@stop

@section('container')
    @section('h1')
        Tabla 2
    @stop
    <a href="{{route('tabla2.create')}}" class="btn btn-primary">Insertar</a>
@stop