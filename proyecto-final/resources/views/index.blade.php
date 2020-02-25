@extends('plantillas.main')
@section('titulo')
    Almezone S.L.
@endsection
@section('cabecera')
    <h1 class="text-center">Almezone S.L.</h1>
@endsection
@section('contenido')
    <div class="container text-center mt-5">
        <a href="{{route('articulos.index')}}" class="btn btn-success">Articulos</a>
        <a href="{{route('vendedores.index')}}" class="btn btn-success">Vendedores</a>
    </div>
@endsection
