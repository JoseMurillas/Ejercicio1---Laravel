@extends('layout');

@section('title')
    Tabla1 | Insertar
@stop
@section('container')
    @section('h1')
        Insertar Tabla 1
    @stop
    <form action="{{url('tabla1')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-8"><br>
                <input type="text" name="nombre" placeholder="Ingrese nombre" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"><br>
                <input type="text" name="direccion" placeholder="Ingrese direccion" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"><br>
                <input type="number" name="telefono" placeholder="Ingrese telefono" class="form-control">
            </div>
        </div>
        <br>
        <div class="col-md-4">
            <button type='submit' class="btn btn-success ">Enviar</button>
            <a href="{{ url('tabla1') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop