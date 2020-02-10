@extends('plantillas.plantilla')
@section('titulo')
    Articulos
@endsection
@section('cabecera')
    Artículos disponibles
@endsection
@section('contenido')
    @if($texto=Session::get('mensaje'))
        <p class="alert alert-success my-3">{{$texto}}</p>
    @endif
    <a href="{{route('articulos.create')}}" class="btn btn-success mb-3">Guardar artículo</a>
    <form name="search" method="get" action="{{route('articulos.index')}}" class="form-inline float-right">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Imagen</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$articulo->nombre}}</td>
                    <td>{{$articulo->categoria}}</td>
                    <td>{{$articulo->precio}}</td>
                    <td>{{$articulo->stock}}</td>
                    <td>{{$articulo->imagen}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
@endsection
