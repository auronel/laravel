@extends('plantillas.main')
@section('titulo')
    Almezone S.L.
@endsection
@section('cabecera')
    <h1 class="text-center">Añadir nuevo producto</h1>
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
    @if ($text=Session::get('mensaje'))
        <p class="alert alert-success my-1">{{$text}}</p>
    @endif
    <div class="container mt-5">
        <form  name="editar" action="{{route('articulos.store')}}" method="post" enctype="multipart/form-data" class="justify-content-md-center">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="modelo" placeholder="Modelo">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="precio" placeholder="Precio">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="stock" placeholder="Stock">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="detalles" placeholder="Detalles">
                </div>
            </div>
            <div class="row justify-content-center mt-1">
                <div class="col-md-6">
                    <label class="mr-2 font-weight-bold">Imágen</label><input type="file" name="foto" accept="image/*">
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <input type="submit" value="Añadir" class="btn btn-success mr-2">
                    <a href="{{route('articulos.index')}}" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </form>
    </div>
@endsection
