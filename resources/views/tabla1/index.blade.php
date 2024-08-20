@extends('layout');

@section('title')
    TABLA1 | INICIO
@stop

@section('container')
    @section('h1')
        Tabla 1
    @stop
    <a href="{{route('tabla1.create')}}" class="btn btn-primary">Insertar</a>
@stop