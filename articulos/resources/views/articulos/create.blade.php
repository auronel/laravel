@extends('plantillas.plantilla')
@section('titulo')
    Nuevo articulo
@endsection
@section('cabecera')
    Añadir artículo
@endsection
@section('contenido')
    <form name="c" method='POST' action="{{route('articulos.store')}}" enctype="multipart/form-data">
        <div class="container mt-5">
            <div class="text-center my-3">
                Nombre: <input type="text" name="nombre">
                Categoria: <select name="categoria">
                                <option>Bazar</option>
                                <option>Electrónica</option>
                                <option>Hogar</option>
                            </select>
                Precio: <input type="number" name="nombre" min="0">
            </div>
            <div class="text-center">
                Stock: <input type="number">
                Imagen: &nbsp;<input type='file' name='imagen' accept="image/*">
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-success">Añadir</button>
                <a href="{{route('articulos.index')}}" class="btn btn-warning">Volver</a>
            </div>
        </div>
    </form>
@endsection
