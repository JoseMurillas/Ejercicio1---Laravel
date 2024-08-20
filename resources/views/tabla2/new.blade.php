@extends('layout');

@section('title')
    Tabla1 | Insertar
@stop
@section('container')
    @section('h1')
        Insertar Tabla 1
    @stop
    <form action="{{url('tabla2')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-8"><br>
                <input type="text" name="correo" placeholder="Ingrese correo" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"><br>
                <input type="number" name="edad" placeholder="Ingrese edad" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"><br>
                <input type="text" name="curso" placeholder="Ingrese curso" class="form-control">
            </div>
        </div>
        <br>
        <div class="col-md-4">
            <button type='submit' class="btn btn-success ">Enviar</button>
            <a href="{{ url('tabla2') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop