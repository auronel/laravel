@extends('plantillas.main')
@section('titulo')
    Almezone S.L.
@endsection
@section('cabecera')
    <h1 class="text-center">Productos</h1>
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
    <a href="{{route('articulos.create')}}" class="btn btn-success ml-4 my-2">Añadir producto</a>
    <table class="table table-borderless mt-5">
        <thead>
        <tr>
            <th scope="col" class="text-center"></th>
            <th scope="col" class="text-center">Nombre</th>
            <th scope="col" class="text-center">Modelo</th>
            <th scope="col" class="text-center">Precio</th>
            <th scope="col" class="text-center">Stock</th>
            <th scope="col" class="text-center">Imagen</th>
            <th scope="col" class="text-center">Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td class="text-center"><a href="{{route('articulos.show',$articulo)}}" class="text-white btn btn-info">Detalles</a></td>
                    <td class="text-center">{{$articulo->nombre}}</td>
                    <td class="text-center">{{$articulo->modelo}}</td>
                    <td class="text-center">{{$articulo->precio}}</td>
                    <td class="text-center">{{$articulo->stock}}</td>
                    <td class="text-center"><img src="{{asset($articulo->foto)}}" width="90vw" height="90vh" class="img-fluid rounded-circle"></td>
                    <td class="text-center">
                        <form name="delete" action="{{route('articulos.destroy',$articulo)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" onclick="return confirm('¿Desea eliminar el producto?')" value="Eliminar" class="btn btn-danger">
                            <a href="{{route('articulos.edit',$articulo)}}" class="btn btn-warning">Editar</a>
                        </form>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
    {{$articulos->links()}}
@endsection
