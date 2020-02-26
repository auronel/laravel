@extends('plantillas.main')
@section('titulo')
    Almezone S.L.
@endsection
@section('cabecera')
    {{$vendedore->nombre.' '.$vendedore->apellidos}}
@endsection
@section('contenido')
    <div class="card">
        <h5 class="card-header text-primary">Detalles del empleado</h5>
        <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="float-right">
            <img src="{{asset($vendedore->foto)}}">
        </div>
        <div>
            <p><label class="font-weight-bold mr-2">Nombre:</label>{{$vendedore->nombre}}</p>
            <p><label class="font-weight-bold mr-2">Apellidos:</label>{{$vendedore->apellidos}}</p>
            <p><label class="font-weight-bold mr-2">Teléfono:</label>{{$vendedore->telefono}}</p>
            <p><label class="font-weight-bold mr-2">E-mail:</label>{{$vendedore->email}}</p>
            <p><label class="font-weight-bold mr-2">Sueldo:</label>{{$vendedore->sueldo}}</p>
        </div>
        <a href="{{route('vendedores.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>
@endsection
