@extends('plantillas.plantilla')
@section('titulo')
Marcas
@endsection
@section('cabecera')
Marcas Disponibles
@endsection
@section('contenido')
    @if($texto=Session::get('mensaje'))
        <p class="alert alert-success my-3">{{$texto}}</p>
    @endif
    <div class="container">
        <a href="{{route('marcas.create')}}" class="btn btn-success mb-3">Guardar marca</a>
        <table class="table table-striped table-dark mt-3">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($marcas as $marca)
                <tr class="text-center">
                    <th scope="row" class="align-middle">
                        <a href="{{route('marcas.show', $marca)}}" class="btn btn-info">Detalles</a>
                    </th>
                    <td class="align-middle">{{$marca->nombre}}</td>
                    <td class="align-middle">{{$marca->pais}}</td>
                    <td>
                        <img src="{{asset($marca->logo)}}" width="90px" height='90px' class="rounded-circle">
                    </td>
                    <td class="align-middle" style="white-space: nowrap">
                        <form name="borrar" method='post' action='{{route('marcas.destroy', $marca)}}'>
                            @csrf
                            @method('DELETE')
                            <a href='{{route('marcas.edit', $marca)}}' class="btn btn-warning">Editar</a>
                            <button type='submit' class="btn btn-danger" onclick="return confirm('¿Borrar marca?')">
                            Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$marcas->links()}}
        {{-- {{$marcas->appends(Request::except('page'))->links()}} --}}
    </div>
  @endsection
