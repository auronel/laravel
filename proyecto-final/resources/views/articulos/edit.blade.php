@extends('plantillas.main')
@section('titulo')
    Almezone S.L.
@endsection
@section('cabecera')
    <h1 class="text-center">Modificar producto</h1>
@endsection
@section('contenido')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $miError)
                    <li>{{$miError}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container mt-5">
        <form  name="editar" action="{{route('articulos.update',$articulo)}}" method="post" enctype="multipart/form-data" class="justify-content-center">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{{$articulo->nombre}}" name="nombre">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{{$articulo->modelo}}" name="modelo">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{{$articulo->precio}}" name="precio">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{{$articulo->stock}}" name="stock">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{{$articulo->detalles}}" name="detalles">
                </div>
            </div>
            <div class="row justify-content-center mt-1">
                <div class="col-md-6">
                    <label class="mr-2 font-weight-bold">Imágen</label><input type="file" name="foto" accept="image/*">
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <input type="submit" value="Modificar" class="btn btn-success mr-2">
                    <a href="{{route('articulos.index')}}" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </form>
    </div>
@endsection
