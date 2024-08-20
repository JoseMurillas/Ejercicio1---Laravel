@extends('layout');

@section('title')
    Tabla3 | Insertar
@stop
@section('container')
    @section('h1')
        Insertar Tabla 3
    @stop
    <form action="{{url('tabla3')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-8"><br>
                <input type="text" name="cedula" placeholder="Ingrese cedula" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"><br>
                <input type="text" name="id" placeholder="Ingrese id" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"><br>
                <input type="text" name="curso_alternativo" placeholder="Ingrese curso alternativo" class="form-control">
            </div>
        </div>
        <br>
        <div class="col-md-4">
            <button type='submit' class="btn btn-success ">Enviar</button>
            <a href="{{ url('tabla3') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop