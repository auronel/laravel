@extends('plantillas.plantilla')
@section('titulo')
    Detalles modulo
@endsection
@section('cabecera')
    Detalle modulo
@endsection
@section('contenido')
    @if ($text=Session::get('mensaje'))
        <p class="alert alert-info my-3">{{$text}}</p>
    @endif
    <span class="clearfix"></span>
    <div class="card text-white bg-info mt-5 mx-auto" style="max-width: 48rem;">
        <div class="card-header text-center"><b>Modulos</b></div>
        <div class="card-body" style="font-size: 1.1em">
            <p class="card-text">
                <p><b>Nombre:</b> {{$modulo->nombre}}</p>
                <p><b>Horas:</b> {{$modulo->horas}}</p>
            </p>
            <a href="{{route('modulos.index')}}" class="float-right mt-3 btn btn-success">Volver</a>
        </div>
    </div>
@endsection