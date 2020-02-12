@extends('plantillas.plantilla')
@section('titulo')
    Articulos
@endsection
@section('cabecera')
    Artículos disponibles
@endsection
@section('contenido')
    @if($texto=Session::get('mensaje'))
        <p class="alert alert-warning my-3">{{$texto}}</p>
    @endif
    <a href="{{route('articulos.create')}}" class="btn btn-success mb-3">Añadir artículo</a>
    <table class="table table-striped table-dark text-center">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
              </tr>
        </thead>
        <tbody>
            <tbody>
                @foreach ($articulos as $articulo)
                <tr>
                    <td>{{$articulo->nombre}}</td>
                    <td>{{$articulo->categoria}}</td>
                    <td>{{$articulo->precio.' €'}}</td>
                    <td>{{$articulo->stock}}</td>
                    <td><img src="{{asset($articulo->imagen)}}" width="40px" height='40px'></td>
                    <td>
                        <form name="borrar" method='post' action='{{route('articulos.destroy', $articulo)}}'>
                            @csrf
                            @method('DELETE')
                            <a href='{{route('articulos.edit', $articulo)}}' class="btn btn-warning mr-2">Editar</a>
                            <button type='submit' class="btn btn-danger" onclick="return confirm('¿Borrar artículo?')">
                              Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
      </table>
      {{$articulos->links()}}
@endsection
