@extends('plantillas.plantilla')
@section('titulo')
    Academia s.a.
@endsection
@section('cabecera')
    Academia S.A.
@endsection
@section('contenido')
    <div class="txt-center mt-3">
        <a href="{{route('alumnos.index')}}" class="btn btn-primary mr-4">Gestionar alumnos</a>
        <a href="{{route('modulos.index')}}" class="btn btn-primary mr-4">Gestionar modulos</a>
    </div>
@endsection